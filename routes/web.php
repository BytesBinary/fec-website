<?php

use App\Http\Controllers\AcademicsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/notices', [AcademicsController::class , 'notices'])->name('notices');
Route::get('/departments', [AcademicsController::class , 'departments'])->name('departments');
