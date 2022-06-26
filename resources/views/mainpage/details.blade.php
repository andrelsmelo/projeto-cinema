@extends('app')

@section('titulo', 'Detalhes')

@section('conteudo')
    <div class="row justify-content-center text-center">
        <div class="col">
            <h1>{{ $movie->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <img src="{{ $movie->poster }}" class="img-fluid rounded">
        </div>
        <div class="col-4 d-flex flex-column m-auto">
            <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $movie->trailer }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <ul class="list-unstyled align-middle mt-5">
                <li>
                    <strong>Gênero: </strong>
                    {{ $movie->genre->name }}
                </li>
                <li>
                    <strong>Classificação: </strong>
                    {{ $movie->pegi->name }}
                </li>
                <li>
                    <strong>Duração: </strong>
                    {{ $movie->duration }}
                </li>
                <li>
                    <strong>Ano de lançamento: </strong>
                    {{ $movie->release }}
                </li>
            </ul>
        </div>
        <div class="col-5 text-center">
            <ul class="list-unstyled">
                <h4>Sessões</h4>
                @foreach ($movie->moviesShown as $movieSession)
                    <li>
                        {{ $movieSession->session_date }},
                        {{ $movieSession->room->name }},
                        {{ $movieSession->session->session_hour }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <h3>Sinopse</h3>
        <p>{{ $movie->sinopse }}</p>
    </div>
@endsection
