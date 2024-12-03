<?php

use App\Http\Controllers\ClubRouteController;
use App\Livewire\Pages\CampusLife\AllClubs;
use App\Livewire\Pages\CampusLife\ResidenceCafeteria;
use App\Livewire\Pages\CampusLife\ResidencePage;
use App\Livewire\Partials\Club\About;

Route::prefix('campus-life')->group(function (){
    Route::get('residence-cafeteria', ResidenceCafeteria::class)->name('residence-cafeteria');
    Route::get('clubs', AllClubs::class)->name('clubs');
    Route::get('club/{club}', ClubRouteController::class)->name('single-club');
    Route::get('club/{club}/about',About::class)->name('club.about');
    Route::get('residence/{name}',ResidencePage::class)->name('residence');
});
