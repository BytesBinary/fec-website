<?php

use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\CampusLifeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/notices', [AcademicsController::class , 'notices'])->name('notices');
Route::get('/departments', [AcademicsController::class , 'departments'])->name('departments');
Route::get('/discover-fec', [CampusLifeController::class , 'discoverFec'])->name('discover-fec');
