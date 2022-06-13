@extends('app')

@section('titulo', 'Filmes em Cartaz')

@section('conteudo')
<div style="text-align: center">
  <h1>Filmes em cartaz</h1>
  <p>Bem vindo! Está é a tela que mostra todos os filmes em cartaz</p>
</div>

<div>
  <div style=" float: left">
  <h6><small>Filtre os filmes por genero</small></h6>
    <ul class="list-group list-group-flush">
      @foreach($genres as $val)
      <a class="btn btn-light" style="margin-bottom: 5px" href="{{ route('movies-per-genres', $val->id)}}">{{ $val->name }}</a>
      @endforeach
    </ul>
  </div>

  <div>

    <div class="container" style="margin-top: 25px">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        @foreach($movies as $val)
        <div class="container mx-auto px-6 py-16 flex">
          <div>
            <a href="{{ route('movie-details', $val->id)}}"><img src="{{ $val->poster }}" style="border-radius: 5px; margin-bottom: 20px; width: 60%"></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection