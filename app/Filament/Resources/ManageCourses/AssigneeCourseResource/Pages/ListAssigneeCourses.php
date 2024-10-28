<?php

namespace App\Filament\Resources\ManageCourses\AssigneeCourseResource\Pages;

use App\Filament\Resources\ManageCourses\AssigneeCourseResource;
use App\Models\Course;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssigneeCourses extends ListRecords
{
    protected static string $resource = AssigneeCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
