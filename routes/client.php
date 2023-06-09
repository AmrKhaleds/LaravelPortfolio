<?php
use App\Http\Controllers\Client\{
    Auth\LoginController,
    Auth\LogoutController,
    Auth\RegistrationController,
    ClientCalendarController,
    ClientDashboardController,
    ClientProfileController,
    CustomerSupport,
    CustomerSupportController,
    ProjectController
};
use Illuminate\Support\Facades\{
    Route,
    Auth
};   

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Client routes for your application. These
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
        Route::post('/save_device_token', [ClientDashboardController::class, 'store_token'])->name('save_device_token');
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
        // Customer Support 
        Route::get('support', [CustomerSupportController::class, 'index'])->name('support');
        Route::POST('support', [CustomerSupportController::class, 'store'])->name('support.store');
        Route::get('support/{id}', [CustomerSupportController::class, 'show'])->name('support.show');
        Route::delete('support/{id}', [CustomerSupportController::class, 'destroy'])->name('support.destroy');
    });
});