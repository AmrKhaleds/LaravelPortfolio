<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class clientCheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::guard('clients')->check() && Auth::guard('clients')->user()->status != 1){
            Auth::guard('clients')->logout();
            return redirect()->route('client.login')->with(['error' => 'Your Account is Not Activate Plese, contact us to unlock your Account']);
        }
        return $next($request);
    }
}
