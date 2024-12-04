<?php

namespace App\Filament\Resources\ManageExam\ExamDutyResource\Pages;

use App\Filament\Resources\ManageExam\ExamDutyResource;
use App\Models\Course;
use App\Models\ExamDuty;
use App\Models\ExamHall;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Pages\Page;

class ViewExamDuty extends Page
{
    protected static string $resource = ExamDutyResource::class;
    protected static string $view = 'filament.manage-exams.view-exam-duty';

    public array $examDuty;

    public function mount($record)
    {
        if (!$record) {
            return redirect(ExamDutyResource::getUrl('index'));
        }

        $examDuty = ExamDuty::find($record);

        if (!$examDuty) {
            return redirect(ExamDutyResource::getUrl('index'));
        }

        $data = $examDuty->toArray();
        $data['semester'] = $this->decodeJson($data['semester']);
        $data['batch'] = $this->decodeJson($data['batch']);
        $data['department'] = $this->decodeJson($data['department']);
        $data['duty_details'] = $this->processDutyDetails($data['duty_details']);

        $this->examDuty = $data;
    }

    private function decodeJson($value)
    {
        return json_decode($value, true) ?? [];
    }

    private function processDutyDetails($dutyDetails)
    {
        $dutyDetails = $this->decodeJson($dutyDetails);

        foreach ($dutyDetails as &$details) {
            if (isset($details['exam_hall'])) {
                $details['exam_hall'] = $this->getNames($details['exam_hall'], ExamHall::class, 'name');
            }
            if (isset($details['course'])) {
                $details['course'] = $this->getCourses($details['course']);
            }
            if (isset($details['supervisor'])) {
                $details['supervisor'] = $this->getNames($details['supervisor'], User::class, 'name');
            }
            if (isset($details['invigilator'])) {
                $details['invigilator'] = $this->getNames($details['invigilator'], User::class, 'name');
            }
        }

        return $dutyDetails;
    }

    private function getNames(array $ids, string $modelClass, string $field)
    {
        return array_map(fn($id) => $modelClass::find($id)?->$field ?? 'Unknown', $ids);
    }

    private function getCourses(array $ids)
    {
        return array_map(function ($id) {
            $course = Course::find($id);
            return $course ? "{$course->title} ({$course->code})" : 'Unknown Course';
        }, $ids);
    }

    public function download(): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $pdf = PDF::loadView('filament.manage-exams.download-exam-invigilator',
            [
                'examDuty' => $this->examDuty,
            ]);;
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, "invigilator-{$this->examDuty['exam_name']}-{$this->examDuty['exam_year']}.pdf");
    }
}
