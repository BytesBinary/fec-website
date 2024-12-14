<?php

namespace App\Filament\Resources\ManageExam;

use App\Filament\Resources\ManageExam\ExamDutyResource\Pages;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Department;
use App\Models\ExamDuty;
use App\Models\ExamHall;
use App\Models\ExamType;
use App\Models\User;
use Filament\Infolists\Components\Grid as InfolistGrid;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ExamDutyResource extends Resource
{
    protected static ?string $model = ExamDuty::class;

    protected static ?string $navigationGroup = "Manage Exams";

    protected static ?string $label = "Exam Duties";

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function can( string $action, $record="" ) : bool
    {
        return can_access_resource( 'Programmer' );
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('exam_name')
                    ->label('Exam Name'),
                TextColumn::make('exam_type_id')
                    ->badge()
                    ->color('primary')
                    ->formatStateUsing(function(string $state){
                        $states = str_replace(['[', ']', '"'], '', $state);
                        $states = explode(',', $states);
                        $examType = '';
                        foreach ($states as $state) {
                            $examType .= ExamType::find($state)->type . (end($states) === $state ? '' : ',');
                        }
                        return $examType;
                    })
                    ->label('Exam Type'),
                TextColumn::make('semester')
                    ->badge('secondary')
                    ->formatStateUsing(function(string $state){
                        $state = str_replace(['[', ']', '"'], '', $state);
                        return $state;
                    })
                    ->label('Semester'),
                TextColumn::make('batch')
                    ->badge()
                    ->color('danger')
                    ->formatStateUsing(function(string $state){
                        $states = str_replace(['[', ']', '"'], '', $state);
                        $states = explode(',', $states);
                        $batch = '';
                        foreach ($states as $state) {
                            $batch .= Batch::find($state)->number . (end($states) === $state ? '' : ',');
                        }
                        return $batch;
                    })
                    ->label('Batch'),
                TextColumn::make('exam_year')
                    ->badge('primary')
                    ->label('Exam Year'),
                TextColumn::make('department')
                    ->label('Department')
                    ->badge('secondary')
                    ->formatStateUsing(function(string $state){
                        $state = str_replace(['[', ']', '"'], '', $state);
                        return $state;
                    }),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions(create_table_actions([
                Tables\Actions\ViewAction::make(),
            ]))
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
            'view' => Pages\ViewExamDuty::route('/{record}/view'),
        ];
    }
}
