@extends('app')

@section('titulo', 'Inserir Sala')

@section('conteudo')
    <div class="row justify-content-center text-center">
        <h1>Está é a tela de Criação de Salas</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-5">
            <form action="{{ route('store-room') }}" class="text-center" method="POST">
                @csrf
                <div class="col mt-3">
                    <label for="name" class="form-label fs-3">Nome</label>
                    <input type="text" class="form-control text-center" id="name" name="name" value=""
                        placeholder="Digite o nome da Sala" required>
                </div>
                <div class="col mt-3">
                    <label for="poster" class="form-label fs-3">Capacidade da Sala</label>
                    <input type="number" class="form-control text-center" id="capacity" name="capacity" value=""
                        placeholder="Digite a Capacidade da Sala" required>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
