@extends('layouts.main')

@section('title', 'Create a new Comic')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">

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

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                @include('comics.partials.form')
            </form>
        </div>
    </div>
@endsection
