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
Route::get('/clubs',[CampusLifeController::class,'clubs'])->name('clubs');

Route::get('/principal', function () {
    return view('principal');
})->name('principal');

Route::get('/dept-cse', function () {
    return view('dept-cse');
})->name('dept-cse');

Route::get('/dept-eee', function () {
    return view('dept-eee');
})->name('dept-eee');

Route::get('/dept-ce', function () {
    return view('dept-ce');
})->name('dept-ce');

Route::get('/dept-non-tech', function () {
    return view('dept-non-tech');
})->name('dept-non-tech');

