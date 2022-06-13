@extends('app')

@section('titulo', 'Inserir Sala')

@section('conteudo')
<p>Está é a tela de inserção de novo filme</strong></p>

<form action="{{ route('store-room') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da Sala" required>
    </div>
    <div class="mb-3">
        <label for="poster" class="form-label">Capacidade da Sala</label>
        <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Digite a Capacidade da Sala" required>
    </div>
    <button class="btn btn-success" type="submit">Enviar</button>
</form>

@endsection