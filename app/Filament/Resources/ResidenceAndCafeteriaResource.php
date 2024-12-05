<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResidenceAndCafetariaResource\Pages;
use App\Models\Post;
use App\Models\User;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ResidenceAndCafeteriaResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationLabel = 'Residence & Cafeteria';
    protected static ?string $modelLabel = 'Residence';

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function table(Table $table): Table
    {
        return $table
            ->query(Post::query()->where('post_type', 'residence'))
            ->columns([
                TextColumn::make('post_title')
                    ->badge()
                    ->label('Residence Title'),
                TextColumn::make('post_type')
                    ->label('Residence Type'),
                TextColumn::make('post_author')
                    ->formatStateUsing(function ($state) {
                        return User::find($state)->first()->name;
                    })
                    ->label('Residence Author'),
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
            'index' => Pages\ListResidenceAndCafetarias::route('/'),
            'create' => Pages\CreateResidence::route('/create'),
            'edit' => Pages\CreateResidence::route('/{record}/edit'),
        ];
    }
}
