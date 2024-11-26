<?php

namespace App\Filament\Resources\ManageExam\ExamTypeResource\Pages;

use App\Filament\Resources\ManageExam\ExamTypeResource;
use App\Models\ExamType;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamTypes extends ListRecords
{
    protected static string $resource = ExamTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs() : array
    {
        return create_model_tabs(new ExamType());
    }
}
