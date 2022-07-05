@extends('layouts.app')

@section('title')
    New Comic
@endsection

@section('main-content')
    <div class="form">
        <h1>Aggiungi un fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="inputTitle">Titolo</label>
                <input type="text" class="form-control" id="inputTitle" aria-describedby="emailHelp" placeholder="Titolo"
                    name="title">
            </div>
            <div class="form-group">
                <label for="inputDescription">Descrizione</label>
                <input type="text" class="form-control" id="inputDescription" placeholder="Descrizione"
                    name="description">
            </div>
            <div class="form-group">
                <label for="inputThumb">Immagine</label>
                <input type="text" class="form-control" id="inputThumb" placeholder="Immagine" name="thumb">
            </div>
            <div class="form-group">
                <label for="inputPrice">Prezzo</label>
                <input type="text" class="form-control" id="inputPrice" placeholder="Prezzo" name="price">
            </div>
            <div class="form-group">
                <label for="inputSeries">Serie</label>
                <input type="text" class="form-control" id="inputSeries" placeholder="Serie" name="series">
            </div>
            <div class="form-group">
                <label for="inputSaleDate">Data di uscita</label>
                <input type="text" class="form-control" id="inputSaleDate" placeholder="Data di uscita" name="sale_date">
            </div>
            <div class="form-group">
                <label for="inputType">Tipo</label>
                <input type="text" class="form-control" id="inputType" placeholder="Tipo" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
