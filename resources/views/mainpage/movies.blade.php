@extends('app')

@section('titulo', 'Filmes em Cartaz')

@section('conteudo')
<div style="text-align: center">
  <h1>Filmes em cartaz</h1>
  <br>
  <div class="container">
    <input class="form-control" id="input-text" type="text" placeholder="Buscar">
    <br>
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
    <div class="container" id="myGrid">
    <div class="row">
        @foreach($movies as $val)
        <div class="col-sm-3" >
            <a href="{{ route('movie-details', $val->id)}}"><img src="{{$val->poster }}" style="border-radius: 5px; margin-bottom: 20px; width: 60%; "></a>
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