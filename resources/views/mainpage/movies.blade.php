@extends('app')

@section('titulo', 'Filmes em Cartaz')

@section('conteudo')
  <div class="row justify-content-center">
      <h1 class="text-center fs-1">Filmes em cartaz</h1>
      <div class="d-flex col-4 ">
          <i class="bi bi-search me-3 "></i>
          <input class="form-control" id="input-text" type="text" placeholder="Buscar">
      </div>
  </div>
  <div class="row">
    <div class="col-2" id="genre-filter">
      <h6 class="text-center">Filtre os filmes por genero</h6>
      <ul class="list-unstyled">
          @foreach ($genres as $val)
              <li>
                  <a class="btn btn-light w-100 m-1"href="{{ route('movies-per-genres', $val->id) }}">{{ $val->name }}</a>
              </li>
          @endforeach
      </ul>
    </div>
    <div class="col-sm-10" id="myGrid">
          @foreach ($movies as $val)
                  <a href="{{ route('movie-details', $val->id) }}"><img src="{{ $val->poster }}" class="img-fluid m-4 rounded" style="width: 20%"></a>
                  <p hidden>{{ $val->tags }}</p>
                  @foreach ($genres as $val2)
                      @if ($val->genre_id == $val2->id)
                          <p hidden>{{ $val->name }}</p>
                      @endif
                  @endforeach
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
