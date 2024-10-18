<?php

namespace App\Filament\Resources\Settings\BatchResource\Pages;

use App\Filament\Resources\Settings\BatchResource;
use App\Models\Batch;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBatches extends ListRecords
{
    protected static string $resource = BatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return create_model_tabs(new Batch());
    }
}
