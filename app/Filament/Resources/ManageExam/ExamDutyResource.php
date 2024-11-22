<?php

namespace App\Filament\Resources\ManageExam;

use App\Filament\Resources\ManageExam\ExamDutyResource\Pages;
use App\Filament\Resources\ManageExam\ExamDutyResource\RelationManagers;
use App\Models\Batch;
use App\Models\ExamDuty;
use App\Models\ExamType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamDutyResource extends Resource
{
    protected static ?string $model = ExamDuty::class;

    protected static ?string $navigationGroup = "Manage Exams";

    protected static ?string $label = "Exam Duties";

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('exam_name')
                    ->label('Exam Name'),
                TextColumn::make('exam_type_id')
                    ->badge()
                    ->color('primary')
                    ->formatStateUsing(fn(string $state) => ExamType::find($state)->type)
                    ->label('Exam Type'),
                TextColumn::make('semester')
                    ->label('Semester'),
                TextColumn::make('batch')
                    ->badge()
                    ->color('danger')
                    ->formatStateUsing(fn(string $state) => Batch::find($state)->name)
                    ->label('Batch'),
                TextColumn::make('exam_year')
                    ->label('Exam Year'),
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
            'index' => Pages\ListExamDuties::route('/'),
            'create' => Pages\CreateExamDuty::route('/create'),
            'edit' => Pages\CreateExamDuty::route('/{record}/edit'),
        ];
    }
}
