<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoutineResource\Pages;
use App\Filament\Resources\RoutineResource\RelationManagers;
use App\Models\Routine;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoutineResource extends Resource
{
    protected static ?string $model = Routine::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-check';

    public static function can( string $action, $record="" ) : bool
    {
        return can_access_resource( 'Programmer' );
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\RoutineIndex::route('/'),
            'manage' => Pages\ManageRoutine::route('/manage/{department}/{semester}'),
        ];
    }
}
