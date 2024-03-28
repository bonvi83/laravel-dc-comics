@extends('layouts.app')

@section('title', "Add comic")

@section('main-content')
<section>
    <div class="container py-4">
        <h1>Aggiungi nuovo Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <label for="title" class="form-label">Titolo: </label>
        <input type="text" class="form-control" id="title" name="title" />

        <label for="price" class="form-label">Prezzo ($): </label>
        <input type="text" class="form-control" id="price" name="price" />

        <label for="series" class="form-label">Serie: </label>
        <input type="text" class="form-control" id="series" name="series" />

        <label for="thumb" class="form-label">Thumb: </label>
        <input type="text" class="form-control" id="thumb" name="thumb" />

        <label for="type" class="form-label">Tipo: </label>
        <input type="text" class="form-control" id="type" name="type" />

        <label for="sale_date" class="form-label">Sale date: </label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" />

        <label for="description" class="form-label">Descrizione: </label>
        <textarea
            class="form-control"
            id="description"
            name="description"
            rows="4"
        ></textarea>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
    </div>
</section>
@endsection