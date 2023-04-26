<?php

namespace App\Providers;

use GeneralSettings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Using closure based composers...
        View::composer('layouts.client.index', function ($view) {
            if (auth('clients')->check()) {
                // The user is logged in...
                $notifications = auth('clients')->user()->notifications()->select('id', 'data', 'created_at', 'read_at')->get();
                $notificationCount = auth('clients')->user()->unreadNotifications()->count();
                $settings = new GeneralSettings;
                $dashboardSettings = [
                    'white_logo' => $settings->white_logo,
                    'site_name' => $settings->site_name
                ];
                $view->with(['notifications' => $notifications, 'notificationCount' => $notificationCount, 'dashboardSettings' => $dashboardSettings]);
            }
        });

        // Using closure based composers...
        View::composer('layouts.admin.index', function ($view) {
            if (auth()->check()) {
                $settings = new GeneralSettings;
                $dashboardSettings = [
                    'white_logo' => $settings->white_logo,
                    'site_name' => $settings->site_name,
                ];
                $view->with(['dashboardSettings' => $dashboardSettings]);
            }
        });
    }
}
