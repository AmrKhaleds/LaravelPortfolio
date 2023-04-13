<?php
use App\Http\Controllers\Admin\{
    CalendarConroller,
    ClientController,
    DashboardController,
    ProjectController,
    SettingsController,
    UserController,
    RoleController,
    ClientProjectController
};
use App\Http\Controllers\Front\{
    ProjectController as FrontProjectController,
    WebsiteController
};
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
    // Projects
    Route::resource('project', ProjectController::class); 
    // Settings
    Route::resource('settings', SettingsController::class);
    // Users
    Route::resource('users', UserController::class);
    // Roles
    Route::resource('roles', RoleController::class);
    // Clients
    Route::resource('clients', ClientController::class);
    // ClientProjects
    Route::resource('client-projects', ClientProjectController::class);
    Route::get('trashed-clients', [ClientController::class, 'onlyTrashed'])->name('client.trashed');
    Route::post('trashed-clients/restore/{username}', [ClientController::class, 'restoreTrashed'])->name('client.trashed.restore');
    Route::post('clients/calendar/action/{id}', [ClientController::class, 'calendarEvents'])->name('calendar.action');

});