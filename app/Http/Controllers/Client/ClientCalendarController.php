<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ClientCalendar;
use Illuminate\Http\Request;

class ClientCalendarController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $events = ClientCalendar::where('client_id', auth('clients')->user()->id)
                ->whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end',   '<=', $request->end)
                ->get(['id', 'event_name', 'event_start', 'event_end']);
            $data = array();
            foreach ($events as $event) {
                $data[] = array(
                    'id' => $event->id,
                    'title' => $event->event_name,
                    'start' => $event->event_start,
                    'end' => $event->event_end
                );
            }
            return response()->json($data);
        }
        // dd(response()->json($data));
        return view('client.calendar.index');
    }

    public function calendarEvents(Request $request)
    {

        switch ($request->type) {
            case 'create':
                $event = ClientCalendar::create([
                    'client_id' => auth('clients')->user()->id,
                    'event_name' => $request->event_name,
                    'event_start' => $request->event_start,
                    'event_end' => $request->event_end,
                ]);

                return response()->json($event);
                break;

            case 'edit':
                $event = ClientCalendar::find($request->id);
                $event->update([
                    'event_name' => $event->event_name,
                    'event_start' => $request->start,
                    'event_end' => $request->end,
                ]);
                return response()->json($request);
                break;

            case 'delete':
                $event = ClientCalendar::find($request->id)->delete();

                return response()->json($event);
                break;

            default:
                # ...
                break;
        }
    }
}
