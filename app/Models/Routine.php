<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Routine extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'teacher_id',
        'course_id',
        'department',
        'semester',
        'time',
        'day'
    ];

    public function routine() : BelongsTo
    {
        return $this->belongsTo(Course::class, 'id');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Str::uuid()->toString();
        });
    }

    public static function getRoutineByDayTime( $department, $semester, $days, $times, $action = true): array
    {
        $routine = Routine::where('semester', $semester)
            ->where('department', $department)
            ->orderByRaw("FIELD(day, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday')")
            ->orderBy('time')
            ->get()
            ->groupBy('day')
            ->map(function ($dayGroup) use ($times) {
                $organizedByTime = [];
                foreach ($times as $time => $label) {
                    $organizedByTime[$time] = [];
                }

                foreach ($dayGroup as $routine) {
                    $timeKey = $routine->time;
                    $course = Course::find($routine->course_id);
                    $teacher = User::find($routine->teacher_id);
                    $routine->course_title = $course->title;
                    $routine->course_code = $course->code;
                    $routine->teacher_name = $teacher->name;
                    $organizedByTime[$timeKey][] = $routine->toArray();
                }

                return $organizedByTime;
            })
            ->toArray();

        foreach ( $days as $day ) {
            foreach ( $times as $time ) {
                if( ! isset($routine[$day][$time]) ) {
                    $routine[$day][$time] = [];
                }
            }
        }

        if( ! $action ) {
            return $routine;
        }

        return self::addCoursesToRoutine($routine, $department, $semester, $days, $times);
    }

    private static function addCoursesToRoutine( $routinesData, $department, $semester, $days, $times ): array
    {
        foreach ( $days as $day ) {
            foreach ( $times as $time ) {
                $routinesData[$day][$time] = [
                    'course' =>
                        Course::where('department', $department)
                            ->where('semester', $semester)
                            ->whereNotIn('id', function ($query) use ($day, $time) {
                                $query->select('course_id')
                                    ->from('routines')
                                    ->where('day', $day)
                                    ->where('time', $time);
                            })
                            ->get()
                            ->map(function($course) use($day, $time){
                                $modifyCourse = $course->toArray();
                                $modifyCourse['teachers'] = [];
                                if( isset($course->assigned_teachers_ids) ) {
                                    $teachers = explode(',', $course->assigned_teachers_ids);
                                    foreach ($teachers as $teacher) {
                                        $teacher = User::find($teacher);
                                        if( ! $teacher ) {
                                            continue;
                                        }
                                        $is_exist = Routine::where('teacher_id', $teacher->id)
                                            ->where('day', $day)
                                            ->where('time', $time)
                                            ->first();
                                        if( ! empty($is_exist) ) {
                                            continue;
                                        }
                                        if( $teacher ) {
                                            $modifyCourse['teachers'][] = $teacher->toArray();
                                        }
                                    }
                                }
                                return $modifyCourse;
                            })
                            ->toArray()
                ];
            }
        }

        return $routinesData;
    }

    public static function getTeacherPersonalRoutine( $formData )
    {
        $times = config('admin-panel.class_times');
        $days = config('admin-panel.working_days');
        $routine = Routine::where('teacher_id', $formData['teacher_id'])
            ->where('semester', $formData['semester'])
            ->where('department', $formData['department'])
            ->orderByRaw("FIELD(day, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday')")
            ->orderBy('time')
            ->get()
            ->groupBy('day')
            ->map(function ($dayGroup) use ($times) {
                $organizedByTime = [];
                foreach ($times as $time => $label) {
                    $organizedByTime[$time] = [];
                }

                foreach ($dayGroup as $routine) {
                    $timeKey = $routine->time;
                    $course = Course::find($routine->course_id);
                    $routine->course_title = $course->title;
                    $routine->course_code = $course->code;
                    $routine->teacher_name = User::find($routine->teacher_id)->name;
                    $organizedByTime[$timeKey][] = $routine->toArray();
                }

                return $organizedByTime;
            })
            ->toArray();

        foreach ( $days as $day ) {
            foreach ( $times as $time ) {
                if( ! isset($routine[$day][$time]) ) {
                    $routine[$day][$time] = [];
                }
            }
        }

        return $routine;
    }

    public static function getTeacherCreditHistory( $data ) {
        $credits = Routine::select('teacher_id')
            ->join('courses', 'courses.id', '=', 'routines.course_id') // Join with the courses table
            ->where('routines.department', $data['department'])
            ->where('routines.semester', $data['semester'])
            ->selectRaw('SUM(courses.credit) as total_credit, teacher_id') // Calculate total credits
            ->groupBy('teacher_id') // Group by teacher_id
            ->orderBy('teacher_id') // Optional: Order by teacher_id
            ->get()
            ->map(function($credit){
                $teacher = User::find($credit->teacher_id);
                $credit->teacher_name = $teacher->name;
                return $credit;
            })
            ->toArray();

        return $credits;
    }
}
