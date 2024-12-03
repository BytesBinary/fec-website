<?php

use App\Livewire\Pages\Departments\Ce;
use App\Livewire\Pages\Departments\Cse;
use App\Livewire\Pages\Departments\Eee;
use App\Livewire\Pages\Departments\NonTech;
use App\Livewire\Partials\Department\About;
use App\Livewire\Partials\Department\AcademicCalender;
use App\Livewire\Partials\Department\Events as DeptEvents;
use App\Livewire\Partials\Department\Gallery;
use App\Livewire\Partials\Department\IncourseRoutine;
use App\Livewire\Partials\Department\SemesterRoutine;

Route::prefix('departments')->group(function (){
    Route::get('/cse',Cse::class)->name('cse');
    Route::get('/eee',Eee::class)->name('eee');
    Route::get('/ce', Ce::class)->name('ce');
    Route::get('/non-tech', NonTech::class)->name('non-tech');
    Route::get('{department}/about',About::class)->name('dept.about');
    Route::get('{department}/events', DeptEvents::class)->name('dept.events');
    Route::get('{department}/gallery', Gallery::class)->name('dept.gallery');
    Route::get('{department}/academic-calender', AcademicCalender::class)->name('dept.academic-calender');
    Route::get('{department}/incourse-routine', IncourseRoutine::class)->name('dept.incourse-routine');
    Route::get('{department}/semester-routine', SemesterRoutine::class)->name('dept.semester-routine');
});
