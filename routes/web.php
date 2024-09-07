<?php

use App\Http\Controllers\AboutPage\AboutPageController;
use App\Http\Controllers\AcademicPage\AcademicPageController;
use App\Http\Controllers\AdmissionPage\AdmissionPageController;
use App\Http\Controllers\ClubsPage\ClubsPageController;
use App\Http\Controllers\ContactUsPage\ContactUsPageController;
use App\Http\Controllers\DepartmentsPage\DepartmentsPageController;
use App\Http\Controllers\EventsPage\EventsController;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\LoginPage\LoginPageController;
use App\Http\Controllers\NoticePage\NoticePageController;
use App\Http\Controllers\Researches\ResearchesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'load_home_page'] )->name('home');

Route::group(['prefix' => 'about-college'], function () {
    Route::get('/at-a-glance', [AboutPageController::class, 'at_a_glance'] )->name('at-a-glance');
    Route::get('/vision-mission', [AboutPageController::class, 'vision_mission'] )->name('vision-&-mission');
    Route::get('/infrastructure', [AboutPageController::class, 'infrastructure'] )->name('infrastructure');
    Route::get('/message-from-principal', [AboutPageController::class, 'message_from_principal'] )->name('message-from-principal');
});

Route::get('/notices', [NoticePageController::class, 'load_page'] )->name('notices');

Route::group(['prefix' => 'academics'],function(){
    Route::get('/syllabus',[AcademicPageController::class,'syllabus'])-> name('syllabus');
    Route::get('/calender',[AcademicPageController::class,'calender'])->name('calender');
});

Route::group(['prefix' => 'departments'],function(){
    Route::get('/computer-science',[DepartmentsPageController::class,'computer_science'])->name('computer-science-&-engineering');
    Route::get('/electrical-&-electronics',[DepartmentsPageController::class,'electrical_electronics'])->name('electrical-&-electronic-engineering');
    Route::get('/civil-engineering',[DepartmentsPageController::class,'civil'])->name('civil-engineering');
    Route::get('/non-tech',[DepartmentsPageController::class,'non_tech'])->name('non-tech');
});

Route::group(['prefix'=>'clubs'],function(){
    Route::get('/', [ClubsPageController::class, 'main_page'])->name('clubs');
    Route::get('/ric',[ClubsPageController::class,'RIC'])->name('ric-research-&-innovation-center');
    Route::get('/feccdc',[ClubsPageController::class,'FECCDC'])->name('feccdc-cyber-defense-club');
    Route::get('/fecdc',[ClubsPageController::class,'FECDC'])->name('fecdc-debating-club');
    Route::get('/fecsa',[ClubsPageController::class,'FECSA'])->name('fecsa-sports-association');
    Route::get('/fecPhoto',[ClubsPageController::class,'FECPhoto'])->name('fecpc-photographic-club');
    Route::get('/feccp',[ClubsPageController::class,'FECCP'])->name('feccp-club-of-profession');
    Route::get('/fecpc',[ClubsPageController::class,'FECPC'])->name('fecpc-programming-club');
    Route::get('/fecirdc',[ClubsPageController::class,'FECIRDC'])->name('fecirdc-islamic-research-&-dawah-center');
    Route::get('/fecrsg-rover-scout-group',[ClubsPageController::class,'FECRSG'])->name('fecrsg-rover-scout-group');
});

Route::group(['prefix'=>'admission'],function(){
    Route::get('/admission-information',[AdmissionPageController::class,'admission_information'])->name('admission-information');
    Route::get('/admission-test-result',[AdmissionPageController::class,'admission_test_result'])->name('admission-test-result');
    Route::get('/apply-online',[AdmissionPageController::class,'apply_online'])->name('apply-online');
});

Route::get('/contact-us', [ContactUsPageController::class, 'load_page'])->name('contactus');

Route::group(['prefix' => 'login'],function(){
    Route::get('/students-login',[LoginPageController::class,'students_login_page'])->name('students-login');
    Route::get('/teachers-login',[LoginPageController::class,'teachers_login_page'])->name('teachers-login');
    Route::get('/admin-login',[LoginPageController::class,'admin_login_page'])->name('admin-login');
    Route::post('/admin-login', [LoginPageController::class, 'admin_login'])->name('admin-login');
});

Route::group(['prefix' => 'activities'], function () {
    Route::get('/events', [EventsController::class, 'load_page'] )->name('events');
    Route::get('/events/{slug}', [EventsController::class, 'view_event'])->name('event.view');
    Route::get('/researches', [ResearchesController::class, 'load_page'] )->name('researches');
    Route::get('/researches/{slug}', [ResearchesController::class, 'view_research'] )->name('research.view');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginPageController::class, 'logout'])->name('logout');
});

require_once __DIR__.'/admin.php';
