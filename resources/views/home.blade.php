{{-- LA MIA HOME E' LA PAGINA COMICS, ho prefeiro lasciarla home, perchè è quella sulla quale ci lavoro maggiormente --}}

<!-- posso cancellare tutto il codice html, perchè con la direttiva extends tengo SOLO la parte che cambia -->
@extends('layout.app')

<!-- questo sarà il contenuto del segnaposto -->
@section('main-content')

<h2>
  CURRENT SERIES
</h2> 

<section class="arraycard">
  {{-- veridico che stampa in pagina il mio arrey --}}
  {{-- @dump($series) --}}
  
  <!-- stampo tramite foreach gli elementi che mi servono dell'arrey, in questo caso l'immagine (thumb) ed il nome della serie -->
  <div class="row p-3">
    @foreach($series as $serie)
    <div class="col-2">
      <img src="{{ $serie['thumb'] }}" alt="" class="img-fluid imgarray">
      <h5>{{ $serie['series'] }}</h5>
    </div>
    @endforeach
  </div>
</section>

@endsection