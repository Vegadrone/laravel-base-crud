@extends('layouts.main')

@section('title', 'Create a new Comic')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                {{-- $table->string('title', 30);
            $table->text('description');
            $table->text('thumbnail');
            $table->smallInteger('price');
            $table->string('series', 50);
            $table->date('date');
            $table->string('type',20); --}}
                <div class="mb-3">
                    <label for="insert-title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="insert-title"
                        placeholder="Inserici il titolo del fumetto">
                </div>
                <div class="mb-3">
                    <label for="insert-thumbnail" class="form-label">Thumbnail</label>
                    <input type="text" name="thumbnail" class="form-control" id="insert-title"
                        placeholder="Inserici la cover del fumetto">
                </div>
                <div class="mb-3">
                    <label for="insert-series" class="form-label">Series</label>
                    <input type="text" name="title" class="form-control" id="insert-title"
                        placeholder="Inserici la serie di cui fa parte il fumetto">
                </div>
                <div class="mb-3">
                    <label for="insert-series" class="form-label">Date of release</label>
                    <input type="date" name="title" class="form-control" id="insert-title">
                </div>
                <div class="mb-3">
                    <label for="insert-type" class="form-label">Type</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Tipologia di fumetto</option>
                        @foreach ($comics as $comic )
                           <option name="type" id="type-selection">{{ $comic->type }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>
@endsection
