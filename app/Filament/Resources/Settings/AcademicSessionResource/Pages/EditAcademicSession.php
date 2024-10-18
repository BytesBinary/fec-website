<?php

namespace App\Filament\Resources\Settings\AcademicSessionResource\Pages;

use App\Filament\Resources\Settings\AcademicSessionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcademicSession extends EditRecord
{
    protected static string $resource = AcademicSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
