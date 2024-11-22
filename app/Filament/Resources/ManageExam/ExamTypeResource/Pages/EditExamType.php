<?php

namespace App\Filament\Resources\ManageExam\ExamTypeResource\Pages;

use App\Filament\Resources\ManageExam\ExamTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamType extends EditRecord
{
    protected static string $resource = ExamTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
