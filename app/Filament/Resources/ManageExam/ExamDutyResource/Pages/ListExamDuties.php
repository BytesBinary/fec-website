<?php

namespace App\Filament\Resources\ManageExam\ExamDutyResource\Pages;

use App\Filament\Resources\ManageExam\ExamDutyResource;
use App\Models\ExamDuty;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamDuties extends ListRecords
{
    protected static string $resource = ExamDutyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return create_model_tabs(new ExamDuty());
    }
}
