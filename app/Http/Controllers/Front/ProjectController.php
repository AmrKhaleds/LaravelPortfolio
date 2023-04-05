<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use GeneralSettings;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Show Project Details
    public function showProject(string $slug, GeneralSettings $settings){
        $getProject = Project::where('slug', $slug)->firstOrFail();
        return view('front.projects.show', [
            'site_name'         => $settings->site_name,
            'contact_email'     => $settings->contact_email,
            'white_logo'        => $settings->white_logo,
            'black_logo'        => $settings->black_logo,
            'copyright'         => $settings->copyright,
            'contact_phone'     => $settings->contact_phone,
            'newsletter'        => $settings->newsletter,
            'about'             => $settings->about,
        ], compact('getProject'));
    }
}
