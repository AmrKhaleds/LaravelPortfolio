<?php 
    namespace App\Actions\Admin\ClientProjectActions;

use App\Http\Requests\ClientProjectRequest;
use App\Models\Client;
use App\Models\ClientCalendar;
use App\Models\ClientProject;
use App\Models\ClientProjectPhotos;
use App\Models\ClientProjectVideos;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Image;
use Illuminate\Support\Str;

class CreateClientProjectAction
{
    protected $clientName;
    protected $clientProject;

    public function execute(ClientProjectRequest $data)
    {
        $this->clientName = Client::find($data['client_id']);

        // Create Client Project Project 
        $this->clientProject = ClientProject::create([
            'project_name' => $data['project_name'],
            'client_id' => $data['client_id'],
            'start_at' => $data['start_at'],
            'end_at' => $data['end_at'],
            'progress' => $data['progress'],
            'external_photos_link' => $data['external_photos_link'],
            'external_videos_link' => $data['external_videos_link'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // Assign start at and end at to client's calendar
        ClientCalendar::create([
            'client_id' => $data['client_id'],
            'event_name' => $data['project_name'],
            'event_start' => $data['start_at'],
            'event_end' => $data['end_at']
        ]);

    }

    public function getClientName(){
        return $this->clientName;
    }

    public function getClientProject(){
        return $this->clientProject;
    }
}