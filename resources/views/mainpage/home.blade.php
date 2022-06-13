@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
<h1>Home</h1>
<p>Bem vindo! Esses são os filmes das proximas sessões</p>
<div class="container" style="margin-top: 25px">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        @foreach($moviesShown as $val)
        <div class="container mx-auto px-6 py-16 flex">
            @foreach($movies as $val2)
            @if($val->movies_id == $val2->id )
            <div>
                <a href="{{ route('movie-details', $val2->id)}}"><img src="{{ $val2->poster }}" style="border-radius: 5px; margin-bottom: 20px; width: 30%"></a>
            </div>
            <h3>{{ $val2->name}}</h3>
            @endif
            @endforeach
            @foreach($sessions as $val2)
            @if($val->sessions_id == $val2->id)
            <h3>{{$val->session_date}}</h3>
            @endif
            @endforeach
            @foreach($rooms as $val2)
            @if($val->rooms_id == $val2->id)
            <h3>{{$val2->name}}</h3>
            @endif
            @endforeach
            <h3>{{$val->movie_duration}}</h3>
        </div>
        @endforeach
    </div>
</div>
@endsection