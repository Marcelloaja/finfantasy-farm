<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'AuthenticateLogin']);

Route::get('register', [AuthController::class, 'index_register']);
Route::post('register', [AuthController::class, 'RegisterSave']);

Route::get('logout', [AuthController::class, 'logout']);

Route::get('', [DashboardController::class, 'landing_page']);

Route::group(['middleware' => ['CheckSession:1'], 'prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard_admin']);

    // CRUD USER
    Route::get('user', [UserController::class, 'index']);
    Route::post('save-user', [UserController::class, 'save_user']);
    Route::post('edit-user', [UserController::class, 'edit_user']);
    Route::get('delete-user/{id}', [UserController::class, 'delete_user']);

    // CRUD BANNER
    Route::get('banner', [BannerController::class, 'index']);
    // Route::post('save-banner', [BannerController::class, 'save_banner']);
    Route::post('edit-banner', [BannerController::class, 'edit_banner']);
    // Route::get('delete-banner/{id}', [BannerController::class, 'delete_banner']);

    // CRUD PACKAGE
    Route::get('package', [PackageController::class, 'index']);
    Route::post('save-package', [PackageController::class, 'save_package']);
    Route::post('edit-package', [PackageController::class, 'edit_package']);
    Route::get('delete-package/{id}', [PackageController::class, 'delete_package']);
});
