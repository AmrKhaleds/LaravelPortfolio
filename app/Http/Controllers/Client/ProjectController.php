<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientProject;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $currentClientLogedIn = auth('clients')->user()->id;
        $client = Client::find($currentClientLogedIn);
        $projects = $client->ClientProject;
        // dd($projects);
        return view('client.projects.index', compact('projects'));
    }

    public function show(string $id){
        $project = ClientProject::where('id', $id)->first();
        $clientUsername = Client::find($project->client_id)->username;
        $projectPhotos = $project->client_project_photos;
        $projectVideos = $project->client_project_videos;
        $photoDir = 'public/clients/photos/' . $clientUsername . '/';

        return view('client.projects.show', compact('projectPhotos', 'projectVideos', 'clientUsername', 'project'));
    }
}
