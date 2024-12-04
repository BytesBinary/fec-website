<?php

namespace App\Filament\Resources\ManageExam\ExamReportResource\Pages;

use App\Filament\Resources\ManageExam\ExamReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamReports extends ListRecords
{
    protected static string $resource = ExamReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
