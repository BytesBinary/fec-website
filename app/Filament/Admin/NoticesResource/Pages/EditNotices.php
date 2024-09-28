<?php

namespace App\Filament\Admin\NoticesResource\Pages;

use App\Filament\Admin\NoticesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNotices extends EditRecord
{
    protected static string $resource = NoticesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
