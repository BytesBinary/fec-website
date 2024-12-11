<?php

namespace App\Filament\Resources\ManageExam\ExamReportResource\Pages;

use App\Filament\Resources\ManageExam\ExamReportResource;
use Filament\Resources\Pages\Page;

class ManageExamReport extends Page
{
    protected static string $resource = ExamReportResource::class;

    protected static string $view = 'filament.exam-duty-reports.manage-exam-report';
}
