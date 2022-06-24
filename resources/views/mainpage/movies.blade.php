@extends('app')

@section('titulo', 'Filmes em Cartaz')

@section('conteudo')
    <div class="row justify-content-center">
        <h1 class="text-center fs-1">Filmes em cartaz hoje</h1>
        <div class="d-flex col-4">
            <i class="bi bi-search me-3 "></i>
            <input class="form-control text-center" id="input-text" type="text" placeholder="Buscar">
        </div>
    </div>
    <div class="row">
        <div class="col-2" id="genre-filter">
            <h6 class="text-center">Filtre os filmes por genero</h6>
            <ul class="list-unstyled" id="filtro">
                @foreach ($genres as $genre)
                    <li value="{{ $genre->name }}">
                        <a class="btn btn-light w-100 m-1">{{ $genre->name }}</a>
                    </li>
                @endforeach
                <li value="">
                    <a class="btn btn-secondary mt-3 w-100 mx-auto">Limpar Filtro</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-10" id="myGrid">
            <div class="col" style="display: inline">
                @foreach ($moviesShown as $movieShown)
                    <a href="{{ route('movie-details', $movieShown->movie_id) }}"><img
                            src="{{ $movieShown->movie->poster }}" class="img-fluid m-2 rounded" style="width: 20%"></a>
                    <p hidden>{{ $movieShown->movie->tags }}</p>
                    <span hidden>{{ $movieShown->movie->name }}</span>
                @endforeach
            </div>
        </div>
    </div>
@endsection
