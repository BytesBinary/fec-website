<?php

namespace App\Filament\Resources\ResidenceAndCafetariaResource\Pages;

use App\Filament\Resources\ResidenceAndCafeteriaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResidenceAndCafetaria extends EditRecord
{
    protected static string $resource = ResidenceAndCafeteriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
