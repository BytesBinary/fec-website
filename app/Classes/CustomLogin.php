<?php

namespace App\Classes;

use Filament\Pages\Auth\Login;
use Illuminate\Validation\ValidationException;

class CustomLogin extends Login
{
    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.email' => 'This credintial does not match with our records.If you have submit your credintial then wait for admin approval.',
        ]);
    }
}
