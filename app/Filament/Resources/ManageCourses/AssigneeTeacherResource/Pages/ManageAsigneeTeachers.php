<?php

namespace App\Filament\Resources\ManageCourses\AssigneeTeacherResource\Pages;

use App\Filament\Resources\ManageCourses\AssigneeTeacherResource;
use App\Models\Course;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;

class ManageAsigneeTeachers extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = AssigneeTeacherResource::class;

    protected static string $view = 'filament.manage-courses.manage-assignee-teachers';

    public ?array $data = [];
    public string $department;
    public string $semester;

    public function mount( $department, $semester ) : void
    {
        $this->department = $department;
        $this->semester = $semester;

        $existingData = $this->fetchAssigneeTeachers();
        $this->form->fill(['assignee_teachers' => $existingData]);
    }

    protected function fetchAssigneeTeachers(): array
    {
        return Course::where('department', $this->department)
            ->where('semester', $this->semester)
            ->get()
            ->map(function ($course) {
                return [
                    'course' => $course->id,
                    'teacher' => $course->assigned_teachers_ids ? explode(',', $course->assigned_teachers_ids) : [],
                ];
            })
            ->toArray();
    }

    public function getFormActions()
    {
        return [
            Action::make('save')
                ->label('Save Details')
                ->submit('save'),
        ];
    }

    public function saveDetails(): void
    {
        foreach ($this->data['assignee_teachers'] as $teacher ) {
            if( empty($teacher['teacher']) ) {
                continue;
            }
            $course = Course::find($teacher['course']);
            $course->assigned_teachers_ids = implode(',', $teacher['teacher']);
            $course->save();
        }
    }

    public function form(Form $form) : Form
    {
        return $form
            ->schema([
                Repeater::make('assignee_teachers')
                    ->schema([
                        Grid::make()
                            ->columns(2)
                            ->schema([
                                Select::make('course')
                                    ->options(function () {
                                        $courses = Course::where('department', $this->department)
                                            ->where('semester', $this->semester)
                                            ->get()
                                            ->pluck('title', 'id');

                                        return $courses;
                                    })
                                    ->label('Select a Course')
                                    ->searchable()
                                    ->required(),
                                Select::make('teacher')
                                    ->options(function () {
                                        $users = User::where('designation', 'teacher')
                                            ->get()
                                            ->pluck('name', 'id');

                                        return $users;
                                    })
                                    ->label('Select Teacher/Teachers')
                                    ->multiple()
                                    ->required(),
                            ])
                    ])
            ])->statePath('data');
    }
}
