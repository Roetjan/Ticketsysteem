@extends('layouts.base')

@section('content')
    <form action="{{ route('add-event') }}" method="post">
    @csrf
        
    </form>
@endsection