@extends("layouts.base")

@section('content')
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
        @endforeach
    </table>
</div>
@endsection