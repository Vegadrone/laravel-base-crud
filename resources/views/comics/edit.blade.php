@extends('layouts.main')

@section('title', 'Create a new Comic')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">

                @csrf
                @method('PATCH')

                {{-- messaggio generico per tutti gli errori --}}
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                <div class="mb-3">
                    <label for="insert-title" class="form-label">Title</label>
                    <input  value="{{ old('title', $comic->title) }}" type="text" value="{{ $comic->title }}" name="title" class="form-control" id="insert-title"
                        placeholder="Inserici il titolo del fumetto" required>
                </div>
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="insert-thumbnail" class="form-label">Thumbnail</label>
                    <input value="{{ old('thumbnail', $comic->thumbnail) }}" type="text" value="{{ $comic->thumbnail }}" name="thumbnail" class="form-control"
                        id="insert-thumbnail" placeholder="Inserici la cover del fumetto" required>
                </div>
                @error('thumbnail')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="insert-series" class="form-label">Series</label>
                    <input value="{{ old('series', $comic->series) }}" type="text" value="{{ $comic->series }}" name="series" class="form-control"
                        id="insert-series" placeholder="Inserici la serie di cui fa parte il fumetto" required>
                </div>
                @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="insert-series" class="form-label">Date of release</label>
                    <input value="{{ old('date', $comic->date) }}" type="date" value="{{ $comic->date }}" name="date" class="form-control" id="insert-date"
                        required>
                </div>
                @error('date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="insert-price" class="form-label">Price</label>
                    <input type="text" value="{{ old('price', $comic->price) }}" name="price" class="form-control" id="insert-price"
                        required>
                </div>
                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="insert-type" class="form-label">Type</label>
                    <select name="type" class="form-select" id="insert-type" aria-label="Default select example">
                        @foreach ($types as $type)
                            <option id="insert-type" value="{{ $type->type_name }}"
                                {{ $type->type_name == old('type', $comic->type) ? 'selected' : '' }}>{{ $type->type_name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mt-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="5"
                        placeholder="Scrivi una breve descrizione delle trama del fumetto"required>
                        {{ old('description', $comic->description) }}
                    </textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit" class="mt-3 btn btn-lg btn-success text-center fw-bold">Inserisci le
                    modifiche</button>
            </form>
        </div>
    </div>
@endsection
