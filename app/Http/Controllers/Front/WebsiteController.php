<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $getProject = Project::paginate(15);
        return view('front.index', compact('getProject'));
    }
}
