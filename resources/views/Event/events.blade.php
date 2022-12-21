@extends("layouts.base")

@section('content')
@auth
<div class="container-fluid mt-10">
    <div class="Toptext  text-center">
        <p class="h1">Events Lijst</p>
    </div>
    
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
        @foreach ($events as $event)
        <tbody>
            
            <td>{{ $event->name }}</td> 
            <td>{{ $event->location }}</td>
            <td>{{ $event->created_at }}</td>
                <td>
                    <a href="{{ Route("deleteEvent", $event->id) }}">Delete</a>
                </td>
                <td>
                    <a href="{{ Route("UpdateEvent", $event->id) }}">Edit</a>
                </td>

        </tbody>
        @endforeach
    </table>
</div>
    @endauth

@guest
    <div class="cards container mt-10" style="width: 18rem">
        <div class="row">
        @foreach ($events as $event)
        
            <div class="card">
                <img src="{{asset($event->picture) }}" alt="event_picture" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <p class="card-text">{{ $event->description }}</p>
                    <a href="" class="btn btn-primary">Ticket kopen</a>
                </div>
            </div>
        
        @endforeach
        </div>
    </div>
@endguest
@endsection