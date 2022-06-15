@extends('app')

@section('titulo', 'Editar Sala')

@section('conteudo')
<h1>Está é a tela de edição da {{ $room->name }}</strong></h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('update-room',$room->id) }}" class="form-sessions" method="POST">
    @method('PUT')
    @csrf
    <div class="col-sm-3 my-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $room->name }}" placeholder="Digite o nome da Sala" required>
    </div>
    <div class="col-sm-3 my-3">
        <label for="poster" class="form-label">Capacidade da Sala</label>
        <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $room->capacity }}" placeholder="Digite a Capacidade da Sala" required>
    </div>
    <div>
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>
@endsection