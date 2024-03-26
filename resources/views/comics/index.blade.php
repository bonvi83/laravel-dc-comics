@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Laravel DC Comics</h1>
      <a href="{{ route('comics.create') }}" role="button" class="btn btn-primary mt-4">Aggiungi nuovo Comic</a>

      <div class="card-container d-flex justify-content-between flex-wrap gap-5 mb-5 mt-5">
        @forelse($comics as $comic)
        <div class="card" style="width: 18rem;">
          <img src="{{$comic['thumb']}}" class="card-img-top" alt="comic thumb">
          <div class="card-body">
            <h5 class="card-title">{{$comic['title']}}</h5>
            <p class="card-text">{{$comic['description']}}</p>
            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Apri dettagli</a>
          </div>
        </div>
        @empty
        {{-- <span>trovato nulla</span> --}}
        @endforelse
      </div>
    </div>
  </section>
@endsection