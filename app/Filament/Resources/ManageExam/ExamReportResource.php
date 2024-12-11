<?php

namespace App\Filament\Resources\ManageExam;

use App\Filament\Resources\ManageExam\ExamReportResource\Pages;
use App\Models\ExamDuty;
use Filament\Resources\Resource;

class ExamReportResource extends Resource
{
    protected static ?string $model = ExamDuty::class;

    protected static ?string $navigationGroup = 'Manage Exams';

    protected static ?string $navigationLabel = 'Exam Reports';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageExamReport::route('/'),
        ];
    }
}
