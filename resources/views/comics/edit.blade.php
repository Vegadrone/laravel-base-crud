@extends('layouts.main')

@section('title', 'Edit a Comic')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PATCH')
                @include('comics.partials.form')
            </form>
        </div>
    </div>
@endsection
