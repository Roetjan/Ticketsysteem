<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Eventscontroller extends Controller
{
    public function showAddEvent() {
        return view('admin/add-event');
    }

    public function viewEvent(){
        $events = Event::all();

        return view('event.events',[
            "events" => $events
        ]);
    }

    public function deleteEvent($eventId){
        $eventDelete = Event::findOrFail($eventId);
        $eventDelete->delete();
        return redirect()->route('viewEvent');
    }

    public function addEvent(Request $request) {
        $newEvent = new Event();
        $newEvent->name = $request->input('name');
        $newEvent->event_start = $request->input('event_start');
        $newEvent->event_end = $request->input('event_end');
        $newEvent->max_tickets = $request->input('max_tickets');
        $newEvent->location = $request->input('location');
        $newEvent->price = $request->input('price');
        $newEvent->description = $request->input('description');


        Storage::makeDirectory('public/img');
        $src = Storage::putfile('public/img', $request->file('picture'));
        $src = str_replace('public', 'storage', $src);
        $newEvent->picture = $src;
        $newEvent->save();

        return view('/admin/add-event');
    }
}
