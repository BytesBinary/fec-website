<?php

namespace App\Filament\Resources\ManageRoutine\RoutineResource\Pages;

use App\Filament\Resources\ManageRoutine\RoutineResource;
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
    public array $days;
    public array $times;
    public array $routinesData;
    public bool $showRoutineDetails = false;
    public array $selected = [];

    public function mount( $department = '', $semester = '' ): void
    {
        if( empty( $department ) || empty( $semester ) ) {
            redirect(RoutineResource::getUrl('index'));
        }
        $this->department = $department;
        $this->semester = $semester;
        $this->days = config('admin-panel.working_days');
        $this->times = config('admin-panel.class_times');
        $this->routines = Routine::getRoutineByDayTime( $this->department, $this->semester, $this->days, $this->times, false );
        $this->routinesData = Routine::getRoutineByDayTime($this->department, $this->semester, $this->days, $this->times);
        $this->showRoutineDetails = true;
    }

    public function checkTeacherSchedule($day, $time, $course): void
    {
        $course = explode(',', $course);
        if( ! empty($course) ){
            $have_course = Course::find($course[0]);
            if( ! $have_course ) {
                $this->selected[$day][$time] = "";
                return;
            }
            $this->selected[$day][$time] = [
                'code' => $have_course->code,
                'credit' => $have_course->credit,
                'teacher' => User::find($course[2])->name,
            ];
        }
        else{
            $this->selected[$day][$time] = "";
        }
    }

    public function saveRoutine(): void
    {
        if( empty($this->data['routine']) ) {
            return;
        }
        foreach ($this->data['routine'] as $day => $times) {
            foreach ($times as $time => $details) {
                $details = explode(',', $details['course']);

                if( empty($details) || count($details) < 3 ) {
                    continue;
                }

                $courseId = $details[0];
                $teacherId = $details[2];

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
        $this->routines = Routine::getRoutineByDayTime( $this->department, $this->semester, $this->days, $this->times, false );
        send_notification('success', '2000', 'Routine Updated Successfully');
    }

    public function deleteRoutine( $day, $time ) : void
    {
        Routine::where('day', $day)
            ->where('time', $time)
            ->where('department', $this->department)
            ->where('semester', $this->semester)
            ->delete();
        $this->routines[$day][$time] = [];
        send_notification('success', '2000', 'Routine Deleted Successfully');
    }

    public function download(): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $courses = Course::where('department', $this->department)
            ->where('semester', $this->semester)
            ->get()
            ->toArray();
        $pdf = PDF::loadView('filament.manage-routines.download-routine',
            [
                'routines' => $this->routines,
                'courses'  => array_chunk($courses,10),
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
