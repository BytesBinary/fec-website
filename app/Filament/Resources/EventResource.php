<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Post;
use App\Traits\HasResourceAccess;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventResource extends Resource
{
    use HasResourceAccess;

    protected static ?string $model = Post::class;

    protected static ?string $navigationLabel = 'Events';

    protected static ?string $modelLabel = 'Events';

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function table(Table $table): Table
    {
        return $table
            ->query(Post::query()->where('post_type', 'event'))
            ->columns([
                TextColumn::make('post_title')
                    ->label('Event Title'),
                TextColumn::make('post_type')
                    ->label('Event Type'),
                TextColumn::make('post_category')
                    ->label('Event Category'),
                TextColumn::make('created_at')
                    ->label('Created At'),
                TextColumn::make('updated_at')
                    ->label('Updated At'),
            ])
            ->filters([
                //
            ])
            ->actions(create_table_actions())
            ->bulkActions(create_table_bulk_actions());
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\CreateEvent::route('/{record}/edit'),
        ];
    }
}
