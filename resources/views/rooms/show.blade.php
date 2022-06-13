@extends('app')

@section('titulo', 'Salas')

@section('conteudo')
<p>Está é a tela que mostra todos os filmes</p>
@csrf
<td>
    <a href="{{route('create-room')}}"><button type="button" class="btn btn-success">Nova Sala</button></a>
</td>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Capacidade</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
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