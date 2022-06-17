@extends('app')

@section('titulo', 'Detalhes')

@section('conteudo')
<h1>{{$movie->name}}</h1>
<div class="details me-4">
    <div class="details-column-img">
        <img src="{{ $movie->poster }}" class="img-fluid w-25">
    </div>
    <div class="details-row ms-4">
        <div>
            <iframe width="560" height="315" src="{{ $movie->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="details-column-infos">
            <ul>
                <li>
                    <strong>Gênero: </strong>
                    {{$genre->name}}
                </li>
                <li>
                    <strong>Classificação: </strong>
                    {{$pegi->name}}
                </li>
                <li>
                    <strong>Duração: </strong>
                    {{ $movie->duration}}
                </li>
                <li>
                    <strong>Ano de lançamento: </strong>
                    {{ $movie->release}}
                </li>
            </ul>
        </div>
        <div class="details-column-sessions">
            <ul>
                @foreach($moviesShown as $val)
                @if($val->movies_id == $movie->id && $val->session_date < date('Y-m-d')) <h6>Ultimas Sessões</h6>
                    <li>
                        {{$val->session_date}},
                        @foreach($sessions as $val2)
                        @if($val->sessions_id == $val2->id)
                        {{$val2->session_hour}},
                        @endif
                        @endforeach
                        @foreach($rooms as $val2)
                        @if($val->rooms_id == $val2->id)
                        {{$val2->name}}
                        @endif
                        @endforeach
                    </li>
                    @endif
                    @endforeach
                    @foreach($moviesShown as $val)
                    @if($moviesShown->movies_id = $movie->id && $val->session_date >= date('Y-m-d'))
                    <h6>Proximas Sessões</h6>
                    <li>
                        {{$val->session_date}},
                        @foreach($sessions as $val2)
                        @if($val->sessions_id == $val2->id)
                        {{$val2->session_hour}},
                        @endif
                        @endforeach
                        @foreach($rooms as $val2)
                        @if($val->rooms_id == $val2->id)
                        {{$val2->name}}
                        @endif
                        @endforeach
                    </li>
                    @endif
                    @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="details-bottom">
        <h3>Sinopse</h3>
        <p>{{ $movie->sinopse }}</p>
    </div>
</div>
@endsection