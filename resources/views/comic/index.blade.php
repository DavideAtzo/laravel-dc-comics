@extends('layout.app')

@section('page.title')
    <div class="container">
        <div class="row">
            <h1>Elenco Comics</h1>
        </div>
    </div>
@endsection

@section('page.main')
    <div class="container my-4">
        <div class="row">
            <button><a href="{{ route('comics.create') }}">crea il tuo comic</a></button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="card col-xl-3 text-center">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <div class="card-body my-2">
                        <h3>{{ $comic['title'] }}</h3>
                        <p>{{ $comic->series }}</p>
                        <p>{{ $comic->price }}</p>
                    </div>
                    <button><a href="{{ route('comics.show', $comic->id) }}">dettaglio prodotto</a></button>
                    <button><a href="{{ route('comics.edit', $comic->id) }}">Modifica</a></button>
                </div>
            @endforeach
        </div>
    </div>
@endsection
