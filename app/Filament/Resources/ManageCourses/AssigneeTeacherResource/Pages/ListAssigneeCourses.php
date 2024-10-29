<?php

namespace App\Filament\Resources\ManageCourses\AssigneeTeacherResource\Pages;

use App\Filament\Resources\ManageCourses\AssigneeTeacherResource;
use App\Models\Course;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssigneeCourses extends ListRecords
{
    protected static string $resource = AssigneeTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
