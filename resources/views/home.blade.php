
@extends('layouts/main')
@section('title','Home')


@section('content')
    
<div class='container'>
    <div class="row">
        
        @foreach ($movies as $movie )
        <div class="card m-2 border-dark" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center my-3">{{$movie->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted"><strong>Titolo originale:</strong> {{$movie->original_title}}</h6>
                <h6 class="card-subtitle mb-2 text-muted"><strong>Nazionalità:</strong> {{$movie->nationality}}</h6>
                <h6 class="card-subtitle mb-2 text-muted"><strong>Data di uscita:</strong> {{$movie->date}}</h6>
                <h6 class="card-subtitle mb-2 text-muted"><strong>Voto:</strong> {{$movie->vote}}</h6>
            </div>
        </div>
        
        @endforeach
    </div>
</div>

@endsection