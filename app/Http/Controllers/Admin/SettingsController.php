<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

// use PSpell\Config;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:settings-list|settings-create|settings-edit|settings-delete', ['only' => ['frontSettings', 'dashboardSettings']]);
        // $this->middleware('permission:settings-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:settings-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:settings-delete', ['only' => ['destroy']]);
    }

    /**
     * Return User Website Settings
     */
    public function frontSettings(){
        return view('admin.settings.website');
    }

    /**
     * Return Dashboard Settings
     */
    public function dashboardSettings(){
        return view('admin.settings.dashboard');
    }

    /**
     * Front Settings Edit
     */
    public function editFrontSettings(Request $request){
        $data = $request->except('_token');
        Config::set('settings.site_name', $data['site_name']);
        // config('settings.site_name' , $data['site_name']);
        // dd($data['site_name']);
        return redirect()->back();
    }
}
