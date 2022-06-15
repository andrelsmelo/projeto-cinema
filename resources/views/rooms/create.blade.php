@extends('app')

@section('titulo', 'Inserir Sala')

@section('conteudo')
<div style="text-align: center">
    <h1>Está é a tela de inserção de Nova Sala</h1>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('store-room') }}" class="form-sessions" method="POST">
    @csrf
    <div class="col-sm-3 my-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da Sala" required>
    </div>
    <div class="col-sm-3 my-3">
        <label for="poster" class="form-label">Capacidade da Sala</label>
        <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Digite a Capacidade da Sala" required>
    </div>
    <div>
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>
@endsection