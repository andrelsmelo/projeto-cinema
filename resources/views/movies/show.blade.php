@extends('app')

@section('titulo', 'Filmes')

@section('conteudo')
    <div class="row justify-content-center text-center align-middle">
        <h1>Está é a tela de Gerenciamento de filmes</h1>
        @csrf
        <a href="{{ route('create-movie') }}"><button type="button" class="btn btn-success m-3">Novo Filme</button></a>
    </div>
    <div class="row text-center align-middle">
        <table class="table table-dark table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class="col-1">#</th>
                    <th class="col-3">Nome</th>
                    <th class="col-2">Genero</th>
                    <th class="col-2">Classificação</th>
                    <th class="col-1">Ano de lançamento</th>
                    <th class="col-3">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <th scope="row">{{ $movie->id }}</th>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->genre->name }}</td>
                        <td>{{ $movie->pegi->name }}</td>
                        <td>{{ $movie->release }}</td>
                        <td>
                            <a href="{{ route('edit-movie', $movie->id) }}" class="btn btn-primary">Editar</button></a>
                            <form action="{{ route('delete-movie', $movie->id) }}" class="d-inline" method="POST">
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
