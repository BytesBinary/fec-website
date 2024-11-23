<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\BatchResource\Pages;
use App\Filament\Resources\Settings\BatchResource\RelationManagers;
use App\Models\AcademicSession;
use App\Models\Batch;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BatchResource extends Resource
{
    protected static ?string $model = Batch::class;

    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->maxLength(255)
                    ->placeholder('Batch name (Optional)')
                    ->unique(table: 'batches', column: 'name', ignoreRecord: true)
                    ->label('Batch name')
                    ->helperText('Batch name is not required'),
                TextInput::make('number')
                    ->required()
                    ->numeric()
                    ->placeholder('10')
                    ->unique(table: 'batches', column: 'number', ignoreRecord: true)
                    ->label('Batch number'),
                Select::make('session')
                    ->label('Batch session')
                    ->required()
                    ->unique('batches', 'session', ignoreRecord: true)
                    ->options(AcademicSession::all()->pluck('session_year', 'session_year'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Batch name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('number')
                    ->label('Batch number')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('session')
                    ->label('Batch session')
                    ->badge()
                    ->searchable()
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
            'index' => Pages\ListBatches::route('/'),
            'create' => Pages\CreateBatch::route('/create'),
            'edit' => Pages\EditBatch::route('/{record}/edit'),
        ];
    }
}
