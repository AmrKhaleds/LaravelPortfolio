<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientProfileRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentClientId = auth('clients')->user()->id;
        $client = Client::find($currentClientId);
        return view('client.profile.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
     * Uploads an image file and stores it in the storage/app/public/images directory.
     *
     * @param  Illuminate\Http\Request  $request
     * @param string $field
     * @return string  The path to the stored image file
     */
    private function uploadImage(Request $request, $field)
    {
        $image = $request->file($field);
        if(!empty($image)){
            // Get the uploaded image
            // Generate a unique filename for the image
            $filename = time() . '_' . $image->getClientOriginalName();
            // Store the image in the storage/app/public/images directory
            $image->storeAs('public/clients/avatars/', $filename);
            // Return the path to the stored image
            return $filename;
        }else{
            return auth('clients')->user()->avatar;
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(ClientProfileRequest $request, string $id)
    {
        $requestData = $request->except(['_token', '_method','password_confirmation', 'old-password', 'username', 'email']);
        $oldPassword = $request->input('old-password');
        if(Hash::check($oldPassword, auth('clients')->user()->password)){
            $requestData['password'] = Hash::make($requestData['password']);
            $requestData['avatar'] = $this->uploadImage($request, 'avatar');
            
            $updateData = Client::where('id', $id)
                                ->update($requestData);
            if($updateData){
                return redirect()->route('client.my-profile.index')->with(['success' => 'Information Updated succssfully']);
            }
        }else{
            // WithErrors function return errors below input fields 
            // with functtion can't return errors below input fields
            return redirect()->route('client.my-profile.index')->withErrors(['old-password' => 'invalid old Password']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
