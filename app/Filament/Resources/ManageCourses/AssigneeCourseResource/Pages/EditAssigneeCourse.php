<?php

namespace App\Filament\Resources\ManageCourses\AssigneeCourseResource\Pages;

use App\Filament\Resources\ManageCourses\AssigneeCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssigneeCourse extends EditRecord
{
    protected static string $resource = AssigneeCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
