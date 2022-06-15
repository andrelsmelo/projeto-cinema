@extends('app')

@section('titulo', 'Filmes em Cartaz')

@section('conteudo')
<h1>Filmes em cartaz</h1>
<div class="search-container">
  <div class="col-sm-6 my-3">
    <input class="form-control" id="input-text" type="text" placeholder=" &#128269; Buscar">
  </div>
</div>
<div class="genre-filter">
  <h6><small>Filtre os filmes por genero</small></h6>
  <ul style="list-style: none;">
    @foreach($genres as $val)
    <li>
      <a class="btn btn-light" href="{{ route('movies-per-genres', $val->id)}}">{{ $val->name }}</a>
    </li>
    @endforeach
  </ul>
</div>
<div class="grid-container" id="myGrid">
  <div class="row">
    @foreach($movies as $val)
    <div class="col-sm-3">
      <a href="{{ route('movie-details', $val->id)}}"><img src="{{$val->poster }}" class="all-movies"></a>
      <p hidden>{{$val->tags}}</p>
      @foreach($genres as $val2)
      @if($val->genre_id == $val2->id)
      <p hidden>{{$val->name}}</p>
      @endif
      @endforeach
    </div>
    @endforeach
  </div>
</div>
<script>
  $(document).ready(function() {
    $("#input-text").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myGrid div").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
@endsection