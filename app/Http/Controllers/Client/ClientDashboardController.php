<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientProject;
use GeneralSettings;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function index(){
        $client = auth('clients')->user();
        // Get Current auth client his project
        $clientProjects = $client->ClientProject;
        return view('client.dashboard', compact('clientProjects'));
    }

    public function store_token(Request $request){
        $client_id = auth('clients')->user()->id;
        $device_token = Client::where('id', $client_id)->update([
            'device_token' => $request->device_token
        ]);
        $status = $device_token ? true : false;

        return response()->json([
            'message' => 'Success',
            'status' => $status,
            'device_token' => $request->device_token
        ]);
        
    }
}
