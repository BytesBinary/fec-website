<?php

namespace App\Filament\Resources\ManageExam\ExamDutyResource\Pages;

use App\Filament\Resources\ManageExam\ExamDutyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamDuty extends EditRecord
{
    protected static string $resource = ExamDutyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
