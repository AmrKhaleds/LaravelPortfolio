<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Return Login Form View with logo of company
     */
    public function showLoginForm(GeneralSettings $settings){
        if (Auth::guard('clients')->check()) {
            return redirect()->route('client.dashboard');
        }
        return view('client.auth.login', [
            'white_logo' => $settings->white_logo
        ]);
    }
    /**
     * Login Logic
     */
    public function login(Request $request){
        $requestData = $request->only('username','password');
        if (Auth::guard('clients')->attempt($requestData)) {
            // Authentication passed...
            return redirect()->intended('/client/dashboard');
        }
        return redirect('/client/login')->with('error', 'Invalid email or password.');
        // dd($request->all());
    }
}
