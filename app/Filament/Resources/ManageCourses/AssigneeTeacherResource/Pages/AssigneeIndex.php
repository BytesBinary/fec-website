<?php

namespace App\Filament\Resources\ManageCourses\AssigneeTeacherResource\Pages;

use App\Filament\Resources\ManageCourses\AssigneeTeacherResource;
use App\Models\Department;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;

class AssigneeIndex extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = AssigneeTeacherResource::class;

    protected static string $view = 'filament.manage-courses.assignee-index';

    public ?array $data = [];

    public function goToManagePage()
    {
        if( !isset($this->data['department'])|| ! isset($this->data['semester']) ) {
            return redirect()->back();
        }
        $department = $this->data['department'];
        $semester = $this->data['semester'];
        $redirect_url = AssigneeTeacherResource::getUrl('manage', ['department' => $department, 'semester' => $semester]);
        return redirect($redirect_url);
    }

    public function form(Form $form): Form
    {
        return $form
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
