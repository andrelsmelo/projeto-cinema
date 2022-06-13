@extends('app')

@section('titulo', 'Genêro')

@section('conteudo')
<div style="text-align: center; margin-top: 30px; margin-bottom: 30px">
<h3>Todos os filmes do genêro {{$genre->name}}</h3>
</div>

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
  @foreach($moviesPerGenre as $val)
    <div class="container mx-auto px-6 py-16 flex">
        <div>
        <a href="{{ route('movie-details', $val->id)}}"><img src="{{ $val->poster }}" style="border-radius: 5px; margin-bottom: 20px; width: 90%"></a>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection