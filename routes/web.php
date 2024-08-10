<?php

use App\Http\Controllers\AboutPage\AboutPageController;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\NoticePage\NoticePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePageController::class, 'load_page'] )->name('home');
Route::group(['prefix' => 'about-college'], function () {
    Route::get('/at-a-glance', [AboutPageController::class, 'at_a_glance'] )->name('about-college/at-a-glance');
    Route::get('/vision-mission', [AboutPageController::class, 'vision_mission'] )->name('about-college/vision-mission');
    Route::get('/infrastructure', [AboutPageController::class, 'infrastructure'] )->name('about-college/infrastructure');
    Route::get('/message-from-principal', [AboutPageController::class, 'message_from_principal'] )->name('about-college/message-from-principal');
});
Route::get('/notices', [NoticePageController::class, 'load_page'] )->name('notices');
