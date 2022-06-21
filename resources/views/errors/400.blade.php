@extends('app')

@section('titulo', 'Sessões')

@section('conteudo')
<div class="row">
    <div class="col text-center align-middle">
        <h1>{{ $exception->getMessage()}}</h1>
        <img src="https://http.cat/400" alt="404gatin" style="width:50%">
    </div>
</div>

@endsection