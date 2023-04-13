<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientProjectRequest;
use App\Models\Client;
use App\Models\ClientCalendar;
use App\Models\ClientProject;
use App\Models\ClientProjectPhotos;
use App\Models\ClientProjectVideos;
use Exception;
use Illuminate\Http\Request;

class ClientProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientProjects = ClientProject::all();
        return view('admin.client-projects.index', compact('clientProjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('admin.client-projects.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientProjectRequest $request)
    {
        try{
            $clientName = Client::find($request->client_id);
            // Create Client Project Project 
            $clientProject = ClientProject::create([
                'project_name' => $request->project_name,
                'client_id' => $request->client_id,
                'start_at' => $request->start_at,
                'end_at' => $request->end_at,
                'progress' => $request->progress,
                'external_photos_link' => $request->external_photos_link,
                'external_videos_link' => $request->external_videos_link,
            ]);
            // Assign start at and end at to client's calendar
            ClientCalendar::create([
                'client_id' => $request->client_id,
                'event_name' => $request->project_name,
                'event_start' => $request->start_at,
                'event_end' => $request->end_at
            ]);
            // check if photos field input are exist and then loop throw photos then sore in database
            if ($request->hasFile('photo_name')) {
                foreach ($request->file('photo_name') as $image) {
                    $photoName = time() . '_' . $image->getClientOriginalName();
                    // dd('public/clients/photos/' . $clientName->username . '/' . $clientProject->project_name);
                    $image->storeAs('public/clients/photos/' . $clientName->username . '/' . $clientProject->project_name , $photoName);
                    ClientProjectPhotos::create([
                        'project_id' => $clientProject->id,
                        'photo_name' => $photoName
                    ]);
                }
            }
            // check if videos field input are exist and then loop throw videos then sore in database
            if ($request->hasFile('video_name')) {
                foreach($request->file('video_name') as $video){
                    $videoName = date('Y-m-d') . '_' . $video->getClientOriginalName();
                    $video->storeAs('public/clients/videos/' . $clientName->username . '/' . $clientProject->project_name , $videoName);
                    ClientProjectVideos::create([
                        'project_id' => $clientProject->id,
                        'video_name' => $videoName
                    ]);
                }
            }
            return redirect()->route('client-projects.index')->with(['success' => 'Project Created Successfully.']);
        } catch(Exception $e){
            return redirect()->route('client-projects.index')->with(['error' => 'There wase error when creating Project']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = ClientProject::find($id);
        $clientCalendar = ClientCalendar::where('client_id', $project->client->id)
                                        ->whereDate('event_start', $project->start_at)
                                        ->whereDate('event_end', $project->end_at)
                                        ->first();
        // dd($clientCalendar);
        if($clientCalendar){
            $clientCalendar->delete();
        }
        if($project->delete()){
            return redirect()->route('client-projects.index')->with(['success' => 'Project Deleted Successfully']);
        }else{
            return redirect()->route('client-projects.index')->with(['error' => 'There is error happen']);
        }
    }
}
