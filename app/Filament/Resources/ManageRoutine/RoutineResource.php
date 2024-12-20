<?php

namespace App\Filament\Resources\ManageRoutine;

use App\Filament\Resources\ManageRoutine;
use App\Models\Routine;
use App\Traits\HasResourceAccess;
use Filament\Resources\Resource;

class RoutineResource extends Resource
{
    use HasResourceAccess;

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
