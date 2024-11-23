<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\DesignationResource\Pages;
use App\Filament\Resources\Settings\DesignationResource\RelationManagers;
use App\Models\Designation;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DesignationResource extends Resource
{
    protected static ?string $model = Designation::class;

    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationIcon = 'heroicon-o-arrow-path-rounded-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('designation')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Designation')
                    ->unique(Designation::class, 'designation')
                    ->label('Designation'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('designation')
                    ->label('Designation')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListDesignations::route('/'),
            'create' => Pages\CreateDesignation::route('/create'),
            'edit' => Pages\EditDesignation::route('/{record}/edit'),
        ];
    }
}
