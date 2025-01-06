<?php

use App\Http\Controllers\FilamentLogout;
use App\Livewire\AboutUs;
use App\Livewire\Pages\Admission;
use App\Livewire\Pages\Alumni;
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', Home::class)->name('home');
// Admission Route
Route::get('/admission', Admission::class)->name('admission');
// About-us Route
Route::get('/about-us', AboutUs::class)->name('about-us');
// Alumni Route
Route::get('/alumni', Alumni::class)->name('alumni');
// Authentication Routes
Route::view('/verification-pending', 'auth.verification-pending')->name('verification.pending');
Route::post('/verification-logout', [FilamentLogout::class, 'logout'])->name('verification.logout');
// Academics Routes
require_once __DIR__.'/academics.php';
// Administration Routes
require_once __DIR__.'/administration.php';
// Departments Routes
require_once __DIR__.'/departments.php';
// Activities Routes
require_once __DIR__.'/activities.php';
// Campus Life Routes
require_once __DIR__.'/campus-life.php';
