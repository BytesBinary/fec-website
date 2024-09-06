<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\CommonResourceController;
use App\Http\Controllers\Admin\EditPages;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PagesAction;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminPageController::class, 'load_dashboard_page'])
        ->name('admin.dashboard');

    Route::get('/pages', [AdminPageController::class, 'get_all_editable_pages'])
        ->name('admin.pages');
    Route::get('/pages/edit/{slug}', [EditPages::class, 'edit_page'])
        ->name('admin.page.view');
    Route::get('/pages/edit/{slug}/{section}', [EditPages::class, 'edit_section'])
        ->name('admin.pages.edit');
    Route::post('/pages/edit/{slug}/{section}', [EditPages::class, 'save_changes'])
        ->name('admin.pages.edit');
    Route::get('/pages/{slug}/{action}', [PagesAction::class, 'change_page_status'])
        ->name('admin.page.status');
    Route::get('/pages/meta/delete/{id}', [PagesAction::class, 'delete_meta'])
        ->name('admin.pages.meta-delete');
    Route::get('/notice', [NoticeController::class, 'uploadNotice'])
        ->name('admin.notice');

    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::post('/posts/quil-editor/upload-image', [PostController::class, 'upload'])->name('admin.quil-editor.upload-image');

    Route::post('/store-resources', [CommonResourceController::class, 'storeResource'])
        ->name('admin.resources.store');
    Route::get('/modify-notice', [NoticeController::class, 'modifyNotice'])
        ->name('admin.notice.modify');
});
