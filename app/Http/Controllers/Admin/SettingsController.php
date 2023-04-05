<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use GeneralSettings;
use Illuminate\Http\Request;
use Spatie\LaravelSettings\SettingsRepository;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GeneralSettings $settings)
    {
        return view('admin.settings.index', [
            'site_name'         => $settings->site_name,
            'contact_email'     => $settings->contact_email,
            'white_logo'        => $settings->white_logo,
            'black_logo'        => $settings->black_logo,
            'copyright'         => $settings->copyright,
            'contact_phone'     => $settings->contact_phone,
            'newsletter'        => $settings->newsletter,
            'about'             => $settings->about,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $image->storeAs('public/images/logo/', $filename);
        // Return the path to the stored image
        return $filename;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingsRequest $request, GeneralSettings $settings)
    {
        $requestData = $request->except(['_token']);
        if(empty($request->file('white_logo'))){
            $requestData['white_logo'] = $settings->white_logo;
            // dd($requestData);
        }else{
            // Upload White Logo Image
            $requestData['white_logo'] = $this->uploadImage($request, 'white_logo');
        }

        if(empty($request->file('black_logo'))){
            $requestData['black_logo'] = $settings->black_logo;
        }else{
            // Upload black Logo Image
            $requestData['black_logo'] = $this->uploadImage($request, 'black_logo');
        }
        // Update Settings 
        $settings->site_name = $requestData['site_name'];
        $settings->white_logo = $requestData['white_logo'];
        $settings->black_logo = $requestData['black_logo'];
        $settings->about = $requestData['about'];
        $settings->contact_email = $requestData['contact_email'];
        $settings->contact_phone = $requestData['contact_phone'];
        $settings->copyright = $requestData['copyright'];
        $settings->newsletter = $requestData['newsletter'];
        // dd($settings);
        if($settings->save()){
            return redirect()->route('settings.index')->with(['success' => 'Settings Updated Successfuly.']);
        }else{
            return redirect()->route('settings.index')->with(['error' => 'There is Error!']);
        }
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
        //
    }
}
