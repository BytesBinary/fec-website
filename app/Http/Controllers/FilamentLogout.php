<?php

namespace App\Http\Controllers;

use Filament\Facades\Filament;
use Filament\Http\Controllers\Auth\LogoutController;
use Filament\Http\Responses\Auth\LogoutResponse;
use Illuminate\Http\Request;

class FilamentLogout extends LogoutController
{
    public function logout( Request $request ) {
        Filament::auth()->logout();

        session()->invalidate();
        session()->regenerateToken();

        return app(LogoutResponse::class);
    }
}
