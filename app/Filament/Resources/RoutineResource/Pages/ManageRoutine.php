<?php

namespace App\Filament\Resources\RoutineResource\Pages;

use App\Filament\Resources\RoutineResource;
use App\Models\Course;
use App\Models\Routine;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Notifications\Notification;
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
    public array $days;
    public array $times;
    public array $routinesData;

    public function mount($department, $semester): void
    {
        $this->department = $department;
        $this->semester = $semester;
        $this->days = config('admin-panel.working_days');
        $this->times = config('admin-panel.class_times');
        $this->routines = $this->getRoutine();
        $this->processRoutines();
        $this->courses = Course::where('department', $department)
            ->where('semester', $semester)
            ->get()
            ->toArray();
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

    public function processRoutines(): void
    {
        foreach ( $this->days as $day ) {
            foreach ( $this->times as $time ) {
                $this->routinesData[$day][$time] = [
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
            $this->routinesData[$day][$time]['course'][$course[1]]['teachers'] = $teachers;
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
        Notification::make()
            ->success()
            ->duration(2000)
            ->title(__('Routine Updated Successfully'))
            ->send();
    }

    public function download(): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $pdf = PDF::loadView('filament.manage-routines.download-routine',
            [
                'routines' => $this->routines,
                'courses'  => array_chunk($this->courses,7),
                'details'  => [
                    'department' => $this->department,
                    'semester'   => $this->semester,
                ]
            ]);;
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, "routine-{$this->department}-{$this->semester}.pdf");
    }
}
