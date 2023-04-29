<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\ClientProject;
use App\Models\ClientCalendar;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientProjectRequest;
use App\Actions\Admin\ClientProjectActions\CreateClientProjectAction;
use App\Actions\Admin\ClientProjectActions\UploadClientProjectPhotosAction;

class ClientProjectController extends Controller
{
    protected $clientProjectAction;
    protected $uploadClientProjectPhotosAction;

    public function __construct(
        CreateClientProjectAction $clientProjectAction, 
        UploadClientProjectPhotosAction $uploadClientProjectPhotosAction
    ){
        $this->clientProjectAction = $clientProjectAction;
        $this->uploadClientProjectPhotosAction = $uploadClientProjectPhotosAction;
    }
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
        // Create Project record
        $this->clientProjectAction->execute($request);
        // check if photos field input are exist and then loop throw photos then sore in database
        if ($request->hasFile('photo_name')) {
            $this->uploadClientProjectPhotosAction->execute($this->clientProjectAction, $request->file('photo_name'));
        }

        //     foreach ($request->file('photo_name') as $image) {
        //         $photoName = time() . '_' . Str::random(20);
        //         $photoWithOriginalExtention = $photoName . '.' . $image->getClientOriginalExtension();
        //         $storage_path = 'public/clients/photos/' . $clientName->username . '/' . $clientProject->project_name;
        //         $fullPath = public_path('storage/clients/photos/' . $clientName->username . '/' . $clientProject->project_name . '/thumbnail');
        //         // check if dir Exist 
        //         if (!File::exists($fullPath)) {
        //             File::makeDirectory($fullPath, 0777, true, true);
        //         }
        //         // convert photo extention
        //         $imgFile = Image::make($image->getRealPath());
        //         $imgFile->save($fullPath . '/' . $photoName . '.webp', null, 'webp');
                

        //         $image->storeAs($storage_path, $photoWithOriginalExtention);
        //         ClientProjectPhotos::create([
        //             'project_id' => $clientProject->id,
        //             'photo_name' => $photoWithOriginalExtention,
        //             'thumbnail' => $photoName . '.webp',
        //         ]);
        //     }
        // // check if videos field input are exist and then loop throw videos then sore in database
        // if ($request->hasFile('video_name')) {
        //     foreach ($request->file('video_name') as $video) {
        //         $videoName = date('Y-m-d') . '_' . $video->getClientOriginalName();
        //         $video->storeAs('public/clients/videos/' . $clientName->username . '/' . $clientProject->project_name, $videoName);
        //         ClientProjectVideos::create([
        //             'project_id' => $clientProject->id,
        //             'video_name' => $videoName
        //         ]);
        //     }
        // }
        return redirect()->route('client-projects.index')->with(['success' => 'Project Created Successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = ClientProject::where('id', $id)->first();
        $clientUsername = Client::find($project->client_id)->username;
        $projectPhotos = $project->client_project_photos;
        $projectVideos = $project->client_project_videos;
        $projectVideos = $project->client_project_videos;
        $photoDir = 'public/clients/photos/' . $clientUsername . '/';
        $clientDir = $project->client->username . '/' . $project->project_name;
        // dd($clientDir);

        return view('admin.client-projects.show', compact('projectPhotos', 'projectVideos', 'projectVideos', 'clientUsername', 'project', 'clientDir'));
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
        if ($clientCalendar) {
            $clientCalendar->delete();
        }
        if ($project->delete()) {
            return redirect()->route('client-projects.index')->with(['success' => 'Project Deleted Successfully']);
        } else {
            return redirect()->route('client-projects.index')->with(['error' => 'There is error happen']);
        }
    }
}
