<?php

namespace App\Filament\Resources\ManageExam\ExamDutyResource\Pages;

use App\Filament\Resources\ManageExam\ExamDutyResource;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Department;
use App\Models\ExamDuty;
use App\Models\ExamHall;
use App\Models\ExamType;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
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
    private string $record = '';

    public function mount( $record = '' ) : void
    {
        if( ! empty($record) ) {
            $data = ExamDuty::find($record)->toArray();
            $this->form->fill($data);
        }
    }

    public function saveOrUpdate(): void
    {
        $this->data = $this->form->getState();

        if( isset($this->data['id']) && ! empty($this->data['id']) ) {
            $id = $this->data['id'];
            unset($this->data['id']);
            $details = ExamDuty::updateOrCreate(
                ['id' => $id],
                $this->data
            );
            $this->data['id'] = $details->id;
            send_notification('success', 5000,'Exam Duty has been updated successfully!');
        } else {
            unset($this->data['id']);
            $details = ExamDuty::create($this->data);
            $this->data['id'] = $details->id;
            send_notification('success', 5000,'Exam Duty has been created successfully!');
        }

        redirect(self::$resource::getUrl('view', ['record' => $this->data['id']]));
    }

    public function form(Form $form): Form
    {
        return
            $form
            ->schema([
                Grid::make('core')
                    ->columns(3)
                    ->schema([
                        Hidden::make('id'),
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
                            ->options(Batch::all()->pluck('number', 'id')->toArray())
                            ->required(),
                        Select::make('department')
                            ->label('Department')
                            ->options(Department::all()->pluck('short_title', 'short_title')->toArray())
                            ->required(),
                        TextInput::make('exam_year')
                            ->label('Exam Year')
                            ->placeholder('Enter a exam year')
                            ->required(),
                    ]),
                Repeater::make('duty_details')
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
