<?php

namespace App\Filament\Resources\ManageRoutine;

use App\Filament\Resources\ManageRoutine\RoutineReportResource\Pages;
use App\Models\ManageRoutine\RoutineReport;
use App\Models\Routine;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RoutineReportResource extends Resource
{
    protected static ?string $model = Routine::class;

    protected static ?string $navigationGroup = 'Manage Routine';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function can( string $action, $record = "" ): bool
    {
        return can_access_resource('Programmer');
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
            'index' => Pages\CreateRoutineReport::route('/'),
            'edit' => Pages\EditRoutineReport::route('/{record}/edit'),
        ];
    }
}
