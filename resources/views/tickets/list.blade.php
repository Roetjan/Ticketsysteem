@extends('layouts.base')

@section('content')
   {{-- <a href="{{ route('addEvent') }}">Add event</a> --}}
   <div class="container-fluid mt-10">
        <div class="row p-2">
            @foreach ($allTickets as $ticket)
                <div class="ticketBlock col-8 border border-primary rounded d-flex p-0">
                    <div class="img-fluid w-30 test-left rounded">
                        <img src="https://picsum.photos/200/200" alt="Event_ticket">
                    </div>
                    <div class="w-70">
                        <p class="h6">{{ $ticket->user->name }}</p> 
                            {{ $ticket->user->event_id }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection