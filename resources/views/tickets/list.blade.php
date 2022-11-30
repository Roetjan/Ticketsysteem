@extends('layouts.base')

@section('content')
   {{-- <a href="{{ route('addEvent') }}">Add event</a> --}}
   <div class="container-fluid mt-10">
    <div class="row p-2">
        @foreach ($allTickets as $ticket)
            <div class="ticketBlock col-6 border border-primary rounded d-flex">
                <div class="img-fluid w-25">
                    <img src="https://picsum.photos/150/150" alt="Event_ticket">
                </div>
                <div class="text w-75">
                   <h4>{{ $ticket->user->name }}</h4> 
                    {{ $ticket->user->qr_hash }}
                    {{ $ticket->user->event_id }}
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection