<?php

use App\Livewire\Pages\Academics\Library;
use App\Livewire\Pages\Academics\Notices;
use App\Livewire\Pages\Academics\StudentStatistics;

Route::prefix('academics')->group(function (){
    Route::get('/notices', Notices::class)->name('notices');
    Route::get('/library', Library::class)->name('library');
});
