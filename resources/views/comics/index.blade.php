@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table table-dark table-hover">
                    <thead>
                        <th>ID</th>
                        <th colspan="10">Title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale Date</th>
                        <th>Type</th>
                    </thead>
                    <tbody>
                        @forelse ($comics as $comic)
                            <tr>
                                <td>{{ $comic->id}}</td>
                                <td colspan="10">
                                    <a href="{{ route("comics.show", $comic) }}">{{ $comic->title }}</a>
                                </td>
                                <td>{{ $comic->description}}</td>
                                <td>{{ $comic->thumbnail }}</td>
                                <td>{{ $comic->price}} $</td>
                                <td>{{ $comic->series}}</td>
                                <td>{{ $comic->sale_date}}</td>
                                <td>{{ $comic->type}}</td>
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
