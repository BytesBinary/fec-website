<?php

namespace App\Filament\Admin\Settings;

use App\Filament\Resources\DesignationResource\Pages;
use App\Filament\Resources\DesignationResource\RelationManagers;
use App\Filament\Resources\Settings;
use App\Models\Designation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DesignationResource extends Resource
{
    protected static ?string $model = Designation::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-path-rounded-square';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 21;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Create Designation')->schema([
                    Forms\Components\TextInput::make('designation')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('Designation')
                        ->unique(Designation::class, 'designation')
                        ->label('Designation'),
                ]),
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
            'index' => \App\Filament\Admin\Settings\DesignationResource\Pages\ListDesignations::route('/'),
            'create' => \App\Filament\Admin\Settings\DesignationResource\Pages\CreateDesignation::route('/create'),
            'edit' => \App\Filament\Admin\Settings\DesignationResource\Pages\EditDesignation::route('/{record}/edit'),
        ];
    }
}
