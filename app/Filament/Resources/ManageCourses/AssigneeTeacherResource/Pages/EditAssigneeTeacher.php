<?php

namespace App\Filament\Resources\ManageCourses\AssigneeTeacherResource\Pages;

use App\Filament\Resources\ManageCourses\AssigneeTeacherResource;
use App\Models\Course;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;

class EditAssigneeTeacher extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = AssigneeTeacherResource::class;

    protected static string $view = 'filament.manage-courses.edit-assignee-teacher';

    public ?array $data = [];
    public string $id;

    public function mount( $record ) : void
    {
        $this->id = $record;
        $course = Course::findOrFail($record);
        $this->data = [
            'title' => $course->title,
            'department' => $course->department,
            'semester' => $course->semester,
            'assigned_teachers_ids' => $course->assigned_teachers_ids ? explode(',', $course->assigned_teachers_ids) : [],
        ];
    }

    public function updateDetails()
    {
        $validatedData = $this->form->getState();

        Course::findOrFail($this->id)->update([
            'title' => $validatedData['title'],
            'department' => $validatedData['department'],
            'semester' => $validatedData['semester'],
            'assigned_teachers_ids' => implode(',', $validatedData['assigned_teachers_ids']),
        ]);

        send_notification('success', 2000, 'Assignee Teacher details updated successfully');
    }

    public function form(Form $form) : Form
    {
        return $form
            ->schema([
                Grid::make('courses')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Course Title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('department')
                            ->label('Department')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('semester')
                            ->label('Semester')
                            ->required()
                            ->maxLength(255),
                        Select::make('assigned_teachers_ids')
                            ->multiple()
                            ->options(function () {
                                $users = User::where('designation', 'teacher')
                                    ->get()
                                    ->pluck('name', 'id');

                                    return $users;
                            })
                            ->label('Assignee Teachers'),
                    ]),
            ])->statePath('data');
    }

    public function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Update Details')
                ->submit('save'),
        ];
    }
}
