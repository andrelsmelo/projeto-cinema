@extends('app')

@section('titulo', 'Criar Sessão')

@section('conteudo')
    <div class="row justify-content-center text-center">
        <h1>Está é a tela de Gerenciamento de Sessões</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="col-6 align-middle text-center mt-3">
            <form action="{{ route('create-session') }}" class="form-sessions" method="POST">
                @csrf
                <div>
                    <label for="session_date" class="form-label">Data</label>
                    <input type="date" class="form-control text-center" id="input-date" name="session_date"
                    value="{{ date('Y-m-d') }}" placeholder="Digite a data da Sessão" required>
                </div>
                <div class="mt-3">
                    <label for="rooms_id" class="form-label">Sala</label>
                    <select name="rooms_id" id="salaSelected" class="form-select form-select-sm text-center"
                        aria-label=".form-select-sm example" required>
                        <option selected value="">Selecione uma Sala</option>
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="sessions_id" class="form-label">Horario</label>
                    <select name="sessions_id" class="form-select form-select-sm text-center"
                        aria-label=".form-select-sm example" required>
                        <option selected value="">Selecione um Horario</option>
                        @foreach ($sessions as $session)
                            <option value="{{ $session->id }}">{{ $session->session_hour }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="movies_id" class="form-label">Filme</label>
                    <select name="movies_id" class="form-select form-select-sm text-center"
                        aria-label=".form-select-sm example" required>
                        <option selected value="">Selecione um Filme</option>
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success" id="create-button" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row text-center align-middle justify-content-center">
        <table class="table table-dark table-striped" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th class="col-1">#</th>
                    <th class="col-1">Data</th>
                    <th class="col-1">Sala</th>
                    <th class="col-2">Horario</th>
                    <th class="col-2">Filme</th>
                    <th class="col-2">Duração</th>
                    <th class="col-3">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($moviesShown as $moviesShown)
                    <tr>
                        <th scope="row">{{ $moviesShown->id }}</th>
                        <td>{{ $moviesShown->session_date }}</td>
                                <td>{{ $moviesShown->room->name }}</td>
                                <td>{{ $moviesShown->session->session_hour }}</td>
                                <td>{{ $moviesShown->movie->name }}</td>
                        <td>{{ $moviesShown->duration }}</td>
                        <td>
                            <a href="{{ route('edit-session', $moviesShown->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('delete-session', $moviesShown->id) }}" method="POST"
                                style="display: inline;">
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