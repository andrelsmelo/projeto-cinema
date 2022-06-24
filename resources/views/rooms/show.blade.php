@extends('app')

@section('titulo', 'Salas')

@section('conteudo')
    <div class="row justify-content-center mb-4">
        <div class="col-6 text-center align-middle">
            <h2>Está é a tela de Gerenciamento de Salas</h2>
            @csrf
            <a href="{{ route('create-room') }}"><button type="button" class="btn btn-success">Nova Sala</button></a>
        </div>
    </div>
    <div class="row">
        <table class="table table-dark table-striped text-center align-middle">
            <thead class="thead-dark">
                <tr>
                    <th class="col-1">#</th>
                    <th class="col-4">Nome</th>
                    <th class="col-3">Capacidade</th>
                    <th class="col-4">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <th scope="row">{{ $room->id }}</th>
                        <td>{{ $room->name }}</td>
                        </td>
                        <td>{{ $room->capacity }}</td>
                        <td>
                            <a href="{{ route('edit-room', $room->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('delete-room', $room->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Tem certeza?')">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
