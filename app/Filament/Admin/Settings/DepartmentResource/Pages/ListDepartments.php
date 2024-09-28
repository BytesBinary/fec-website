<?php

namespace App\Filament\Admin\Settings\DepartmentResource\Pages;

use App\Filament\Admin\Settings\DepartmentResource;
use App\Models\Department;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListDepartments extends ListRecords
{
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs = [];

        $tabs['all'] = Tab::make('All Departments')
            ->badge(Department::count());

        $tabs['archived'] = Tab::make('Archived')
            ->badge(Department::onlyTrashed()->count())
            ->modifyQueryUsing(function ($query) {
                return $query->onlyTrashed();
            });

        return $tabs;
    }
}
