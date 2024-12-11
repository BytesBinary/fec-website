<?php

namespace App\Filament\Resources\ManageRoutine\RoutineReportResource\Pages;

use App\Filament\Resources\ManageRoutine\RoutineReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoutineReports extends ListRecords
{
    protected static string $resource = RoutineReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
