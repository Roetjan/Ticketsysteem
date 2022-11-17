@extends('layouts.base')

@section('content')
   <a href="{{ route('addEvent') }}">Add event</a>
    <table class="table">
        <tr>
            <th>user_id</th>
            <th>qr_hash</th>
            <th>event_id</th>
            <th>gemaakt op</th>
        </tr>
        <tr>
            
            @foreach ($allTickets as $ticket)
            @dd($allTickets)
                <td>{{ $ticket->Users()->name }}</td>
                <td>{{ $ticket->Users()->qr_hash }}</td>
                <td>{{ }}</td>
                
            @endforeach
        </tr>
    </table>
@endsection