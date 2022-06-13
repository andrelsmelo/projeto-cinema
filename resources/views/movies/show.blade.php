@extends('app')

@section('titulo', 'Filmes')

@section('conteudo')
<div style="text-align: center">
    <h1>Está é a tela de Gerenciamento de filmes</h1>
</div>
@csrf
<td>
   <a href="{{route('create-movie')}}"><button type="button" class="btn btn-success">Novo Filme</button></a>
</td>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Genero</th>
            <th scope="col">Classificação</th>
            <th scope="col">Ano de lançamento</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $val)
        <tr>
            <th scope="row">{{ $val->id }}</th>
            <td>{{ $val->name }}</td>
            @foreach($genres as $val2)
            @if($val->genre_id == $val2->id)
            <td>{{ $val2->name}}</td>
            @endif
            @endforeach
            @foreach($pegis as $val2)
            @if($val->pegi_id == $val2->id)
            <td>{{ $val2->name}}</td>
            @endif
            @endforeach
            <td>{{ $val->release}}</td>
            <td>
            <a href="{{ route('edit-movie', $val->id) }}" class="btn btn-primary">Editar</button></a>
            </td>
            <td>
            <form action="{{ route('delete-movie', $val->id)}}" method="POST" style="display: inline;">
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