<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\AcademicSessionResource\Pages;
use App\Models\AcademicSession;
use App\Traits\HasResourceAccess;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AcademicSessionResource extends Resource
{
    use HasResourceAccess;

    protected static ?string $model = AcademicSession::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('session_year')
                    ->required()
                    ->unique('academic_sessions', 'session_year', ignoreRecord: true)
                    ->label('Session Year'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('session_year')
                    ->searchable()
                    ->sortable()
                    ->label('Session Year'),
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
            'index' => Pages\ListAcademicSessions::route('/'),
            'create' => Pages\CreateAcademicSession::route('/create'),
            'edit' => Pages\EditAcademicSession::route('/{record}/edit'),
        ];
    }
}
