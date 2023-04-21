<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerSupport;
use Illuminate\Http\Request;

class CustomerSupportController extends Controller
{
    /**
     * Return list of Customer Messages
     */
    public function index(){
        $messages = CustomerSupport::latest()->get();
        return view('admin.customer-support.index', compact('messages'));
    }
    /**
     * Show client Message
     */
    public function show(string $id){
        $message = CustomerSupport::find($id);
        return view('admin.customer-support.show', compact('message'));
    }
    /**
     * Delete Message
     */
    public function destroy(string $id){
        $message = CustomerSupport::find($id);
        if($message->delete()){
            return redirect()->route('admin.customer-support.index')->with(['success' => 'Message Deleted Successfully']);
        }else{
            return redirect()->route('admin.customer-support.index')->with(['error' => 'There is error when Delete Message']);

        }
    }
}
