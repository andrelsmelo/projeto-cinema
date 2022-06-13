@extends('app')

@section('titulo', 'Detalhes')

@section('conteudo')
<div class="container" style="margin-top: 35px">
<h1>{{$movie->name}}</h1>
    <div class="row">
        <div class="col-3">
            <div>
                <img src="{{ $movie->poster }}" style="border-radius: 5px; margin-bottom: 20px; width: 100%; ">
            </div>
        </div>
        <div class="col-3">
            <div>
                <div class="details" style="height: 90px; line-height: 90px;">
                    <ul >
                        <li>
                            <div>
                                <strong>Gênero: </strong>
                                {{$genre->name}}
                            </div>
                        </li>
                        <li>
                            <div>
                                <strong>Classificação: </strong>
                                {{$pegi->name}}
                            </div>
                        </li>
                        <li>
                            <div>
                                <strong>Duração: </strong>
                                {{ $movie->duration}}
                            </div>
                        </li>
                        <li>
                            <div>
                                <strong>Ano de lançamento: </strong>
                                {{ $movie->release}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Sinopse</h3>
            <div>
                <p>{{ $movie->sinopse }}</p>
            </div>
        </div>
    </div>
    @endsection