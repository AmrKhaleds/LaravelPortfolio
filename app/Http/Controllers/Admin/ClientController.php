<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientCalendar;
use Exception;
use GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $requestData = $request->except(['_token', 'password_confirmation']);
        $requestData['password'] = Hash::make($requestData['password']);
        try{
            Client::create($requestData);
            return redirect()->route('clients.index')->with(['success' => 'Client Created Successfully.']);
        }catch (Exception $e){
            return redirect()->route('clients.create')->with(['error' => 'A problem occurred during creating client account']);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $username, GeneralSettings $settings, Request $request)
    {
        $client = Client::where('username', $username)->first();
        // $clientCalendar = ClientCalendar::where('client_id', $client->id)
        // ->whereDate('event_start', '>=', $request->start)
        // ->whereDate('event_end',   '<=', $request->end)
        // ->get(['id', 'event_name', 'event_start', 'event_end']);
        $clientCalendar = ClientCalendar::where('client_id', $client->id)->get(['id', 'event_name', 'event_start', 'event_end']);

        return view('admin.clients.show',[
            'dark_logo' => $settings->black_logo
        ], compact('client', 'clientCalendar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $username)
    {
        $client = Client::where('username', $username)->first();
        $projectType = implode(',', $client->project_type);
        return view('admin.clients.edit', compact('client', 'projectType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $username)
    {
        $requestData = $request->except(['_token', '_method', 'confirm-password']);
        $client = Client::where('username', $username);
        if(!empty($requestData['password'])){
            $requestData['password'] = Hash::make($requestData['password']);
        }else{
            $requestData = Arr::except($requestData, array('password'));
        }
        try{
            $client->update($requestData);
            return redirect()->route('clients.index')->with(['success' => 'Client Updated Successfully.']);
        }catch(Exception $e){
            return redirect()->route('clients.index')->with(['error' => 'A problem occurred during Editing client account']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $username)
    {
        $client = Client::find($username);
        $softDelete = $client->delete();
        if($softDelete){
            return redirect()->route('clients.index')->with(['success' => 'Client Successfully Delete']);
        }else{
            return redirect()->route('clients.index')->with(['error' => 'error occuerd when delete client']);
        }
    }
    /**
     * Full Calendar Events action
     * 
     */
    public function calendarEvents(Request $request, string $id)
    {
        switch ($request->type) {
            case 'create':
                $event = ClientCalendar::create([
                    'client_id' => $id,
                    'event_name' => $request->event_name,
                    'event_start' => $request->event_start,
                    'event_end' => $request->event_end,
                ]);
                return response()->json($event);
                break;

            case 'edit':
                $event = ClientCalendar::find($request->id);
                $event->update([
                    'client_id' => $id,
                    'event_name' => $event->event_name,
                    'event_start' => $request->start,
                    'event_end' => $request->end,
                ]);
                return response()->json($event);
                break;

            case 'delete':
                $event = ClientCalendar::find($request->id)->delete();
                return response()->json($event);
                break;
            default:
                break;

        }
    }
    /**
     * Return Only Trashed Client
     */
    public function onlyTrashed(){
        $trashedClient = Client::onlyTrashed()
            ->orderBy('deleted_at', 'DESC')
            ->get();
        return view('admin.clients.trashedClient', compact('trashedClient'));
    }
    public function restoreTrashed(string $username){
        $client = Client::onlyTrashed()
            ->where('username', $username)->restore();
        if($client){
            return redirect()->route('client.trashed')->with(['success' => 'Client Restore Successfully']);
        }
    }

}
