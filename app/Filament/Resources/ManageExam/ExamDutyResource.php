<?php

namespace App\Filament\Resources\ManageExam;

use App\Filament\Resources\ManageExam\ExamDutyResource\Pages;
use App\Models\Batch;
use App\Models\Course;
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
                    ->formatStateUsing(fn(string $state) => Batch::find($state)->number)
                    ->label('Batch'),
                TextColumn::make('exam_year')
                    ->label('Exam Year'),
                TextColumn::make('department')
                    ->label('Department'),
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

    public static function infolist( Infolist $infolist ): Infolist
    {
        return $infolist
            ->schema([
                Section::make('General Information')
                    ->columns(3)
                    ->schema([
                        TextEntry::make('exam_name')
                            ->label('Exam Name'),
                        TextEntry::make('exam_type_id')
                            ->label('Exam Type')
                            ->formatStateUsing(fn(string $state) => ExamType::find($state)->type),
                        TextEntry::make('Department')
                            ->label('Department'),
                        TextEntry::make('batch')
                            ->label('Batch')
                            ->formatStateUsing(fn(string $state) => Batch::find($state)->number),
                        TextEntry::make('semester')
                            ->label('Semester'),
                        TextEntry::make('exam_year')
                            ->label('Exam Year'),
                    ]),
                Section::make('Exam Details')
                    ->label('Exam Duty Details')
                    ->columns(1)
                    ->schema([
                        RepeatableEntry::make('duty_details')
                            ->label('')
                            ->schema([
                                InfolistGrid::make()
                                    ->columns(5)
                                    ->schema([
                                    TextEntry::make('date')
                                        ->label('Date')
                                        ->formatStateUsing(fn(string $state) => date('F j, Y', strtotime($state))),
                                    TextEntry::make('exam_hall')
                                        ->label('Exam Hall')
                                        ->formatStateUsing(fn(string $state) => ExamHall::find($state)?->name ?? 'N/A'),
                                    TextEntry::make('course')
                                        ->label('Course')
                                        ->formatStateUsing(fn(string $state) => Course::find($state)?->title ?? 'N/A'),
                                    TextEntry::make('supervisor')
                                        ->label('Supervisor')
                                        ->formatStateUsing(fn(string $state) => User::find($state)?->name ?? 'N/A'),
                                    TextEntry::make('invigilator')
                                        ->label('Invigilator')
                                        ->formatStateUsing(fn(string $state) => User::find($state)?->name ?? 'N/A'),
                                    ]),
                            ]),
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
            'index' => Pages\ListExamDuties::route('/'),
            'create' => Pages\CreateExamDuty::route('/create'),
            'edit' => Pages\CreateExamDuty::route('/{record}/edit'),
            'view' => Pages\ViewExamDuty::route('/{record}/view'),
        ];
    }
}
