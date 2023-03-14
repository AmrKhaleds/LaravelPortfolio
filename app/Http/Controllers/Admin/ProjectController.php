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
     * Store a newly created resource in storage.
     */ 
    public function store(ProjectRequest $request)
    {
        $requestData = $request->except(['_token']);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);
        $requestData['image'] = $imageName;

        $brandLogo = $request->file('brand_logo');
        $brandName = time() . '.' . $brandLogo->getClientOriginalExtension();
        $image->storeAs('public/images', $brandName);
        $requestData['brand_logo'] = $brandName;

        Project::create($requestData);
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $requestData = $request->except(['_method', '_token']);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);
        $requestData['image'] = $imageName;

        $brandLogo = $request->file('brand_logo');
        $brandName = time() . '.' . $brandLogo->getClientOriginalExtension();
        $image->storeAs('public/images', $brandName);
        $requestData['brand_logo'] = $brandName;

        // dd($requestData);
        Project::where('id', $id)->update($requestData);
        return redirect()->route('project.index');
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
