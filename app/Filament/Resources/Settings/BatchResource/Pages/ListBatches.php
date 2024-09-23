<?php

namespace App\Filament\Resources\Settings\BatchResource\Pages;

use App\Filament\Resources\Settings\BatchResource;
use App\Models\Batch;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

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
        $tabs = [];

        $tabs['all'] = Tab::make('All Batches')
            ->badge(Batch::count());

        $tabs['archived'] = Tab::make('Archived')
            ->badge(Batch::onlyTrashed()->count())
            ->modifyQueryUsing(function ($query) {
                return $query->onlyTrashed();
            });

        return $tabs;
    }
}
