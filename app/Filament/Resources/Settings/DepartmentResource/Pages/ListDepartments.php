<?php

namespace App\Filament\Resources\Settings\DepartmentResource\Pages;

use App\Filament\Resources\Settings\DepartmentResource;
use App\Models\Department;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

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
        return create_model_tabs(new Department());
    }
}
