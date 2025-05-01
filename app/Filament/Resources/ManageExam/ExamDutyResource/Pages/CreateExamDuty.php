<?php

namespace App\Filament\Resources\ManageExam\ExamDutyResource\Pages;

use App\Filament\Resources\ManageExam\ExamDutyResource;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Department;
use App\Models\Designation;
use App\Models\ExamDuty;
use App\Models\ExamHall;
use App\Models\ExamType;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\DB;

class CreateExamDuty extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = ExamDutyResource::class;

    protected static string $view = 'filament.manage-exams.create-exam-duty';

    public $exam_name;

    public $exam_type_id;

    public $semester;

    public $batch;

    public $department;

    public $exam_year;

    public $duty_details = [];

    public $start_time;

    public $end_time;

    public string $record = '';

    public function mount($record = ''): void
    {
        if (! empty($record)) {
            $this->record = $record;
            $data = ExamDuty::find($record)->toArray();
            $data['semester'] = json_decode($data['semester'], true);
            $data['batch'] = json_decode($data['batch'], true);
            $data['department'] = json_decode($data['department'], true);
            $data['duty_details'] = json_decode($data['duty_details'], true);
            $this->form->fill($data);
        }
    }

    public function createExamDuty(): void
    {
        $this->validate();

        ExamDuty::create([
            'exam_name' => $this->exam_name,
            'exam_type_id' => $this->exam_type_id,
            'semester' => json_encode($this->semester, true),
            'batch' => json_encode($this->batch, true),
            'department' => json_encode($this->department, true),
            'exam_year' => $this->exam_year,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'duty_details' => json_encode($this->duty_details, true),
        ]);

        send_notification('success', 5000, 'Exam Duty created successfully!');
    }

    public function updateExamDuty()
    {
        $this->validate();

        ExamDuty::find($this->record)->update([
            'exam_name' => $this->exam_name,
            'exam_type_id' => $this->exam_type_id,
            'semester' => json_encode($this->semester, true),
            'batch' => json_encode($this->batch, true),
            'department' => json_encode($this->department, true),
            'exam_year' => $this->exam_year,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'duty_details' => json_encode($this->duty_details, true),
        ]);

        send_notification('success', 5000, 'Exam Duty updated successfully!');
    }

    public function form(Form $form): Form
    {
        return
            $form
                ->schema([
                    Grid::make('core')
                        ->columns(3)
                        ->schema([
                            TextInput::make('exam_name')
                                ->label('Exam Name')
                                ->placeholder('Enter a exam name')
                                ->required()
                                ->statePath('exam_name'),
                            Select::make('exam_type_id')
                                ->label('Exam Type')
                                ->options(ExamType::all()->pluck('type', 'id')->toArray())
                                ->required()
                                ->statePath('exam_type_id'),
                            Select::make('semester')
                                ->label('Semester')
                                ->multiple()
                                ->options([
                                    '1st' => '1st Semester',
                                    '2nd' => '2nd Semester',
                                    '3rd' => '3rd Semester',
                                    '4th' => '4th Semester',
                                    '5th' => '5th Semester',
                                    '6th' => '6th Semester',
                                    '7th' => '7th Semester',
                                    '8th' => '8th Semester',
                                ])
                                ->reactive()
                                ->required()
                                ->statePath('semester'),
                            Select::make('batch')
                                ->label('Batch')
                                ->options(Batch::all()->pluck('number', 'id')->toArray())
                                ->required()
                                ->multiple()
                                ->statePath('batch'),
                            Select::make('department')
                                ->label('Department')
                                ->reactive()
                                ->multiple()
                                ->options(Department::all()->pluck('short_title', 'short_title')->toArray())
                                ->required()
                                ->statePath('department'),
                            TextInput::make('exam_year')
                                ->label('Exam Year')
                                ->placeholder('Enter a exam year')
                                ->required()
                                ->statePath('exam_year'),
                            TimePicker::make('start_time')
                                ->label('Start Time')
                                ->required()
                                ->statePath('start_time'),
                            TimePicker::make('end_time')
                                ->label('End Time')
                                ->required()
                                ->statePath('end_time'),
                        ]),
                    Repeater::make('duty_details')
                        ->reactive()
                        ->schema([
                            Grid::make()
                                ->columns(5)
                                ->schema([
                                    DatePicker::make('date')
                                        ->label('Date')
                                        ->required(),
                                    Select::make('exam_hall')
                                        ->label('Exam Hall')
                                        ->searchable()
                                        ->multiple()
                                        ->options(ExamHall::all()->pluck('name', 'id')->toArray())
                                        ->required(),
                                    Select::make('course')
                                        ->label('Course')
                                        ->searchable()
                                        ->multiple()
                                        ->options(function () {
                                            if (empty($this->department) || empty($this->semester)) {
                                                send_notification('danger', 5000, 'Please select department and semester first!');

                                                return [];
                                            }

                                            return Course::query()
                                                ->whereIn('department', $this->department)
                                                ->whereIn('semester', $this->semester)
                                                ->select(DB::raw("id, CONCAT(code, ' : ', title ) as title_code"))
                                                ->pluck('title_code', 'id')
                                                ->toArray();
                                        })
                                        ->required(),
                                    Select::make('supervisor')
                                        ->label('Supervisor')
                                        ->searchable()
                                        ->multiple()
                                        ->reactive()
                                        ->options(function () {
                                            $teacherId = Designation::where('designation', 'Teacher')->first()->id;
                                            $teachers = User::where('designation', $teacherId)->pluck('name', 'id')->toArray();
                                            $counts = $this->getTeacherDutyCounts();
                                    
                                            foreach ($teachers as $id => $name) {
                                                if (isset($counts[$id])) {
                                                    $teachers[$id] = $name . ' (' . $counts[$id] . ')';
                                                }
                                            }
                                    
                                            return $teachers;
                                        })
                                        ->required(),
                                    Select::make('invigilator')
                                        ->label('Invigilator')
                                        ->searchable()
                                        ->multiple()
                                        ->reactive()
                                        ->options(function () {
                                            $teacherId = Designation::where('designation', 'Teacher')->first()->id;
                                            $teachers = User::where('designation', $teacherId)->pluck('name', 'id')->toArray();
                                            $counts = $this->getTeacherDutyCounts();
                                    
                                            foreach ($teachers as $id => $name) {
                                                if (isset($counts[$id])) {
                                                    $teachers[$id] = $name . ' (' . $counts[$id] . ')';
                                                }
                                            }
                                    
                                            return $teachers;
                                        })
                                        ->required(),                                    
                                ]),
                        ])->statePath('duty_details'),
                ]);
    }

    public function getFormActions($action = 'save'): array
    {
        $actions = [
            'save' => [
                Action::make('Save')
                    ->label('Save Exam Duty')
                    ->action('createExamDuty'),
            ],
            'update' => [
                Action::make('Update')
                    ->label('Update Exam Duty')
                    ->action('updateExamDuty'),
            ],
        ];

        return $actions[$action];
    }

    public function getTeacherDutyCounts(): array
    {
        $counts = [];

        foreach ($this->duty_details ?? [] as $detail) {
            foreach (['invigilator', 'supervisor'] as $role) {
                if (!empty($detail[$role]) && is_array($detail[$role])) {
                    foreach ($detail[$role] as $userId) {
                        if (! isset($counts[$userId])) {
                            $counts[$userId] = 0;
                        }
                        $counts[$userId]++;
                    }
                }
            }
        }

        return $counts;
    }

}
