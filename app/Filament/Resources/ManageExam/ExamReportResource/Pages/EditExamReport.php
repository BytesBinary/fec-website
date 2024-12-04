<?php

namespace App\Filament\Resources\ManageExam\ExamReportResource\Pages;

use App\Filament\Resources\ManageExam\ExamReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamReport extends EditRecord
{
    protected static string $resource = ExamReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
