<?php

use App\Http\Controllers\ClubRouteController;
use App\Livewire\Pages\CampusLife\AllClubs;
use App\Livewire\Pages\CampusLife\ResidenceCafeteria;
use App\Livewire\Pages\CampusLife\ResidencePage;
use App\Livewire\Partials\Club\About;
use App\Livewire\Partials\Club\Committee;
use App\Livewire\Partials\Club\Events;
use App\Livewire\Partials\Club\Gallery;
use App\Livewire\Partials\Club\MemberForm;

Route::prefix('campus-life')->group(function (){
    Route::get('residence-cafeteria', ResidenceCafeteria::class)->name('residence-cafeteria');
    Route::get('clubs', AllClubs::class)->name('clubs');
    Route::get('club/{club}', ClubRouteController::class)->name('single-club');
    Route::get('club/{club}/about',About::class)->name('club.about');
    Route::get('club/{club}/committee',Committee::class)->name('club.committee');
    Route::get('club/{club}/events',Events::class)->name('club.events');
    Route::get('club/{club}/gallery',Gallery::class)->name('club.gallery');
    Route::get('club/{club}/member-form',MemberForm::class)->name('club.member-form');
    Route::get('residence/{name}',ResidencePage::class)->name('residence');
});
