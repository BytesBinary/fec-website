<?php

namespace App\Filament\Resources\ManageExam\ExamReportResource\Pages;

use App\Filament\Resources\ManageExam\ExamReportResource;
use App\Models\ExamDuty;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Collection;

class ManageExamReport extends Page implements HasForms
{
    use InteractsWithForms;

    public string $exam_duties;

    public string $report_type;

    public bool $isgenerated = false;

    public ?array $details = [];

    protected static string $resource = ExamReportResource::class;

    protected static string $view = 'filament.exam-duty-reports.manage-exam-report';

    public function generateReport()
    {
        $this->validate();
        $this->details = $this->countDetails();
        if (! empty($this->details)) {
            $this->isgenerated = true;
        } else {
            $this->isgenerated = false;
            send_notification('danger', 5000, 'No data found for the selected exam duty.');
        }
    }

    public function downloadExamReport()
    {
        $pdf = Pdf::loadView('filament.exam-duty-reports.download-exam-report',
            [
                'details' => $this->details,
                'report_type' => $this->report_type,
            ]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, "routine-{$this->report_type}-{$this->exam_duties}.pdf");
    }

    public function countDetails()
    {
        $details = $this->processDetails();
        if ($this->report_type == 'invigilator') {
            return $details['invigilators'];
        } elseif ($this->report_type == 'supervisor') {
            return $details['supervisors'];
        }
    }

    public function processDetails()
    {
        $duties = ExamDuty::where('id', $this->exam_duties)->first()->toArray();
        $duty_details = json_decode($duties['duty_details'], true);
        $invigilators = [];
        $supervisors = [];
        Collection::make($duty_details)->map(function ($details) use (&$invigilators, &$supervisors) {
            if (isset($details['invigilator']) && ! empty($details['invigilator']) && $this->report_type == 'invigilator') {
                Collection::make($details['invigilator'])->map(function ($invigilator) use (&$invigilators) {
                    if (array_key_exists($invigilator, $invigilators)) {
                        $invigilators[$invigilator]['duties']++;
                    } else {
                        $invigilators[$invigilator]['duties'] = 1;
                        $invigilators[$invigilator]['name'] = User::where('id', $invigilator)->first()->name;
                    }
                });
            } elseif (isset($details['supervisor']) && ! empty($details['supervisor']) && $this->report_type == 'supervisor') {
                Collection::make($details['supervisor'])->map(function ($supervisor) use (&$supervisors) {
                    if (array_key_exists($supervisor, $supervisors)) {
                        $supervisors[$supervisor]['duties']++;
                    } else {
                        $supervisors[$supervisor]['duties'] = 1;
                        $supervisors[$supervisor]['name'] = User::where('id', $supervisor)->first()->name;
                    }
                });
            }
        });

        return [
            'invigilators' => $invigilators,
            'supervisors' => $supervisors,
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema([
                Select::make('exam-duties')
                    ->label('Exam Duties')
                    ->options(ExamDuty::orderBy('created_at', 'desc')->get()->pluck('exam_name', 'id'))
                    ->required()
                    ->searchable()
                    ->statepath('exam_duties'),
                Select::make('report_type')
                    ->label('Report Type')
                    ->options([
                        'invigilator' => 'Invigilator',
                        'supervisor' => 'Supervisor',
                    ])
                    ->required()
                    ->statepath('report_type'),
            ]);
    }

    public function getFormActions()
    {
        return [
            Action::make('Generate Report')
                ->label('Generate Report')
                ->action('generateReport'),
        ];
    }
}
