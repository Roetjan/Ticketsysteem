<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function viewTicket(){
        // $tickets = User::where('id', Auth::id())->get();
        $allTickets = Ticket::where('user_id', Auth::id());
        
        return view('tickets.list', [
            "allTickets" => $allTickets
        ]);
    }
    
    public function createTicket(Request $request){
        $newTicket = new Ticket();
        $newTicket->owner = $request->input('owner');
        $newTicket->qr = Str::random(50);
        $newTicket->event = $request->input('event');
        $newTicket->description = $request->input('desc');
        $newTicket->save();
        
        return redirect()->route('homepage');
    }
}
