<?php

namespace App\Filament\Resources\ManageExam\ExamDutyResource\Pages;

use App\Filament\Resources\ManageExam\ExamDutyResource;
use App\Models\Batch;
use App\Models\Course;
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
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;

class CreateExamDuty extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = ExamDutyResource::class;

    protected static string $view = 'filament.manage-exams.create-exam-duty';

    public ?array $data = [];

    public function mount( $record = '' )
    {
        if( ! empty($record) ) {
            $examDuty = ExamDuty::find($record);
            $this->data = [
                'exam_name' => $examDuty->exam_name,
                'exam_type_id' => $examDuty->exam_type_id,
                'semester' => $examDuty->semester,
                'batch' => $examDuty->batch,
                'exam_year' => $examDuty->exam_year,
                'duties' => json_decode($examDuty->duty_details, true),
            ];
            $this->form->fill($this->data);
        }
    }

    public function saveOrUpdate(): void
    {
        $examDuty = ExamDuty::updateOrCreate([
            'exam_name' => $this->data['exam_name'],
            'exam_type_id' => $this->data['exam_type_id'],
            'semester' => $this->data['semester'],
            'batch' => $this->data['batch'],
            'exam_year' => $this->data['exam_year'],
        ],
        [
            'duty_details' => json_encode($this->data['duties']),
        ]);

        send_notification('success', 5000,'Exam Duty has been created successfully!');
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
                            ->required(),
                        Select::make('exam_type_id')
                            ->label('Exam Type')
                            ->options(ExamType::all()->pluck('type', 'id')->toArray())
                            ->required(),
                        Select::make('semester')
                            ->label('Semester')
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
                            ->required(),
                        Select::make('batch')
                            ->label('Batch')
                            ->options(Batch::all()->pluck('name', 'id')->toArray())
                            ->required(),
                        TextInput::make('exam_year')
                            ->label('Exam Year')
                            ->placeholder('Enter a exam year')
                            ->required(),
                    ]),
                Repeater::make('duties')
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
                                ->options(ExamHall::all()->pluck('name', 'id')->toArray())
                                ->required(),
                            Select::make('course')
                                ->label('Course')
                                ->searchable()
                                ->options(Course::all()->pluck('title', 'id')->toArray())
                                ->required(),
                            Select::make('supervisor')
                                ->label('Supervisor')
                                ->searchable()
                                ->options(User::where('designation', 'teacher')->pluck('name', 'id')->toArray())
                                ->required(),
                            Select::make('invigilator')
                                ->label('Invigilator')
                                ->searchable()
                                ->options(User::where('designation', 'teacher')->pluck('name', 'id')->toArray())
                                ->required(),
                        ])
                    ]),
        ])->statePath('data');
    }

    public function getFormActions(): array
    {
        return [
            Action::make('submit')
                ->label('Submit Details')
                ->action('saveOrUpdate'),
        ];
    }
}
