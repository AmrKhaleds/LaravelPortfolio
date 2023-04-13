<?php

use App\Http\Controllers\Client\Auth\LoginController;
use App\Http\Controllers\Client\Auth\LogoutController;
use App\Http\Controllers\Client\Auth\RegistrationController;
use App\Http\Controllers\Client\ClientCalendarController;
use App\Http\Controllers\Client\ClientDashboardController;
use App\Http\Controllers\Client\ClientProfileController;
use App\Http\Controllers\Client\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;    

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'client', 'as' => 'client.'], function(){
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login'])->name('login');
        Route::get('register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
        Route::post('register', [RegistrationController::class, 'register'])->name('register');
        
    }); 
    Route::group(['middleware' => ['client', 'clientCheckStatus']], function(){
        Route::get('dashboard', [ClientDashboardController::class, 'index'])->name('dashboard');
        Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
        // Calendar
        Route::get('calendar', [ClientCalendarController::class, 'index'])->name('calendar');
        Route::post('calendar/action', [ClientCalendarController::class, 'calendarEvents'])->name('calendar.action');
        // Projects
        Route::get('my-projects', [ProjectController::class, 'index'])->name('project');
        Route::get('my-projects/{id}', [ProjectController::class, 'show'])->name('project.show');
        // Profile 
        Route::resource('my-profile', ClientProfileController::class);
        // Download Files
        Route::get('dowonload/{client}/{project}', [ProjectController::class, 'downloadPhotos'])->name('download.photos');
    });
});
// Route::get('client-register', [RegistrationController::class, 'showRegistrationForm'])->name('client.regiser.form');
// Route::post('client-register', [RegistrationController::class, 'register'])->name('client.register');