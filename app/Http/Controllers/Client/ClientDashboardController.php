<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ClientProject;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function index(){
        $client = auth('clients')->user();
        // Get Current auth client his project
        $clientProjects = $client->ClientProject;
        return view('client.dashboard', compact('clientProjects'));
    }
}
