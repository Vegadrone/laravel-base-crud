@extends('layouts.main')

@section('title', 'Create a new Comic')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            @endif

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="insert-title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="insert-title"
                        placeholder="Inserici il titolo del fumetto" required>
                </div>
                <div class="mb-3">
                    <label for="insert-thumbnail" class="form-label">Thumbnail</label>
                    <input type="text" name="thumbnail" class="form-control" id="insert-thumbnail"
                        placeholder="Inserici la cover del fumetto" required>
                </div>
                <div class="mb-3">
                    <label for="insert-series" class="form-label">Series</label>
                    <input type="text" name="series" class="form-control" id="insert-series"
                        placeholder="Inserici la serie di cui fa parte il fumetto" required>
                </div>
                <div class="mb-3">
                    <label for="insert-series" class="form-label">Date of release</label>
                    <input type="date" name="date" class="form-control" id="insert-date" required>
                </div>
                <div class="mb-3">
                    <label for="insert-price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="insert-price" required>
                </div>
                <div class="mb-3">
                    <label for="insert-type" class="form-label">Type</label>

                    <select name="type" class="form-select" id="insert-type" aria-label="Default select example">
                        @foreach ($types as $type)
                            <option id="insert-type" value="{{ $type->type_name }}">{{ $type->type_name }}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="mt-3">
                        <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Scrivi una breve descrizione delle trama del fumetto"required></textarea>
                    </div>
                <button type="submit" class="mt-3 btn btn-lg btn-success text-center fw-bold">Inserisci il fumetto nell'archivio</button>
            </form>
        </div>
    </div>
@endsection
