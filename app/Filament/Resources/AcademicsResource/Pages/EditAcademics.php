<?php

namespace App\Filament\Resources\AcademicsResource\Pages;

use App\Filament\Resources\AcademicsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditAcademics extends EditRecord
{
    protected static string $resource = AcademicsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make()
                ->before(function ($record) {
                    if ($record->pdf && Storage::exists('public/' . $record->pdf)) {
                        Storage::delete('public/' . $record->pdf);
                    }
                }),
        ];
    }
}
