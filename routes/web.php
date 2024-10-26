<?php

use App\Livewire\Pages\Activities\Events;
use App\Livewire\Pages\Activities\Publications;
use App\Livewire\Pages\Activities\Researches;
use App\Livewire\Pages\Administration\DeptHeadCE;
use App\Livewire\Pages\Administration\DeptHeadCSE;
use App\Livewire\Pages\Administration\DeptHeadEEE;
use App\Livewire\Pages\Administration\Principal;
use App\Livewire\Pages\Admission;
use App\Livewire\Pages\Alumni;
use App\Livewire\Pages\CampusLife\AllClubs;
use App\Livewire\Pages\CampusLife\ResidenceCafeteria;
use App\Livewire\Pages\Departments\Ce;
use App\Livewire\Pages\Departments\Cse;
use App\Livewire\Pages\Departments\Eee;
use App\Livewire\Pages\Home;
use App\Livewire\Partials\Department\About;
use App\Livewire\Pages\Clubs\Ric;
use App\Livewire\Pages\Clubs\Fecsa;
use App\Livewire\Pages\Clubs\Feccpc;
use App\Livewire\Pages\Clubs\Fecpc;
use App\Livewire\Pages\Clubs\Fecpc2;
use App\Livewire\Pages\Clubs\Debating;
use App\Livewire\Pages\Clubs\IslamicDawah;
use App\Livewire\Pages\Clubs\BaniArchana;
use App\Livewire\Pages\Clubs\Professionals;
use App\Livewire\Pages\Clubs\Fecrsg;
use App\Livewire\Partials\Department\AcademicCalender;
use App\Livewire\Partials\Department\Events as DeptEvents;
use App\Livewire\Partials\Department\Gallery;
use App\Livewire\Partials\Department\IncourseRoutine;
use App\Livewire\Partials\Department\SemesterRoutine;

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', Home::class)->name('home');
// Admission Route
Route::get('/admission', Admission::class)->name('admission');
// Alumni Route
Route::get('/alumni', Alumni::class)->name('alumni');
// Academics Routes
require_once __DIR__ . '/academics.php';
// Administration Routes
require_once __DIR__ . '/administration.php';
// Departments Routes
require_once __DIR__ . '/departments.php';
// Activities Routes
require_once __DIR__ . '/activities.php';
// Campus Life Routes
require_once __DIR__ . '/campus-life.php';




