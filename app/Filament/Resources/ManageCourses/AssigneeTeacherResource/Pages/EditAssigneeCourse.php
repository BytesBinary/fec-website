<?php

namespace App\Filament\Resources\ManageCourses\AssigneeTeacherResource\Pages;

use App\Filament\Resources\ManageCourses\AssigneeTeacherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssigneeCourse extends EditRecord
{
    protected static string $resource = AssigneeTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
