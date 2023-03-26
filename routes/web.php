<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Front\ProjectController as FrontProjectController;
use App\Http\Controllers\Front\WebsiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;    

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebsiteController::class, 'index'])->name('front');
Route::get('/project/{slug}', [FrontProjectController::class, 'showProject'])->name('show');


Auth::routes();
// Admin Dashboard
Route::group(['prefix' => 'dashboard','middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('project', ProjectController::class); // admin
    // Settings
    Route::get('website-settings', [SettingsController::class, 'frontSettings'])->name('frontSettings');
    Route::post('website-settings/edit', [SettingsController::class, 'editFrontSettings'])->name('editFrontSettings');
    Route::get('dashboard-settings', [SettingsController::class, 'dashboardSettings'])->name('dashboardSettings');
    // Users
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);

});