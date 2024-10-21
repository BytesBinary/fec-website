<?php

use App\Livewire\Pages\Academics\Library;
use App\Livewire\Pages\Academics\Notices;
use App\Livewire\Pages\Academics\StudentStatistics;
use App\Livewire\Pages\Activities\Events;
use App\Livewire\Pages\Activities\Publications;
use App\Livewire\Pages\Activities\Researches;
use App\Livewire\Pages\Administration\DeptHeadCE;
use App\Livewire\Pages\Administration\DeptHeadCSE;
use App\Livewire\Pages\Administration\DeptHeadEEE;
use App\Livewire\Pages\Administration\Principal;
use App\Livewire\Pages\Admission;
use App\Livewire\Pages\Alumni;
use App\Livewire\Pages\CampusLife\Clubs;
use App\Livewire\Pages\CampusLife\ResidenceCafeteria;
use App\Livewire\Pages\Departments\Ce;
use App\Livewire\Pages\Departments\Cse;
use App\Livewire\Pages\Departments\Eee;
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', Home::class)->name('home');
// Academics Routes
Route::prefix('academics')->group(function (){
    Route::get('/notices', Notices::class)->name('notices');
    Route::get('/library', Library::class)->name('library');
    Route::get('/student-statistics', StudentStatistics::class)->name('student-statistics');
});
// Administration Routes
Route::prefix('administration')->group(function (){
    Route::get('/principal', Principal::class)->name('principal');
    Route::get('/dept-head-cse', DeptHeadCSE::class)->name('dept-head-cse');
    Route::get('/dept-head-eee', DeptHeadEEE::class)->name('dept-head-eee');
    Route::get('/dept-head-ce', DeptHeadCE::class)->name('dept-head-ce');
});
// Departments Routes
Route::prefix('departments')->group(function (){
    Route::get('/cse',Cse::class)->name('cse');
    Route::get('/eee',Eee::class)->name('eee');
    Route::get('/ce', Ce::class)->name('ce');
});
// Activities Routes
Route::prefix('activities')->group(function (){
    Route::get('/publications', Publications::class)->name('publications');
    Route::get('/researches', Researches::class)->name('researches');
    Route::get('/events', Events::class)->name('events');
});
// Campus Life Routes
Route::prefix('campus-life')->group(function (){
    Route::get('residence-cafeteria', ResidenceCafeteria::class)->name('residence-cafeteria');
    Route::get('/clubs', Clubs::class)->name('clubs');
});
// Admission Route
Route::get('/admission', Admission::class)->name('admission');
// Alumni Route
Route::get('/alumni', Alumni::class)->name('alumni');
