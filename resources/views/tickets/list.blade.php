@extends('layouts.base')

@section('content')
   <a href="{{ route('addEvent') }}">Add event</a>
   <div class="container">
    {{-- <table class="table table-ordered">
        <thead>
            <tr>
                <th>naam</th>
                <th>qr_hash</th>
                <th>event_id</th>
                <th>gemaakt op</th>
            </tr>
        </thead>
        <tbody>

                @foreach ($allTickets as $ticket)
                <tr>

                    <td>{{ $ticket->user->name }}</td>
                    <td>{{ $ticket->user->qr_hash }}</td>
                    <td>{{ $ticket->user->event_id }}</td>
                </tr>

                @endforeach
        </tbody>
    </table> --}}
</div>
@endsection