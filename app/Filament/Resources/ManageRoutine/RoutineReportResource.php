<?php

namespace App\Filament\Resources\ManageRoutine;

use App\Filament\Resources\ManageRoutine\RoutineReportResource\Pages;
use App\Models\Routine;
use App\Traits\HasResourceAccess;
use Filament\Resources\Resource;

class RoutineReportResource extends Resource
{
    use HasResourceAccess;

    protected static ?string $model = Routine::class;

    protected static ?string $navigationGroup = 'Manage Routine';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'Generate Routine Report';

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRoutineReport::route('/'),
        ];
    }
}
