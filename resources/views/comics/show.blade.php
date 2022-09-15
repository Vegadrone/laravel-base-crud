@extends('layouts.main')

@section('title', 'Comic')

@section('main-content')
    <div class="container p-5">
        <div class="row justify-content-center">
             @if (session('edited'))
                <div class="alert alert-success">
                    {{ session('edited') }} è stato modificato correttamente!
                </div>
            @endif
             @if (session('created'))
                <div class="alert alert-success">
                    {{ session('created') }} è stato creato correttamente!
                </div>
            @endif
            <div class="card col-12" style="width: 18rem;">
                <img src="{{ $comic->thumbnail }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title fw-bold">{{ $comic->title }}</h4>
                    <p class="card-text">{{ $comic->description }}.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h5 class="fw-bold">Series:</h5>{{ $comic->series }}
                    </li>
                    <li class="list-group-item">
                        <h5 class="fw-bold">Type:</h5>{{ $comic->type }}
                    </li>
                    <li class="list-group-item">
                        <h5 class="fw-bold">Release Date:</h5>{{ $comic->date }}
                    </li>
                    <li class="list-group-item">
                        <h5 class="fw-bold">Price:</h5>{{ $comic->price }} $
                    </li>
                </ul>
            </div>

            <div class="d-flex justify-content-center mt-4">

                <a href="{{ route('comics.edit', $comic->id) }}">
                    <button class="btn btn-sm btn-warning btn-lg fw-bold text-center p-3 fs-3 text-light mx-3">Edit</button>
                </a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="">
                        <button class="btn btn-sm btn-danger btn-lg fw-bold text-center p-3 fs-3 mx-3">Delete</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
