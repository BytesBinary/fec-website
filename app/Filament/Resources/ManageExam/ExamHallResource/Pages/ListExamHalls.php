<?php

namespace App\Filament\Resources\ManageExam\ExamHallResource\Pages;

use App\Filament\Resources\ManageExam\ExamHallResource;
use App\Models\ExamHall;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamHalls extends ListRecords
{
    protected static string $resource = ExamHallResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return create_model_tabs(new ExamHall());
    }
}
