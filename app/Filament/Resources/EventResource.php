<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Post;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationLabel = 'Events';

    protected static ?string $modelLabel = 'Events';

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function table(Table $table): Table
    {
        return $table
            ->query(Post::query()->where('post_type', 'x'))
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions(create_table_actions())
            ->bulkActions(create_table_bulk_actions());
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
