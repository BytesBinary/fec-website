<?php

namespace App\Filament\Resources\ManageRoutine;

use App\Filament\Resources\ManageRoutine;
use App\Filament\Resources\RoutineResource\Pages;
use App\Filament\Resources\RoutineResource\RelationManagers;
use App\Models\Routine;
use Filament\Resources\Resource;

class RoutineResource extends Resource
{
    protected static ?string $model = Routine::class;

    protected static ?string $navigationGroup = 'Manage Routine';

    protected static ?string $navigationLabel = 'Create Routine';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-document-check';

    public static function getPages(): array
    {
        return [
            'index' => ManageRoutine\RoutineResource\Pages\RoutineIndex::route('/'),
            'manage' => ManageRoutine\RoutineResource\Pages\ManageRoutine::route('/manage/{department}/{semester}'),
        ];
    }
}
