<?php

use App\Livewire\Pages\Activities\Events;
use App\Livewire\Pages\Activities\Publications;
use App\Livewire\Pages\Activities\Researches;

Route::prefix('activities')->group(function (){
    Route::get('/publications', Publications::class)->name('publications');
    Route::get('/researches', Researches::class)->name('researches');
    Route::get('/events', Events::class)->name('events');
});
