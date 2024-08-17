<?php

use App\Http\Controllers\AboutPage\AboutPageController;
use App\Http\Controllers\AcademicPage\AcademicPageController;
use App\Http\Controllers\AdmissionPage\AdmissionPageController;
use App\Http\Controllers\ClubsPage\ClubsPageController;
use App\Http\Controllers\ContactUsPage\ContactUsPageController;
use App\Http\Controllers\DepartmentsPage\DepartmentsPageController;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\LoginPage\LoginPageController;
use App\Http\Controllers\NoticePage\NoticePageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomePageController::class, 'load_page'] )->name('home');

Route::group(['prefix' => 'about-college'], function () {
    Route::get('/at-a-glance', [AboutPageController::class, 'at_a_glance'] )->name('about-college/at-a-glance');
    Route::get('/vision-mission', [AboutPageController::class, 'vision_mission'] )->name('about-college/vision-&-mission');
    Route::get('/infrastructure', [AboutPageController::class, 'infrastructure'] )->name('about-college/infrastructure');
    Route::get('/message-from-principal', [AboutPageController::class, 'message_from_principal'] )->name('about-college/message-from-principal');
});

Route::get('/notices', [NoticePageController::class, 'load_page'] )->name('notices');

Route::group(['prefix' => 'academics'],function(){
    Route::get('/syllabus',[AcademicPageController::class,'syllabus'])-> name('academics/syllabus');
    Route::get('/calender',[AcademicPageController::class,'calender'])->name('academics/calender');
});

Route::group(['prefix' => 'departments'],function(){
    Route::get('/computer-science',[DepartmentsPageController::class,'computer_science'])->name('departments/computer-science-&-engineering');
    Route::get('/electrical-&-electronics',[DepartmentsPageController::class,'electrical_electronics'])->name('departments/electrical-&-electronic-engineering');
    Route::get('/civil-engineering',[DepartmentsPageController::class,'civil'])->name('departments/civil-engineering');
    Route::get('/non-tech',[DepartmentsPageController::class,'non_tech'])->name('departments/non-tech');
});

Route::group(['prefix'=>'clubs'],function(){
    Route::get('/ric',[ClubsPageController::class,'RIC'])->name('clubs/ric-research-&-innovation-center');
    Route::get('/feccdc',[ClubsPageController::class,'FECCDC'])->name('clubs/feccdc-cyber-defense-club');
    Route::get('/fecdc',[ClubsPageController::class,'FECDC'])->name('clubs/fecdc-debating-club');
    Route::get('/fecsa',[ClubsPageController::class,'FECSA'])->name('clubs/fecsa-sports-association');
    Route::get('/fecPhoto',[ClubsPageController::class,'FECPhoto'])->name('clubs/fecpc-photographic-club');
    Route::get('/feccp',[ClubsPageController::class,'FECCP'])->name('clubs/feccp-club-of-profession');
    Route::get('/fecpc',[ClubsPageController::class,'FECPC'])->name('clubs/fecpc-programming-club');
    Route::get('/fecirdc',[ClubsPageController::class,'FECIRDC'])->name('clubs/fecirdc-islamic-research-&-dawah-center');
    Route::get('/fecrsg-rover-scout-group',[ClubsPageController::class,'FECRSG'])->name('clubs/fecrsg-rover-scout-group');
});

Route::group(['prefix'=>'admission'],function(){
    Route::get('/admission-information',[AdmissionPageController::class,'admission_information'])->name('admission/admission-information');
    Route::get('/admission-test-result',[AdmissionPageController::class,'admission_test_result'])->name('admission/admission-test-result');
    Route::get('/apply-online',[AdmissionPageController::class,'apply_online'])->name('admission/apply-online');
});

Route::get('/contact-us', [ContactUsPageController::class, 'load_page'])->name('contactus');

Route::group(['prefix' => 'login'],function(){
    Route::get('/students-login',[LoginPageController::class,'students_login'])->name('login/students-login');
    Route::get('/teachers-login',[LoginPageController::class,'teachers_login'])->name('login/teachers-login');
});
