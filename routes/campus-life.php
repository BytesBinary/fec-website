<?php

use App\Http\Controllers\ClubRouteController;
use App\Livewire\Pages\CampusLife\AllClubs;
use App\Livewire\Pages\CampusLife\ResidenceCafeteria;

Route::prefix('campus-life')->group(function (){
    Route::get('residence-cafeteria', ResidenceCafeteria::class)->name('residence-cafeteria');
    Route::get('clubs', AllClubs::class)->name('clubs');
    Route::get('club/{name}', ClubRouteController::class)->name('single-club');
});
