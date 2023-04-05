<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientRegisterRequest;
use App\Models\Client;
use GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    /**
     * Return Registration View with logo of company
     */
    public function showRegistrationForm(GeneralSettings $settings){
        if (Auth::guard('clients')->check()) {
            return redirect()->route('client.dashboard');
        }

        return view('client.auth.register', [
            'white_logo' => $settings->white_logo,
        ]);
    }
    /**
     * Registeration Logic
     */
    public function register(ClientRegisterRequest $request){
        $requestData = $request->except(['_token', 'password_confirmation']);
        $requestData['password'] = Hash::make($requestData['password']);

        $client = Client::create($requestData);
        if($client){
            // Login After Registration
            Auth::guard('clients')->login($client);
            return redirect()->intended('/client/dashboard');
        }else{
            return redirect()->route('client.register')->with(['error' => 'There is error']);
        }
    }
}
