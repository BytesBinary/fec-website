<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResearchesResource\Pages;
use App\Filament\Resources\ResearchesResource\RelationManagers;
use App\Models\Researches;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResearchesResource extends Resource
{
    protected static ?string $model = Researches::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = "Researches";

    protected static ?string $modelLabel = "Research";

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
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListResearches::route('/'),
            'create' => Pages\CreateResearches::route('/create'),
            'edit' => Pages\EditResearches::route('/{record}/edit'),
        ];
    }
}
