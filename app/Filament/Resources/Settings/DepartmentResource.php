<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\DepartmentResource\Pages;
use App\Filament\Resources\Settings\DepartmentResource\RelationManagers;
use App\Models\Department;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DepartmentResource extends Resource
{
    protected static ?string $model = Department::class;
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function can( string $action, $record="" ) : bool
    {
        return can_access_resource( 'Programmer' );
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->unique('departments', 'title', ignoreRecord: true)
                    ->live(true),
                TextInput::make('short_title')
                    ->required()
                    ->unique('departments', 'short_title', ignoreRecord: true)
                    ->maxLength(255),
                RichEditor::make('description')
                    ->columnSpan('full')
                    ->fileAttachmentsVisibility('public')
                    ->extraAttributes(['style' => 'min-height: 500px']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('short_title')
                    ->label('Short Title')
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
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
        ];
    }
}
