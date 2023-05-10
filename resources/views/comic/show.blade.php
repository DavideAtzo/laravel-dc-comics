@extends('layout.app')

@section('page.title')
    <div class="container">
        <div class="row">
            <h1>{{ $comics->title }}</h1>
        </div>
    </div>
@endsection

@section('page.main')
    <div class="container">
        <div class="row">
            <h5>Description:</h5>
            <p class="card-text">{{ $comics->description }}</p>
            <h5>Type:</h5>
            <p>{{ $comics->type }}</p>
            <h5>sale_date</h5>
            <p>{{ $comics->sale_date }}</p>
        </div>
        <button><a href="{{ route('comics.index') }}">torna alla lista</a></button>
    </div>
@endsection
