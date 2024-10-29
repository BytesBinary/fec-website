<?php

use App\Livewire\Pages\Administration\DeptHeadCE;
use App\Livewire\Pages\Administration\DeptHeadCSE;
use App\Livewire\Pages\Administration\DeptHeadEEE;
use App\Livewire\Pages\Administration\Principal;

Route::prefix('administration')->group(function () {
    Route::get('/principal', Principal::class)->name('principal');
    Route::get('/dept-head-cse', DeptHeadCSE::class)->name('dept-head-cse');
    Route::get('/dept-head-eee', DeptHeadEEE::class)->name('dept-head-eee');
    Route::get('/dept-head-ce', DeptHeadCE::class)->name('dept-head-ce');
});
