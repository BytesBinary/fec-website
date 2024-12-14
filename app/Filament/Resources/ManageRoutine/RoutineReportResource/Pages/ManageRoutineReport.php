<?php

namespace App\Filament\Resources\ManageRoutine\RoutineReportResource\Pages;

use App\Filament\Resources\ManageRoutine\RoutineReportResource;
use App\Models\Department;
use App\Models\Routine;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;

class ManageRoutineReport extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = RoutineReportResource::class;

    protected static string $view = 'filament.routine-reports.report-generation-form';

    public string $department;

    public string $semester;

    public string $report_type;

    public string $teacher_id;

    public bool $showReport = false;

    public ?array $routines = [];

    public ?array $credit_history = [];

    public function generate()
    {
        $this->validate();

        if ($this->report_type === 'personal_routine') {
            $this->showReport = true;
            $this->credit_history = [];
            $this->routines = Routine::getTeacherPersonalRoutine([
                'department' => $this->department,
                'semester' => $this->semester,
                'teacher_id' => $this->teacher_id,
            ]);
        } elseif ($this->report_type === 'credit_history') {
            $this->showReport = true;
            $this->routines = [];
            $this->credit_history = Routine::getTeacherCreditHistory([
                'department' => $this->department,
                'semester' => $this->semester,
            ]);
        } else {
            $this->showReport = false;
        }
    }

    public function deleteRoutine()
    {
        send_notification('warning', 3000, 'You can not delete routine from here.');

        return false;
    }

    public function downloadRoutine()
    {
        $user_details = User::find($this->teacher_id);
        $pdf = Pdf::loadView('filament.manage-routines.download-routine',
            [
                'routines' => $this->routines,
                'courses' => [],
                'user_details' => $user_details,
                'details' => [
                    'department' => $this->department,
                    'semester' => $this->semester,
                ],
            ]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, "routine-{$this->department}-{$this->semester}-{$this->teacher_id}.pdf");
    }

    public function downloadCreditHistory()
    {
        $pdf = Pdf::loadView('filament.routine-reports.download-credit-report',
            [
                'department' => $this->department,
                'semester' => $this->semester,
                'credit_history' => $this->credit_history,
            ]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, "routine-{$this->department}-{$this->semester}.pdf");
    }

    public function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                Select::make('department')
                    ->label('Department')
                    ->searchable()
                    ->options(
                        Department::pluck('short_title', 'short_title')->toArray()
                    )
                    ->required()
                    ->statePath('department'),
                Select::make('semester')
                    ->label('Semester')
                    ->options([
                        '1st' => '1st',
                        '2nd' => '2nd',
                        '3rd' => '3rd',
                        '4th' => '4th',
                        '5th' => '5th',
                        '6th' => '6th',
                        '7th' => '7th',
                        '8th' => '8th',
                    ])
                    ->required()
                    ->statePath('semester'),
                Select::make('report_type')
                    ->label('Report Type')
                    ->options([
                        'personal_routine' => 'Personal Routine',
                        'credit_history' => 'Credit History',
                    ])
                    ->required()
                    ->reactive()
                    ->statePath('report_type'),
                Select::make('teacher_id')
                    ->label('Teacher')
                    ->searchable()
                    ->options(
                        User::where('designation', 'Teacher')->pluck('name', 'id')->toArray()
                    )
                    ->required()
                    ->statePath('teacher_id')
                    ->visible(fn (callable $get) => $get('report_type') === 'personal_routine'),
            ]);
    }

    public function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Details')
                ->submit('save'),
        ];
    }
}
