<?php

namespace App\Filament\Resources\ManageCourses\AssigneeTeacherResource\Pages;

use App\Filament\Resources\ManageCourses\AssigneeTeacherResource;
use App\Models\User;
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

    protected static string $view = 'filament.resources.manage-courses.assignee-teacher-resource.pages.manage-asignee-teachers';

    public ?array $data = [];

    public function form(Form $form) : Form
    {
        return $form
            ->schema([

            ])->statePath('data');
    }
}
