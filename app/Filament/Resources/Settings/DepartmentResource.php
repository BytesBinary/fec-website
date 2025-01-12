<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\DepartmentResource\Pages;
use App\Models\Department;
use App\Traits\HasResourceAccess;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DepartmentResource extends Resource
{
    use HasResourceAccess;

    protected static ?string $model = Department::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

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
