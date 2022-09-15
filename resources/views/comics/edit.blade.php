@extends('layouts.main')

@section('title', 'Create a new Comic')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="insert-title" class="form-label">Title</label>
                    <input type="text" value="{{ $comic->title }}" name="title" class="form-control" id="insert-title"
                        placeholder="Inserici il titolo del fumetto" required>
                </div>
                <div class="mb-3">
                    <label for="insert-thumbnail" class="form-label">Thumbnail</label>
                    <input type="text" value="{{ $comic->thumbnail}}" name="thumbnail" class="form-control" id="insert-thumbnail"
                        placeholder="Inserici la cover del fumetto" required>
                </div>
                <div class="mb-3">
                    <label for="insert-series" class="form-label">Series</label>
                    <input type="text" value="{{ $comic->series }}" name="series" class="form-control" id="insert-series"
                        placeholder="Inserici la serie di cui fa parte il fumetto" required>
                </div>
                <div class="mb-3">
                    <label for="insert-series" class="form-label">Date of release</label>
                    <input type="date" value="{{ $comic->date }}" name="date" class="form-control" id="insert-date" required>
                </div>
                <div class="mb-3">
                    <label for="insert-price" class="form-label">Price</label>
                    <input type="text" value="{{ $comic->price }}" name="price" class="form-control" id="insert-price" required>
                </div>
                <div class="mb-3">
                    <label for="insert-type" class="form-label">Type</label>
                     <input type="text" value="{{ $comic->type }}" name="type" class="form-control" id="insert-type" required>
                    {{-- <select class="form-select" aria-label="Default select example">
                        <option selected>Tipologia di fumetto</option>
                        @foreach ($comics as $comic)
                            <option value="type" name="type">{{ $comic->type}}</option>
                        @endforeach
                    </select> --}}
                </div>
                    <div class="mt-3">
                        <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Scrivi una breve descrizione delle trama del fumetto"required>
                        {{ $comic->description}}
                    </textarea>
                    </div>
                <button type="submit" class="mt-3 btn btn-lg btn-success text-center fw-bold">Inserisci le modifiche</button>
            </form>
        </div>
    </div>
@endsection
