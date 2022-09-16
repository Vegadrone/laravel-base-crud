@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                @if (session('delete'))
                    <div class="alert alert-warning">
                        {{ session('delete') }} è stato cancellato correttamente!
                    </div>
                @endif
                <table class="table table-secondary table-hover">
                    <thead class="table-success">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale Date</th>
                        <th>Type</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse ($comics as $comic)
                            <tr >
                                <td>{{ $comic->id}}</td>
                                <td>
                                    <a href="{{ route("comics.show", $comic) }}">{{ $comic->title }}</a>
                                </td>
                                <td>{{ $comic->description}}</td>
                                <td>{{ $comic->thumbnail }}</td>
                                <td>{{ $comic->price}} $</td>
                                <td>{{ $comic->series}}</td>
                                <td>{{ $comic->date}}</td>
                                <td>{{ $comic->type}}</td>
                                <td>
                                    <a href="{{ route('comics.edit', $comic->id) }}">
                                        <button class="btn btn-sm btn-warning text-light fw-bold">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="">
                                            <button class="btn btn-sm btn-danger fw-bold">Delete</button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr colspan=10>
                                <td>Non sono stati trovati fumetti da visualizzare</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
