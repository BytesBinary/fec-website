<?php

namespace App\Filament\Resources\Settings\DesignationResource\Pages;

use App\Filament\Resources\Settings\DesignationResource;
use App\Models\Designation;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDesignations extends ListRecords
{
    protected static string $resource = DesignationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs() : array
    {
        return create_model_tabs(new Designation());
    }
}
