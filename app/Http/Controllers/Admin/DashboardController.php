<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * @return view admin Dashboard
     */
    public function index(){
        return view('admin.dashboard');
    }

    public function store_token(Request $request){
        $admin_id = auth()->user()->id;
        $device_token = User::where('id', $admin_id)->update([
            'device_token' => $request->device_token
        ]);
        $status = $device_token ? true : false;

        return response()->json([
            'message' => 'Success',
            'status' => $status,
            'device_token' => $request->device_token
        ]);
        
    }
}
