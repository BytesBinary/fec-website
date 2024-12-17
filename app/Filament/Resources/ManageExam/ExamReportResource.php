<?php

namespace App\Filament\Resources\ManageExam;

use App\Filament\Resources\ManageExam\ExamReportResource\Pages;
use App\Models\ExamDuty;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;

class ExamReportResource extends Resource
{
    protected static ?string $model = ExamDuty::class;

    protected static ?string $navigationGroup = 'Manage Exams';

    protected static ?string $navigationLabel = 'Exam Reports';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?int $navigationSort = 10;

    public static function can(string $action, ?Model $record = null): bool
    {
        return can_access_resource('Programmer');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageExamReport::route('/'),
        ];
    }
}
