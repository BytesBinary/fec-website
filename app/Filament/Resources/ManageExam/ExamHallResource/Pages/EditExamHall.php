<?php

namespace App\Filament\Resources\ManageExam\ExamHallResource\Pages;

use App\Filament\Resources\ManageExam\ExamHallResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamHall extends EditRecord
{
    protected static string $resource = ExamHallResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
