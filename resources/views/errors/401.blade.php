@extends('app')

@section('titulo', 'Sessões')

@section('conteudo')
<div class="row">
    <div class="col justify-content-center text-center align-middle">
        <h1>{{ $exception->getMessage()}}</h1>
        <img src="https://http.cat/401" alt="404gatin" style="width:50%">
        <div>
            <a href="{{ url()->previous() }}" class="btn btn-light mt-3">Voltar</a>
            </div>
    </div>
</div>
@endsection