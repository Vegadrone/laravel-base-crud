@extends('layouts.main')

@section('title', 'Comic')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
                <div class="card col-12" style="width: 18rem;">
                    <img src="{{ $comic->thumbnail }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">{{ $comic->title }}</h4>
                        <p class="card-text">{{$comic->description}}.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h5 class="fw-bold">Series:</h5>{{ $comic->series}}</li>
                        <li class="list-group-item"><h5 class="fw-bold">Type:</h5>{{ $comic->type}}</li>
                        <li class="list-group-item"><h5 class="fw-bold">Release Date:</h5>{{ $comic->date}}</li>
                        <li class="list-group-item"><h5 class="fw-bold">Price:</h5>{{ $comic->price}} $</li>
                    </ul>
                </div>
        </div>
    </div>
@endsection
