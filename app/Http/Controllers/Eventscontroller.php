<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class Eventscontroller extends Controller
{
    public function showAddEvent() {
        return view('admin/add-event');
    }

    public function addEvent(Request $request) {
        $newEvent = new Event();
        $newEvent->name = $request->input('name');
        $newEvent->picture = $request->input('picture');
        $newEvent->event_start = $request->input('event_start');
        $newEvent->event_end = $request->input('event_end');
        $newEvent->max_tickets = $request->input('max_tickets');
        $newEvent->location = $request->input('location');
        $newEvent->price = $request->input('price');
        $newEvent->description = $request->input('description');
        $newEvent->save();

        return view('/admin/event');
    }
}
