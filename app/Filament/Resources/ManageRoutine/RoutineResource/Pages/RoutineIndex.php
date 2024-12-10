<?php

namespace App\Filament\Resources\ManageRoutine\RoutineResource\Pages;

use App\Filament\Resources\ManageRoutine\RoutineResource;
use App\Models\Department;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;

class RoutineIndex extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = RoutineResource::class;

    protected static string $view = 'filament.manage-routines.routine-index';

    public ?array $data = [];

    public function gotoRoutineMaker()
    {
        $this->validate();
        if( $this->data['department'] && $this->data['semester'] ) {
            redirect(RoutineResource::getUrl('manage', ['department' => $this->data['department'], 'semester' => $this->data['semester']]));
        }
        else {
            send_notification( 'danger', 5000,'Please select department and semester' );
        }
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->label('Routine')
                    ->columns(2)
                    ->schema([
                        Select::make('department')
                            ->options(Department::all()->pluck('short_title', 'short_title'))
                            ->required(),
                        Select::make('semester')
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
                            ->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function getFormActions() : array
    {
        return [
            Action::make('submit')
                ->label('Submit')
                ->submit('submit'),
        ];
    }
}
