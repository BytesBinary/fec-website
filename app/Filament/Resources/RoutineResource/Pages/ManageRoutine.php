<?php

namespace App\Filament\Resources\RoutineResource\Pages;

use App\Filament\Resources\RoutineResource;
use App\Models\Course;
use App\Models\Department;
use App\Models\Routine;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;

class ManageRoutine extends Page implements HasForms
{
    use InteractsWithForms;

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

    public function showRoutine()
    {
        $this->department = $this->data['department'];
        $this->semester = $this->data['semester'];
        $this->days = config('admin-panel.working_days');
        $this->times = config('admin-panel.class_times');
        $this->routines = Routine::getRoutineByDayTime( $this->department, $this->semester, $this->days, $this->times, false );
        $this->routinesData = Routine::getRoutineByDayTime($this->department, $this->semester, $this->days, $this->times);
        // show the routine
        $this->showRoutineDetails = true;
    }

    public function checkTeacherSchedule($day, $time, $course): void
    {
        $course = explode(',', $course);
        if( ! empty($course) ){
            $have_course = Course::find($course[0]);
            if( ! $have_course ) {
                return;
            }
            $isAvailable = Routine::where('teacher_id', $course[2])
                ->where('course_id', $course[0])
                ->where('day', $day)
                ->where('time', $time)
                ->exists();
            if( $isAvailable ) {
                send_notification('warning', '5000', 'Teacher Already Scheduled To Same Time');
            }
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
                $courseId = $details[0];
                $teacherId = $details[2];

                if ($courseId && $teacherId) {
                    $update = Routine::updateOrCreate(
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
        send_notification('success', '2000', 'Routine Updated Successfully');
        $this->routines = Routine::getRoutineByDayTime( $this->department, $this->semester, $this->days, $this->times, false );
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

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->label('Routine')
                    ->columns(2)
                    ->schema([
                        Select::make('department')
                            ->options(Department::all()->pluck('short_title', 'short_title'))
                            ->required(),
                        Select::make('semester')
                            ->options([
                                '1st' => '1st',
                                '2nd' => '2nd',
                                '3rd' => '3rd',
                                '4th' => '4th',
                                '5th' => '5th',
                                '6th' => '6th',
                                '7th' => '7th',
                                '8th' => '8th',
                            ])
                            ->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function getFormActions() : array
    {
        return [
            Action::make('submit')
                ->label('Submit')
                ->submit('submit'),
        ];
    }
}
