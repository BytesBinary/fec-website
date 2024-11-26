<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResidenceAndCafetariaResource\Pages;
use App\Models\Post;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ResidenceAndCafeteriaResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationLabel = 'Residence & Cafeteria';
    protected static ?string $modelLabel = 'Residence';

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('post_title')
                    ->label('Residence Title'),
                TextColumn::make('post_content')
                    ->label('Description'),
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
