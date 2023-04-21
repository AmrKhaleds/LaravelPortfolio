<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerSupportRequest;
use App\Models\Client;
use App\Models\CustomerSupport;
use Illuminate\Http\Request;

class CustomerSupportController extends Controller
{
    /**
     * Return index with client Messages
     */
    public function index(){
        $clientMessages = CustomerSupport::where('client_email', auth('clients')->user()->email)
                                        ->latest('created_at')
                                        ->get();
        // dd($clientMessages);
        return view('client.customer-support.index', compact('clientMessages'));
    }
    /**
     * Send Message to admins
     */
    public function store(CustomerSupportRequest $request){
        $message = CustomerSupport::create([
            'client_name' => auth('clients')->user()->name,
            'client_email' => auth('clients')->user()->email,
            'client_phone' => auth('clients')->user()->phone,
            'subject' => $request->input('subject'),
            'msg' => $request->input('msg')
        ]);
        if($message){
            return redirect()->route('client.support')->with(['success' => 'Message Sent successfully']);
        }else{
            return redirect()->route('client.support')->with(['error' => 'Error When sending message']);
        }
    }

    public function show(string $id){
        $message = CustomerSupport::find($id);
        return view('client.customer-support.show', compact('message'));
    }
    /**
     * Remove Message
     */
    public function destroy(string $id){
        $message = CustomerSupport::find($id);
        // dd($message);
        if($message->delete()){
            return redirect()->route('client.support')->with(['success' => 'Message Deleted successfully']);
        }else{
            return redirect()->route('client.support')->with(['error' => 'Error When deleteing message']);
        }
    }
}
