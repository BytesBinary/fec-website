<?php

namespace App\Filament\Resources\ResidenceAndCafetariaResource\Pages;

use App\Filament\Resources\ResidenceAndCafeteriaResource;
use App\Models\Post;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResidenceAndCafetarias extends ListRecords
{
    protected static string $resource = ResidenceAndCafeteriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs() : array
    {
        return create_model_tabs(new Post(), [], 'Residence');
    }
}
