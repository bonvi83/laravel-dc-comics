@extends('layouts.app')

@section('title', "$comic->title details")

@section('main-content')
<section>
    <div class="container py-4">
        <h1> {{ $comic->title }} </h1>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla lista Comics </a>

        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-success">Modifica Comic</a>

        <form action="{{ route('comics.update', $comic) }}" method="POST" >
        @csrf
        @method('DELETE')
        <input type="submit" value="Elimina" class="btn btn-danger mt-3">
        </form>

    {{-- bottone per/con modale che non funziona --}}
    {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#comic-{{$comic->id}}">
        Elimina
    </button> --}}

        <div class="d-container d-flex justify-content-between align-items-start gap-5 mt-5">
            <img src="{{$comic->thumb}}" alt="comic thumb">
            <div class="info-container d-flex gap-1 flex-column">
                <span class="h4"><b>Description: </b></span>
                <p>{{$comic->description}}</p>
                <hr>
                <span class="h4"><b>Prezzo: </b><span class="fs-6">{{$comic->price}}</span></span>
                <br>
                <span class="h4"><b>Sale date: </b><span class="fs-6">{{$comic->sale_date}}</span></span>
                <br>
                <span class="h4"><b>Serie: </b><span class="fs-6">{{$comic->series}}</span></span>
                <br>
                <span class="h4"><b>Tipo: </b><span class="fs-6">{{$comic->type}}</span></span>
            </div>
        </div>

    </div>
</section>
@endsection


{{-- modale che non funziona --}}
{{-- @section('modal')
<div class="modal fade" id="comic-{{$comic->id}}" tabindex="-1" aria-labelledby="comic-{{$comic->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminare {{$comic->title}}?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                L'azione é irreversibile.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection --}}