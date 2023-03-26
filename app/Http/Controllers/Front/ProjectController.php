<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showProject(string $slug){
        $getProject = Project::where('slug', $slug)->firstOrFail();
        return view('front.projects.show', compact('getProject'));
    }
}
