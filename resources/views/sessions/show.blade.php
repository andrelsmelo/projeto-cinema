@extends('app')

@section('titulo', 'Sessões')

@section('conteudo')
<p>Está é a tela que mostra todas as Sessões</p>
@csrf
<td>
    <a href="{{ route('create-session') }}"><button type="button" class="btn btn-success">Nova Sessão</button></a>
</td>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Data</th>
            <th scope="col">Sala</th>
            <th scope="col">Horario</th>
            <th scope="col">Filme</th>
            <th scope="col">Duração</th>           
            <th scope="col">Ações</th>            
        </tr>
    </thead>
    <tbody>
        @foreach($moviesShown as $val)
        <tr>
            <th scope="row">{{ $val->id }}</th>
            <td>{{ $val->session_date }}</td>
            @foreach($rooms as $val2)
            @if($val->rooms_id == $val2->id)
            <td>{{ $val2->name}}</td>
            @endif
            @endforeach
            @foreach($sessions as $val2)
            @if($val->sessions_id == $val2->id)
            <td>{{ $val2->session_hour}}</td>
            @endif
            @endforeach
            @foreach($movies as $val2)
            @if($val->movies_id == $val2->id)
            <td>{{ $val2->name}}</td>
            @endif
            @endforeach
            <td>{{ $val->movie_duration}}</td>
            <td>
                <a href="{{ route('edit-session', $val->id) }}"class="btn btn-primary">Editar</a>
                <form action="{{ route('delete-session', $val->id)}}" method="POST" style="display: inline;">
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