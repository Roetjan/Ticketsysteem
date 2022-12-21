@extends('layouts.base')

@section('content')
    <form action="{{ route('addEvent') }}" class="form-control mt-10" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="form-group">
              <label for="name">Naam</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="naam">
            </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="event_start">Event start</label>
                <input type="date" name="event_start" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="event_end">Event eindigt</label>
                <input type="date" name="event_end" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="max_tickets">Max tickets</label>
                <input type="number" name="max_tickets" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="location">Locatie</label>
                <input type="text" name="location" class="form-control" placeholder="Stad | straat | nummer">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="price">prijs</label>
                <input type="number" name="price" class="form-control " placeholder="prijs" step=".01">
            </div>

            <div class="form-group col-md-6">
                <label for="picture">Afbeelding</label>
                <input type="file" class="form-control" id="picture" name="picture" accept="image/png, image/gif, image/jpeg">
              </div>
        </div>
        <div class="form-group col-md-6">
            <label for="description">Beschrijving</label>
            <textarea name="description" id="description" cols="90" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-dark bg-dark">Maak Event</button>
        
    </form>
@endsection