@extends('layouts.base')

@section('content')
    <form action="{{ route('UpdateEvent', $event->id) }}" class="form-control mt-10" method="POST">
        @csrf

            <div class="form-group">
              <label for="name">Naam</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="naam" value="{{$event->name}}">
            </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="event_start">Event start</label>
                <input type="date" name="event_start" class="form-control" value="{{ date('Y-m-d', strtotime($event->event_start)) }}">
            </div>
            <div class="form-group col-md-6">
                <label for="event_end">Event eindigt</label>
                <input type="date" name="event_end" class="form-control" value="{{ date('Y-m-d', strtotime($event->event_end)) }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="max_tickets">Max tickets</label>
                <input type="number" name="max_tickets" class="form-control" value="{{ $event->max_tickets }}">
            </div>
            <div class="form-group col-md-6">
                <label for="location">Locatie</label>
                <input type="text" name="location" class="form-control" placeholder="Stad | straat | nummer" value="{{ $event->location }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="price">prijs</label>
                <input type="number" name="price" class="form-control " placeholder="prijs" step=".01" value="{{ $event->price }}">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="description">Beschrijving</label>
            <textarea name="description" id="description" cols="90" rows="6" >{{ $event->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-dark bg-dark">Event opslaan</button>
        
    </form>
@endsection