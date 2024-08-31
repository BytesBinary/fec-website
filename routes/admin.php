<?php

use App\Http\Controllers\AdminPage\AdminPageController;
use App\Http\Controllers\AdminPage\PagesController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminPageController::class,'load_dashboard_page'])
        ->name('admin.dashboard');
    Route::get('/pages',[PagesController::class, 'all_pages'])
        ->name('admin.pages');
    Route::get('/pages/edit/{slug}',[PagesController::class, 'edit_page'])
        ->name('admin.pages.edit');
});
