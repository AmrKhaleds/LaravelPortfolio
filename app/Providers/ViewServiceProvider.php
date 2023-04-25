<?php

namespace App\Providers;

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
                $view->with(['notifications' => $notifications, 'notificationCount' => $notificationCount]);
            }
        });
    }
}
