<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckStatus
{
    /**
     * Handle an incoming request.
     * Check if user status isn't 1 then return error that account is disable
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        // If the status is not approved redirect to login 
        if(Auth::check() && Auth::user()->status != 1){
            Auth::logout();
            return redirect('/login')->with('error', 'Your Account is disable Please, Contact Support to unlock your Acount');
        }
        return $response;
    }
}
