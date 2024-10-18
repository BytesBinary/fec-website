<?php

namespace App\Filament\Resources\Settings\DesignationResource\Pages;

use App\Filament\Resources\Settings\DesignationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDesignation extends EditRecord
{
    protected static string $resource = DesignationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
