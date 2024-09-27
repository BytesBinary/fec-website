<?php

namespace App\Filament\Resources\NoticesResource\Pages;

use App\Filament\Resources\NoticesResource;
use App\Models\Department;
use App\Models\Notice;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListNotices extends ListRecords
{
    protected static string $resource = NoticesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs = [];

        $tabs['all'] = Tab::make('All Notices')
            ->badge(Notice::count());

        $tabs['archived'] = Tab::make('Archived')
            ->badge(Notice::onlyTrashed()->count())
            ->modifyQueryUsing(function ($query) {
                return $query->onlyTrashed();
            });

        return $tabs;
    }
}
