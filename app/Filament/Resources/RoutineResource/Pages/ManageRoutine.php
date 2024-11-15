<?php

namespace App\Filament\Resources\RoutineResource\Pages;

use App\Filament\Resources\RoutineResource;
use App\Models\Course;
use App\Models\Routine;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Pages\Page;

class ManageRoutine extends Page
{
    protected static string $resource = RoutineResource::class;

    protected static string $view = 'filament.manage-routines.manage-routine';

    public ?array $data = [];
    public string $department;
    public string $semester;
    public array $routines;
    public array $courses;
    public array $days = [
        'Sunday' => 'Sunday',
        'Monday' => 'Monday',
        'Tuesday' => 'Tuesday',
        'Wednesday' => 'Wednesday',
        'Thursday' => 'Thursday',
    ];
    public array $times = [
        '8:00' => '8:00',
        '8:50' => '8:50',
        '9:40' => '9:40',
        '10:30' => '10:30',
        '11:20' => '11:20',
        '12:10' => '12:10',
        '14:00' => '14:00',
    ];
    public array $processRoutine;

    public function mount($department, $semester): void
    {
        $this->department = $department;
        $this->semester = $semester;

        // Fetch courses
        $this->courses = Course::where('department', $department)
            ->where('semester', $semester)
            ->get()
            ->toArray();

        $this->routines = $this->getRoutine();
        $this->processData();
    }

    public function getRoutine()
    {
        $routine = Routine::where('semester', $this->semester)
            ->where('department', $this->department)
            ->orderByRaw("FIELD(day, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday')")
            ->orderBy('time')
            ->get()
            ->groupBy('day')
            ->map(function ($dayGroup) {
                $organizedByTime = [];
                foreach ($this->times as $time => $label) {
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

        foreach ( $this->days as $day ) {
            foreach ( $this->times as $time ) {
                if( ! isset($routine[$day][$time]) ) {
                    $routine[$day][$time] = [];
                }
            }
        }

        return $routine;
    }

    public function processData(): void
    {
        foreach ( $this->days as $day ) {
            foreach ( $this->times as $time ) {
                $this->processRoutine[$day][$time] = [
                    'course' =>
                        Course::where('department', $this->department)
                            ->where('semester', $this->semester)
                            ->whereNotIn('id', function ($query) use ($day, $time) {
                                $query->select('course_id')
                                    ->from('routines')
                                    ->where('day', $day)
                                    ->where('time', $time);
                            })
                            ->get()
                            ->toArray()
                ];
            }
        }
    }

    public function loadAvailableTeachers($day, $time, $course): void
    {
        $course = explode(',', $course);
        if( ! empty($course) ){
            $have_course = Course::find($course[0]);
            if( ! $have_course ) {
                return;
            }
            $assignedTeachers = $have_course->assigned_teachers_ids;
            $assignedTeachers = explode(',', $assignedTeachers);
            $teachers = User::whereIn('id', $assignedTeachers)
                ->whereNotIn('id', function ($query) use ($day, $time) {
                    $query->select('teacher_id')
                        ->from('routines')
                        ->where('day', $day)
                        ->where('time', $time);
                })
                ->pluck('name', 'id')
                ->toArray();
            $this->processRoutine[$day][$time]['course'][$course[1]]['teachers'] = $teachers;
        }
    }

    public function saveRoutine(): void
    {
        if( empty($this->data['routine']) ) {
            return;
        }
        foreach ($this->data['routine'] as $day => $times) {
            foreach ($times as $time => $details) {
                $courseId = $details['course'] ?? null;
                $teacherId = $details['teacher'] ?? null;
                $courseId = ( null !== $courseId ) ? explode(',', $courseId)[0] : null;

                if ($courseId && $teacherId) {
                    // Save routine to the database or update an existing one
                    Routine::updateOrCreate(
                        [
                            'day' => $day,
                            'time' => $time,
                            'department' => $this->department,
                            'semester' => $this->semester,
                        ],
                        [
                            'course_id' => $courseId,
                            'teacher_id' => $teacherId,
                        ]
                    );
                }
            }
        }

        $this->routines = $this->getRoutine();

        // Optional: Display a success message
        session()->flash('message', 'Routine saved successfully!');
    }

    public function download(): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $pdf = PDF::loadView('filament.resources.routine-resource.pages.partials.routine-table',
            ['routines' => $this->routines]);;
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, "routine-{$this->department}-{$this->semester}.pdf");
    }
}
