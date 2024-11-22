<?php

namespace App\Filament\Resources\ManageExam;

use App\Filament\Resources\ManageExam\ExamHallResource\Pages;
use App\Filament\Resources\ManageExam\ExamHallResource\RelationManagers;
use App\Models\ExamHall;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExamHallResource extends Resource
{
    protected static ?string $model = ExamHall::class;

    protected static ?string $navigationGroup = "Manage Exams";

    protected static ?string $label = "Exam Halls";

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name'),
            ])
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
            'index' => Pages\ListExamHalls::route('/'),
            'create' => Pages\CreateExamHall::route('/create'),
            'edit' => Pages\EditExamHall::route('/{record}/edit'),
        ];
    }
}
