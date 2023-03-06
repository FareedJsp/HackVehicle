<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    public function index()
    {
        return view('calendar');
    }

    public function save(Request $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->start_time = $request->start;
        $event->end_time = $request->end;
        $event->description = $request->description;
        $event->save();

        return response()->json([
            'success' => true,
            'event_id' => $event->id
        ]);
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->start_time = $request->start;
        $event->end_time = $request->end;
        $event->save();

        return response()->json([
            'success' => true
        ]);
    }
}

