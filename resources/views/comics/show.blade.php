@extends('layouts.app')

@section('title')
    Comic
@endsection

@section('main-content')
    <div class="comic-det">
        <h1 class="title">{{ $comic['title'] }}</h1>
        <h3 class="series">Serie: {{ $comic['series'] }}</h3>
        <img src="{{ $comic['thumb'] }}" alt="Comic Cover">
        <p class="description">{{ $comic['description'] }}</p>
        <div class="info">
            <p class="price">Prezzo: ${{ $comic['price'] }}</p>
            <p>Data di rilascio: {{ $comic['sale_date'] }}</p>
        </div>

        <form action="{{ route('comics.destroy', ['comic' => $comic['id']]) }}" method="POST">
            @csrf
            @method('DELETE')
        <button class="btn btn-danger">Elimina</button>
        </form>
    </div>
@endsection
