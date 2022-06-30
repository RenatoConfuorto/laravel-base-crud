@extends('layouts.app')

@section('title')
    Comics
@endsection

@section('main-content')
<ul>
  @foreach ($comics_list as $comic)
      <li>
        <h2>{{ $comic['title'] }}</h2>
        <h3>{{ $comic['series'] }}</h3>
        <p>{{ $comic['description'] }}</p>
        <ul>
          <li>Prezzo: {{ $comic['price'] }}</li>
          <li>Data di pubblicazione: {{ $comic['sale_date'] }}</li>
        </ul>
      </li>
  @endforeach
</ul>
@endsection
{{-- {{ dd($comics_list) }} --}}
