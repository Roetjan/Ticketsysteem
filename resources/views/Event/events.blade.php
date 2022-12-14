@extends("layouts.base")

@section('content')
<div class="container-fluid mt-10">
    <div class="Toptext  text-center">
        <p class="h1">Events Lijst</p>
        <p class="font-weight-light">als je de Events niet goed ziet zet de tab op max</p>
    </div>
    
    
    {{-- <div class="row">
        @foreach ($events as $event)
            <div class="ticketBlock w-25 border border-primary rounded d-flex p-0">
                <div class="img-fluid w-25 test-left rounded">
                    <img src="{{ $event->picture }}" alt="Event_picture">
                </div>
                <div class="w-50">
                    <div class="EventName">
                        <p class="font-weight-bold">{{ $event->name }}</p> 
                    </div>
                    <div class="eventDate">
                        <p>{{ $event->event_start }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
    <table class="table">
        <thead>
            <th>Event naam</th>
            <th>Locatie</th>
            <th>Gemaakt op</th>
            @auth
                <th></th>
                <th></th>
            @endauth
            
        </thead>
        <tbody>
            @foreach ($events as $event)
            <td>{{ $event->name }}</td> 
            <td>{{ $event->location }}</td>
            <td>{{ $event->created_at }}</td>
            @auth
                <td>
                    <a href="{{ Route("deleteEvent", $event->id) }}">Delete</a>
                </td>
                <td>
                    <a href="{{ Route("editEvent", $event->id) }}">Edit</a>
                </td>
            @endauth
            @endforeach
        </tbody>
    </table>
</div>
@endsection