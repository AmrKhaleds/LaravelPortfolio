<?php

namespace App\Http\Middleware;

use Closure;
use GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ShareDataWithViews
{
    /**
     * Return settings to all view that under web middleware group 
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $dashboardSettings = Cache::remember('dashboardSettings', 60, function () {
            $settings = new GeneralSettings;
            return [
                'white_logo' => $settings->white_logo,
                'site_name' => $settings->site_name,
            ];
        });

        View::share('dashboardSettings', $dashboardSettings);

        return $next($request);
    }
}
