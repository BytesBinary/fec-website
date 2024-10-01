<?php

use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CampusLifeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landing');

Route::get('/notices', [AcademicsController::class , 'notices'])->name('notices');

Route::get('/discover-fec', [CampusLifeController::class , 'discoverFec'])->name('discover-fec');
Route::get('/clubs',[CampusLifeController::class,'clubs'])->name('clubs');

Route::get('/principal', [AdministrationController::class, 'principal'])->name('principal');

Route::prefix('departments')->group( function () {
    Route::get('/cse-department', [DepartmentController::class, 'cse'])->name('cse-department');
    Route::get('/eee-department', [DepartmentController::class, 'eee'])->name('eee-department');
    Route::get('/ce-department', [DepartmentController::class, 'ce'])->name('ce-department');
});

Route::prefix('clubs')->group(function () {
    Route::get('/ric', [ClubsController::class, 'ric'])->name('clubs.ric');
    Route::get('/cyber-protector', [ClubsController::class, 'cyber_protector'])->name('clubs.cyber-protector');
    Route::get('/photography', [ClubsController::class, 'photography'])->name('clubs.photography');
    Route::get('/debating', [ClubsController::class, 'debating'])->name('clubs.debating');
    Route::get('/club-of-professional', [ClubsController::class, 'club_of_professional'])->name('clubs.club-of-professional');
    Route::get('/rover-scout', [ClubsController::class, 'rover_scout'])->name('clubs.rover-scout');
    Route::get('/fecsa', [ClubsController::class, 'fecsa'])->name('clubs.fecsa');
    Route::get('/programming', [ClubsController::class, 'programming'])->name('clubs.programming');
    Route::get('/islamic-research', [ClubsController::class, 'islamic_research'])->name('clubs.islamic-research');
    Route::get('/bani-archana', [ClubsController::class, 'bani_archana'])->name('clubs.bani-archana');
});


