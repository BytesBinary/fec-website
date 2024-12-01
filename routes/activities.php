<?php

use App\Http\Controllers\ResearchRoute;
use App\Livewire\Pages\Activities\EventPage;
use App\Livewire\Pages\Activities\Events;
use App\Livewire\Pages\Activities\Researches;

Route::prefix('activities')->group(function (){
    Route::get('/researches', Researches::class)->name('researches');
    Route::get('club/{name}', ResearchRoute::class)->name('single-research');
    Route::get('/events', Events::class)->name('events');
    Route::get('/event/{slug}',EventPage::class)->name('event');
});
