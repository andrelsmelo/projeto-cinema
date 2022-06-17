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
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $movie->trailer }}" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <ul class="list-unstyled align-middle mt-5">
                <li>
                    <strong>Gênero: </strong>
                    {{ $genre->name }}
                </li>
                <li>
                    <strong>Classificação: </strong>
                    {{ $pegi->name }}
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
                @foreach ($moviesShown as $val)
                    @if ($val->movies_id == $movie->id && $val->session_date < date('Y-m-d'))
                        <h4>Ultimas Sessões</h4>
                        <li>
                            {{ $val->session_date }},
                            @foreach ($sessions as $val2)
                                @if ($val->sessions_id == $val2->id)
                                    {{ $val2->session_hour }},
                                @endif
                            @endforeach
                            @foreach ($rooms as $val2)
                                @if ($val->rooms_id == $val2->id)
                                    {{ $val2->name }}
                                @endif
                            @endforeach
                        </li>
                    @endif
                @endforeach
                @foreach ($moviesShown as $val)
                    @if ($moviesShown->movies_id = $movie->id && $val->session_date >= date('Y-m-d'))
                        <h4>Proximas Sessões</h4>
                        <li>
                            {{ $val->session_date }},
                            @foreach ($sessions as $val2)
                                @if ($val->sessions_id == $val2->id)
                                    {{ $val2->session_hour }},
                                @endif
                            @endforeach
                            @foreach ($rooms as $val2)
                                @if ($val->rooms_id == $val2->id)
                                    {{ $val2->name }}
                                @endif
                            @endforeach
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <h3>Sinopse</h3>
        <p>{{ $movie->sinopse }}</p>
    </div>
@endsection
