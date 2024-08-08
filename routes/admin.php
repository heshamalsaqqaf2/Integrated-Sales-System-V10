<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminPanelSettingsController;
use App\Http\Controllers\PostController;

/**
 * @TODO: Start Route Dashboard
 *        And Admin Panel Settings Pages
 */
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/adminpanelsetting/index', [AdminPanelSettingsController::class, 'index'])->name('admin.adminPanelSetting.index');
    Route::get('/adminpanelsetting/edit', [AdminPanelSettingsController::class, 'edit'])->name('admin.adminPanelSetting.edit');
    Route::post('/adminpanelsetting/update', [AdminPanelSettingsController::class, 'update'])->name('admin.adminPanelSetting.update');

    Route::get('/adminpanelsetting/post', [PostController::class, 'post'])->name('admin.adminPanelSetting.post');
    Route::post('/adminpanelsetting/store', [PostController::class, 'store'])->name('admin.adminPanelSetting.store');
    Route::post('/adminpanelsetting/tmp-upload', [PostController::class, 'update'])->name('admin.adminPanelSetting.tmpUpload');
    Route::delete('/adminpanelsetting/tmp-delete', [PostController::class, 'update'])->name('admin.adminPanelSetting.tmpDelete');
});

/**
 * @TODO: Start Route Authentication Pages
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('login', [LoginController::class, 'show_login_view'])->name('admin.showLogin');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
});
