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
    Route::get('/clubs', AllClubs::class)->name('clubs');
});
// Admission Route
Route::get('/admission', Admission::class)->name('admission');
// Alumni Route
Route::get('/alumni', Alumni::class)->name('alumni');

Route::get('/departments/{department}/about',About::class)->name('dept.about');
Route::get('/departments/{department}/events', DeptEvents::class)->name('dept.events');
Route::get('/departments/{department}/gallery', DeptEvents::class)->name('dept.gallery');


Route::get('campus-life/club/ric', Ric::class)->name('ric');
Route::get('campus-life/club/fecsa',Fecsa::class)->name('fecsa');
Route::get('campus-life/club/feccpc',Feccpc::class)->name('feccpc');
Route::get('campus-life/club/fecpc',Fecpc::class)->name('fecpc');
Route::get('campus-life/club/fecpc2',Fecpc2::class)->name('fecpc2');
Route::get('campus-life/club/debating',Debating::class)->name('debating');
Route::get('campus-life/club/islamic-dawah',IslamicDawah::class)->name('islamic-dawah');
Route::get('campus-life/club/bani-archana',BaniArchana::class)->name('bani-archana');
Route::get('campus-life/club/professionals',Professionals::class)->name('professionals');
Route::get('campus-life/club/fecrsg',Fecrsg::class)->name('fecrsg');

Route::get('/departments/{department}/gallery', Gallery::class)->name('dept.gallery');
Route::get('/departments/{department}/academic-calender', AcademicCalender::class)->name('dept.academic-calender');
Route::get('/departments/{department}/incourse-routine', IncourseRoutine::class)->name('dept.incourse-routine');
Route::get('/departments/{department}/semester-routine', SemesterRoutine::class)->name('dept.semester-routine');
