<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;

class CreateEvent extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = EventResource::class;

    protected static string $view = 'filament.manage-events.create-event';

    public function form(Form $form) : Form
    {
        return $form
            ->schema([
               Section::make('Basic Details')
                    ->columns(2)
                    ->schema([
                        TextInput::make('post_title')
                            ->label('Title')
                            ->required()
                            ->placeholder('Enter the title of the event'),
                        TextInput::make('short_description')
                            ->label('Short Description')
                            ->required()
                            ->hint('Try to keep it under 5 word or 40 characters')
                            ->hintColor('danger')
                            ->placeholder('Enter a short description of the event'),
                        TextInput::make('registration_url')
                            ->label('Registration URL')
                            ->url()
                            ->placeholder('Enter the registration URL'),
                        DatePicker::make('event_date')
                            ->label('Event Date')
                            ->required()
                            ->placeholder('Select the date of the event'),
                    ]),
            ]);
    }
}
