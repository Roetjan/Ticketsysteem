@extends('layouts.base')

@section('content')
<div class="wrapper-fluid w-66 mx-auto">
    <div class="pt-5" id="Intro-wrapper">
        <div class="">
            <h1 class="h1 text-underline">contact Pagina</h1>
        </div>
    </div>
        <form action="{{ route('sendContact') }}" method="POST">
            @csrf
        <div class="form-group mt-4">
            <label for="inputName">Naam: </label>
            <input type="text" name="inputName" class="form-control w-25" id="inputName" placeholder="Enter Name">
        </div>
        <div class="form-group mt-3">
            <label for="inputMail">E-mail: </label>
            <input type="email" name="inputMail" class="form-control w-25" id="inputMail" placeholder="Enter e-mail">
        </div>
        <div class="form-group mt-3">
            <label for="Description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control w-50 border-dark"></textarea>
        </div>

        <div class="form-group mt-3">
            <input type="submit" value="Submit Form" class="btn btn-primary">
        </div>
    </form>
</div>


@endsection