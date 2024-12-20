<?php

namespace App\Classes;

use App\Models\Designation;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Events\Auth\Registered;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Pages\Auth\Register;

class CustomRegistration extends Register
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->placeholder('Enter Your Name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->placeholder('Enter Your Email')
                    ->unique('users', 'email')
                    ->required(),
                Select::make('designation')
                    ->label('Designation')
                    ->placeholder('Select Designation')
                    ->options(Designation::all()->pluck('designation', 'designation')->toArray())
                    ->reactive()
                    ->required(),
                TextInput::make('short_name')
                    ->label('Short Name')
                    ->placeholder('Enter Your Short Name')
                    ->unique('users', 'short_name')
                    ->visible(function (Get $get) {
                        return $get('designation') !== 'Student';
                    })
                    ->required(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ])
            ->columns(1);
    }

    public function register(): ?RegistrationResponse
    {
        try {
            $this->rateLimit(10);
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return null;
        }

        $user = $this->wrapInDatabaseTransaction(function () {
            $this->callHook('beforeValidate');

            $data = $this->form->getState();

            $this->callHook('afterValidate');

            $data = $this->mutateFormDataBeforeRegister($data);

            $this->callHook('beforeRegister');

            $user = $this->handleRegistration($data);

            $this->form->model($user)->saveRelationships();

            $this->callHook('afterRegister');

            return $user;
        });

        event(new Registered($user));

        return app(RegistrationResponse::class);
    }
}
