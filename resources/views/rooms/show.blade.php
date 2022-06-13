@extends('app')

@section('titulo', 'Salas')

@section('conteudo')
<div style="text-align: center">
    <h1>Está é a tela de Gerenciamento de Salas</h1>
</div>
@csrf
<td>
    <a href="{{route('create-room')}}"><button type="button" class="btn btn-success">Nova Sala</button></a>
</td>
<table class="table table-dark table-striped" style="width:100%">
    <thead class="thead-dark" style="vertical-align: middle; text-align: center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Capacidade</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody style="vertical-align: middle; text-align: center">
        @foreach($rooms as $val)
        <tr>
            <th scope="row">{{ $val->id }}</th>
            <td>{{ $val->name }}</td>
            </td>
            <td>{{ $val->capacity}}</td>
            <td>
                <a href="{{ route('edit-room', $val->id) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('delete-room', $val->id)}}" method="POST" style="display: inline;">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza?')">Deletar</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection