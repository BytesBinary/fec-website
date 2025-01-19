<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\ShortDetailsResource\Pages;
use App\Models\Options;
use Filament\Resources\Resource;

class ShortDetailsResource extends Resource
{
    protected static ?string $model = Options::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $modelLabel = 'Short Details';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageShortDetails::route('/'),
        ];
    }
}
