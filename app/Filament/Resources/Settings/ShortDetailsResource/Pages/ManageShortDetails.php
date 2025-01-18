<?php

namespace App\Filament\Resources\Settings\ShortDetailsResource\Pages;

use App\Filament\Resources\Settings\ShortDetailsResource;
use App\Models\Options;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Resources\Pages\Page;

class ManageShortDetails extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = ShortDetailsResource::class;

    protected static string $view = 'filament.short-details-resource.manage-short-details';

    public ?array $data = [];

    public function mount()
    {
        $options =
            Options::where('option_type', 'short-details')
            ->get();

        if( ! empty($options) ) {
            $data = [];
            foreach ($options as $option) {
                $data[$option->option_name] = $option->option_value;
            }
            $this->form->fill($data);
        }
    }

    public function UpdateOrCreate()
    {
        $this->validate();

        foreach ($this->data as $key=>$data){
            $is_exist = Options::where('option_name', $key)
                ->where('option_type', 'short-details')
                ->first();

            if( $is_exist ){
                $is_exist->option_value = $data;
                $is_exist->save();
            } else{
                Options::create([
                    'option_type'=>'short-details',
                    'option_name' => $key,
                    'option_value'=>$data,
                ]);
            }
        }

        send_notification('success', 2000, 'Details Updated Successfully');
    }

    public function form( Form $form ) : Form
    {
        return $form
            ->schema([
                TextInput::make('established_year')
                    ->label('Establish Year')
                    ->numeric()
                    ->required(),
                TextInput::make('total_students')
                    ->label('Total Students')
                    ->numeric()
                    ->required(),
                TextInput::make('total_departments')
                    ->label('Total Departments')
                    ->numeric()
                    ->required(),
                TextInput::make('faculty_members')
                    ->label('Faculty Members')
                    ->numeric()
                    ->required(),
            ])
            ->columns(2)
            ->statePath('data');
    }

    public function getActionsTab() : array
    {
        return [
            Action::make('Update')
                ->action('UpdateOrCreate')
                ->label('Update')
        ];
    }
}
