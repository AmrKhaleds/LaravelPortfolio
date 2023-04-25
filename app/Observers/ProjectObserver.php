<?php

namespace App\Observers;

use App\Models\Client;
use App\Models\ClientProject;

use App\Notifications\ClientNotification;
use Illuminate\Support\Facades\Notification;

class ProjectObserver
{
    /**
     * Handle the Project "created" event.
     */
    public function created(ClientProject $project): void
    {
        $auth_client = $project->client_id;
        $client = Client::where('id',$auth_client)->get();
        // dd($client);
        Notification::send($client ,new ClientNotification($project));
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(ClientProject $project): void
    {
        //
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(ClientProject $project): void
    {
        //
    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(ClientProject $project): void
    {
        //
    }

    /**
     * Handle the Project "force deleted" event.
     */
    public function forceDeleted(ClientProject $project): void
    {
        //
    }
}
