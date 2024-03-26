@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Laravel DC Comics</h1>
      <div class="card-container d-flex justify-content-between flex-wrap gap-5 mb-5 mt-5">
        @forelse($comics as $comic)
        <div class="card" style="width: 18rem;">
          <img src="{{$comic['thumb']}}" class="card-img-top" alt="comic thumb">
          <div class="card-body">
            <h5 class="card-title">{{$comic['title']}}</h5>
            <p class="card-text">{{$comic['description']}}</p>
            <a href="#" class="btn btn-primary">Open details</a>
          </div>
        </div>
        @empty
        <span>trovato nulla</span>
        @endforelse
      </div>
    </div>
  </section>
@endsection