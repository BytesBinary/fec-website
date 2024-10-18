<?php

namespace App\Filament\Resources\Settings\AcademicSessionResource\Pages;

use App\Filament\Resources\Settings\AcademicSessionResource;
use App\Models\AcademicSession;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAcademicSessions extends ListRecords
{
    protected static string $resource = AcademicSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs() : array
    {
        return create_model_tabs(new AcademicSession());
    }
}
