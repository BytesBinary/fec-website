<?php

namespace App\Filament\Resources\ManageExam;

use App\Filament\Resources\ManageExam\ExamReportResource\Pages;
use App\Models\ExamDuty;
use App\Traits\HasResourceAccess;
use Filament\Resources\Resource;

class ExamReportResource extends Resource
{
    use HasResourceAccess;

    protected static ?string $model = ExamDuty::class;

    protected static ?string $navigationGroup = 'Manage Exams';

    protected static ?string $navigationLabel = 'Exam Reports';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?int $navigationSort = 10;

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageExamReport::route('/'),
        ];
    }
}
