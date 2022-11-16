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
            {{-- @dd($allTickets) --}}
            @foreach ($allTickets as $ticket)
                <td>{{ $ticket->users->name }}</td>
                <td>{{ $ticket->users->qr_hash }}</td>
                <td>{{ }}</td>
            @endforeach
        </tr>
    </table>
@endsection