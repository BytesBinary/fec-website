<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\ShortDetailsResource\Pages;
use App\Filament\Resources\Settings\ShortDetailsResource\RelationManagers;
use App\Models\Options;
use App\Models\Settings\ShortDetails;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShortDetailsResource extends Resource
{
    protected static ?string $model = Options::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $modelLabel = 'Short Details';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageShortDetails::route('/'),
        ];
    }
}
