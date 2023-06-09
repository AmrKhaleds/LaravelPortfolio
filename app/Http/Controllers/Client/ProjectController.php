<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientProject;
use Illuminate\Http\Request;
use App\Http\Traits\DownloadPhotosDirectory;

class ProjectController extends Controller
{
    use DownloadPhotosDirectory;

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
        $projectVideos = $project->client_project_videos;
        $clientDir = $project->client->username . '/' . $project->project_name;
        // Get Total Project Size
        $photoDir = public_path('storage/clients/photos/' . $clientDir);
        $videoDir = public_path('storage/clients/videos/' . $clientDir);
        $projectTotalSize = getDirectorySize($photoDir) + getDirectorySize($videoDir);
        
        // dd($projectTotalSize);
        return view('client.projects.show', compact('projectPhotos', 'projectVideos', 'projectVideos', 'clientUsername', 'project', 'clientDir', 'projectTotalSize'));
    }

    public function downloadPhotos(string $client, string $project){
        return $this->photosDirectoryDownload($client, $project);
    }
}
