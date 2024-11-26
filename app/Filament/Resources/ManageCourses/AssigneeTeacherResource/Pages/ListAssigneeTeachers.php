<?php

namespace App\Filament\Resources\ManageCourses\AssigneeTeacherResource\Pages;

use App\Filament\Resources\ManageCourses\AssigneeTeacherResource;
use App\Models\Department;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Resources\Pages\ListRecords;

class ListAssigneeTeachers extends ListRecords
{
    protected static string $resource = AssigneeTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')
                ->label('Assignee Teacher')
                ->icon('heroicon-o-plus-circle')
                ->form([
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
                ->action(function ($data){
                    return redirect()->to(AssigneeTeacherResource::getUrl('create', ['department' => $data['department'], 'semester' => $data['semester']]));
                }),
        ];
    }
}
