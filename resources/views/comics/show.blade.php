@extends('layouts.app')

@section('title')
    Comic
@endsection

@section('main-content')
    <h1>{{ $comic['title'] }}</h1>
    <h3>Serie: {{ $comic['series'] }}</h3>
    <img src="{{ $comic['thumb'] }}" alt="">
    <p>{{ $comic['description'] }}</p>
    <p>Prezzo: ${{ $comic['price'] }}</p>
    <p>Data di rilascio: {{ $comic['sale_date'] }}</p>

@endsection