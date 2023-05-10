@extends('layout.app')

@section('page.title')
    <div class="container">
        <div class="row">
            <h1>Elenco Comics</h1>
        </div>
    </div>
@endsection

@section('page.main')
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
                </div>
            @endforeach
        </div>
    </div>
@endsection