@extends('app')

@section('titulo', 'Editar Sessão')

@section('conteudo')
    <div class="row">
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
            <form action="{{ route('update-session', $movieShown->id) }}" class="form-sessions" method="POST">
                @method('PUT')
                @csrf
                <div class="mt-3">
                    <label for="session_date" class="form-label">Data</label>
                    <input type="date" class="form-control text-center" id="session_date" name="session_date"
                        value="{{ $movieShown->session_date }}" placeholder="Digite a data da Sessão" required>
                </div>
                <div class="mt-3">
                    <label for="rooms_id" class="form-label">Sala</label>
                    <select name="rooms_id" class="form-select form-select-sm text-center"
                        aria-label=".form-select-sm example">
                        <option selected value="{{ $movieShown->room->id }}">{{ $movieShown->room->name }}</option>
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="sessions_id" class="form-label">Horario</label>
                    <select name="sessions_id" class="form-select form-select-sm text-center"
                        aria-label=".form-select-sm example">
                        <option selected value="{{ $movieShown->session->id }}">{{ $movieShown->session->session_hour }}
                        </option>
                        @foreach ($sessions as $session)
                            <option value="{{ $session->id }}">{{ $session->session_hour }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="movies_id" class="form-label">Filme</label>
                    <select name="movies_id" class="form-select form-select-sm text-center"
                        aria-label=".form-select-sm example">
                        <option selected value="{{ $movieShown->movie_id }}">{{ $movieShown->movie->name }}</option>
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="create-button">
                    <button class="btn btn-success" id="create-button" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
