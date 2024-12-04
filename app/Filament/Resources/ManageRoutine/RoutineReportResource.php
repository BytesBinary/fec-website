<?php

namespace App\Filament\Resources\ManageRoutine;

use App\Filament\Resources\ManageRoutine\RoutineReportResource\Pages;
use App\Filament\Resources\ManageRoutine\RoutineReportResource\RelationManagers;
use App\Models\ManageRoutine\RoutineReport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoutineReportResource extends Resource
{
    protected static ?string $model = RoutineReport::class;

    protected static ?string $navigationGroup = 'Manage Routine';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            'index' => Pages\ListRoutineReports::route('/'),
            'create' => Pages\CreateRoutineReport::route('/create'),
            'edit' => Pages\EditRoutineReport::route('/{record}/edit'),
        ];
    }
}
