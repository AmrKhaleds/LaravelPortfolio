<?php
use App\Http\Controllers\Admin\{
    CalendarConroller,
    ClientController,
    DashboardController,
    ProjectController,
    SettingsController,
    UserController,
    RoleController,
    ClientProjectController,
    CustomerSupportController,
    ProfileController
};
use App\Http\Controllers\Front\{
    ProjectController as FrontProjectController,
    WebsiteController
};
use Illuminate\Support\Facades\{
    Route,
    Auth
};

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
    Route::post('save_device_token', [DashboardController::class, 'store_token'])->name('save_device_token');
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
    // Trashed Clients
    Route::get('trashed-clients', [ClientController::class, 'onlyTrashed'])->name('client.trashed');
    Route::post('trashed-clients/restore/{username}', [ClientController::class, 'restoreTrashed'])->name('client.trashed.restore');
    // Calendar Events
    Route::post('clients/calendar/action/{id}', [ClientController::class, 'calendarEvents'])->name('calendar.action');
    // Customer Support
    Route::get('customer-support', [CustomerSupportController::class, 'index'])->name('admin.customer-support.index');
    Route::get('customer-support/{id}', [CustomerSupportController::class, 'show'])->name('admin.customer-support.show');
    Route::delete('customer-support/{id}', [CustomerSupportController::class, 'destroy'])->name('admin.customer-support.destroy');
    // Profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
});