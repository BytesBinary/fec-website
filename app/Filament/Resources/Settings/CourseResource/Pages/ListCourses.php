<?php

namespace App\Filament\Resources\Settings\CourseResource\Pages;

use App\Filament\Resources\Settings\CourseResource;
use App\Models\Course;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListCourses extends ListRecords
{
    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs() : array
    {
        $tabs = [];

        $tabs['all'] = Tab::make('All Courses')
            ->badge(Course::count());

        $tabs['archived'] = Tab::make('Archived')
            ->badge(Course::onlyTrashed()->count())
            ->modifyQueryUsing(fn ($query) => $query->onlyTrashed());

        return $tabs;
    }
}
