<?php

use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\CampusLifeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ClubsController;
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

Route::get('/dept-head-cse', function () {
    return view('dept-head-cse');
})->name('dept-head-cse');

Route::get('/dept-head-eee', function () {
    return view('dept-head-eee');
})->name('dept-head-eee');

Route::get('/dept-head-ce', function () {
    return view('dept-head-ce');
})->name('dept-head-ce');

Route::get('/dept-head-non-tech', function () {
    return view('dept-head-non-tech');
})->name('dept-head-non-tech');


Route::get('/departments/cse-department', [DepartmentController::class, 'cse'])->name('departments.cse-department');
Route::get('/departments/eee-department', [DepartmentController::class, 'eee'])->name('departments.eee-department');
Route::get('/departments/ce-department', [DepartmentController::class, 'ce'])->name('departments.ce-department');

Route::get('/clubs/ric', [ClubsController::class, 'ric'])->name('clubs.ric');
Route::get('/clubs/cyber-protector', [ClubsController::class, 'cyber_protector'])->name('clubs.cyber-protector');
Route::get('/clubs/photography', [ClubsController::class, 'photography'])->name('clubs.photography');
Route::get('/clubs/debating', [ClubsController::class, 'debating'])->name('clubs.debating');
Route::get('/clubs/club-of-professional', [ClubsController::class, 'club_of_professional'])->name('clubs.club-of-professional');
Route::get('/clubs/rover-scout', [ClubsController::class, 'rover_scout'])->name('clubs.rover-scout');
Route::get('/clubs/fecsa', [ClubsController::class, 'fecsa'])->name('clubs.fecsa');
Route::get('/clubs/programming', [ClubsController::class, 'programming'])->name('clubs.programming');
Route::get('/clubs/islamic-research', [ClubsController::class, 'islamic_research'])->name('clubs.islamic-research');
Route::get('/clubs/bani-archana', [ClubsController::class, 'bani_archana'])->name('clubs.bani-archana');


