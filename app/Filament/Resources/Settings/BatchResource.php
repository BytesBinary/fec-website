<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\BatchResource\Pages;
use App\Filament\Resources\BatchResource\RelationManagers;
use App\Filament\Resources\Settings;
use App\Models\Batch;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BatchResource extends Resource
{
    protected static ?string $model = Batch::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 20;

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
                TextInput::make('session')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Session')
                    ->unique(table: 'batches', column: 'session', ignoreRecord: true)
                    ->label('Batch session'),
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
                    ->searchable()
                    ->sortable(),
                TextColumn::make('session')
                    ->label('Batch session')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible(fn (Batch $record) => ! $record->trashed()),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make()
                    ->label('Permanently delete'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make()
                        ->label('Permanently delete'),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Settings\BatchResource\Pages\ListBatches::route('/'),
            'create' => Settings\BatchResource\Pages\CreateBatch::route('/create'),
            'edit' => Settings\BatchResource\Pages\EditBatch::route('/{record}/edit'),
        ];
    }
}
