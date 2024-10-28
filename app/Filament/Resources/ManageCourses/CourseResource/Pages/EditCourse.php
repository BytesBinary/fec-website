<?php

namespace App\Filament\Resources\ManageCourses\CourseResource\Pages;

use App\Filament\Resources\ManageCourses\CourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourse extends EditRecord
{
    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
