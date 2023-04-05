<?php

use App\Http\Controllers\Admin\CalendarConroller;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ClientProjectController;
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


Auth::routes(['register' => false, 'reset' => false]);
// Admin Dashboard
Route::group(['prefix' => 'dashboard','middleware' => ['auth', 'checkStatus']], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('project', ProjectController::class); // admin
    // Settings
    Route::resource('settings', SettingsController::class);
    // Users
    Route::resource('users', UserController::class);
    // Roles
    Route::resource('roles', RoleController::class);
    // Clients
    Route::resource('clients', ClientController::class);
    Route::get('trashed-clients', [ClientController::class, 'onlyTrashed'])->name('client.trashed');
    Route::post('trashed-clients/restore/{username}', [ClientController::class, 'restoreTrashed'])->name('client.trashed.restore');
    Route::post('clients/calendar/action/{id}', [ClientController::class, 'calendarEvents'])->name('calendar.action');
    // Caledar
    Route::get('caleder', [CalendarConroller::class, 'index'])->name('admin.calendar');
    // ClientProjects
    Route::resource('client-projects', ClientProjectController::class);

});