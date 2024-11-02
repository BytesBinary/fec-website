<?php

namespace App\Filament\Resources\RoutineResource\Pages;

use App\Filament\Resources\RoutineResource;
use App\Models\Course;
use App\Models\Routine;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class ManageRoutine extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = RoutineResource::class;

    protected static string $view = 'filament.resources.routine-resource.pages.manage-routine';

    public ?array $data = [];
    public string $department;
    public string $semester;
    public array $routines;
    public array $courses;

    public function mount($department, $semester) : void
    {
        $this->department = $department;
        $this->semester = $semester;
        $this->courses = Course::where('department', $department)
            ->where('semester', $semester)
            ->get()
            ->toArray();
        $this->routines = Routine::where('semester', $semester)
            ->where('department', $department)
            ->orderByRaw("FIELD(day, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday')")
            ->orderBy('time')
            ->get()
            ->groupBy('day')
            ->map(function ($dayGroup) {
                $organizedByTime = [];

                foreach ($dayGroup as $routine) {
                    $timeKey = date('g:i', strtotime($routine->time));
                    if (!isset($organizedByTime[$timeKey])) {
                        $organizedByTime[$timeKey] = [];
                    }
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
    }

    public function saveDetails() : Redirector
    {
        $details = array_merge($this->data, [
            'department' => $this->department,
            'semester' => $this->semester,
        ]);
        Routine::create($details);
        $redirect_url = RoutineResource::getUrl('manage', ['department' => $details['department'], 'semester' => $details['semester']]);
        return redirect($redirect_url);
    }

    public function download() : \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $pdf = PDF::loadView('filament.resources.routine-resource.pages.partials.routine-table', ['routines' => $this->routines]);;
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        },"routine-{$this->department}-{$this->semester}.pdf");
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Create a grid layout for the form
                Grid::make()
                    ->columns(2) // Specify the number of columns
                    ->schema([
                        Select::make('day')
                            ->options([
                                'Sunday' => 'Sunday',
                                'Monday' => 'Monday',
                                'Tuesday' => 'Tuesday',
                                'Wednesday' => 'Wednesday',
                                'Thursday' => 'Thursday',
                            ])
                            ->reactive()
                            ->required()
                            ->label('Day'),

                        Select::make('time')
                            ->options([
                                '8:00 AM' => '8:00 AM',
                                '8:50 AM' => '8:50 AM',
                                '9:40 AM' => '9:40 AM',
                                '10:30 AM' => '10:30 AM',
                                '11:20 AM' => '11:20 AM',
                                '12:10 PM' => '12:10 PM',
                                '1:00 PM' => '1:00 PM',
                                '2:00 PM' => '2:00 PM'
                            ])
                            ->reactive()
                            ->required()
                            ->label('Time'),

                        Select::make('course_id')
                            ->label('Course')
                            ->options(function (callable $get) {
                                $day = $get('day');
                                $time = $get('time');
                                return Course::where('department', $this->department)
                                    ->where('semester', $this->semester)
                                    ->whereNotIn('id', function ($query) use ($day, $time) {
                                        $query->select('course_id')
                                            ->from('routines')
                                            ->where('day', $day)
                                            ->where('time', $time);
                                    })
                                    ->pluck('title', 'id');
                            })
                            ->reactive()
                            ->required(),

                        Select::make('teacher_id')
                            ->label('Teacher')
                            ->options(function (callable $get) {
                                if (!$get('course_id') || !$get('day') || !$get('time')) {
                                    return [];
                                }

                                $course_id = $get('course_id');
                                $day = $get('day');
                                $time = $get('time');

                                $course = Course::find($course_id);
                                $assignedTeachers = $course['assigned_teachers_ids'] ?? [];

                                return User::whereIn('id', $assignedTeachers)
                                    ->whereNotIn('id', function ($query) use ($day, $time) {
                                        $query->select('teacher_id')
                                            ->from('routines')
                                            ->where('day', $day)
                                            ->where('time', $time);
                                    })
                                    ->pluck('name', 'id');
                            })
                            ->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function getFormActions() : array
    {
        return [
            Action::make('save')
                ->label('Save Details')
                ->submit('save'),
        ];
    }
}
