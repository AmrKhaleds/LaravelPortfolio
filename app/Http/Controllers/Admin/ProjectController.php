<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:project-list|project-create|project-edit|project-delete', ['only' => ['index']]);
        $this->middleware('permission:project-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getProjects = Project::orderBy('id', 'DESC')->paginate(10);
        return view('admin.projects.index', compact('getProjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Uploads an image file and stores it in the storage/app/public/images directory.
     *
     * @param  Illuminate\Http\Request  $request
     * @param string $field
     * @return string  The path to the stored image file
     */
    private function uploadImage(Request $request, $field)
    {
        // Get the uploaded image
        $image = $request->file($field);

        // Generate a unique filename for the image
        $filename = time() . '_' . $image->getClientOriginalName();

        // Store the image in the storage/app/public/images directory
        $image->storeAs('public/images', $filename);

        // Return the path to the stored image
        return $filename;
    }
    /**
     * Store a newly created resource in storage.
     */ 
    public function store(ProjectRequest $request)
    {
        $requestData = $request->except(['_token']);
        // Create project Image
        $requestData['image'] = $this->uploadImage($request, 'image');
        // Create Brand Logo
        $requestData['brand_logo'] = $this->uploadImage($request, 'brand_logo');
        // dd($requestData);
        $createProject = Project::create($requestData);
        if($createProject){
            return redirect()->route('project.index')->with(['success' => 'Project Created Successfully']);
        }else{
            return redirect()->route('project.index')->with(['error' => 'An error occurred during creation']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return redirect(url('/project/' . $slug));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projectId = Project::find($id);
        return view('admin.projects.edit', compact('projectId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, string $id)
    {
        $project = Project::findOrFail($id);

        $requestData = $request->except(['_method', '_token']);
        if(empty($request->file('image'))){
            $requestData['image'] = $project->image;
            // dd($requestData);
        }else{
            // Update Project Image
            $requestData['image'] = $this->uploadImage($request, 'image');
        }
        
        if(empty($request->file('brand_logo'))){
            $requestData['brand_logo'] = $project->brand_logo;
        }else{
            // Update Project logo
            $requestData['brand_logo'] = $this->uploadImage($request, 'brand_logo');
        }
        // dd($requestData);
        $updateProject = Project::where('id', $id)->update($requestData);
        if($updateProject){
            return redirect()->route('project.index')->with(['success' => 'Project Updated Successfully']);
        }else{
            return redirect()->route('project.index')->with(['error' => 'An error occurred during updating']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projectId = Project::find($id);
        $projectId->delete();
        return redirect()->route('project.index');
    }
}
