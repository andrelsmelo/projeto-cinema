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
            <form action="{{ route('update-session', $moviesShown->id) }}" class="form-sessions" method="POST">
                @method('PUT')
                @csrf
                <div class="mt-3">
                    <label for="session_date" class="form-label">Data</label>
                    <input type="date" class="form-control text-center" id="session_date" name="session_date"
                        value="{{ $moviesShown->session_date }}" placeholder="Digite a data da Sessão" required>
                </div>
                <div class="mt-3">
                    <label for="rooms_id" class="form-label">Sala</label>
                    @foreach ($rooms as $val)
                        @if ($val->id == $moviesShown->rooms_id)
                            <select name="rooms_id" class="form-select form-select-sm text-center" aria-label=".form-select-sm example">
                                <option selected value="{{ $val->id }}">{{ $val->name }}</option>
                                @foreach ($rooms as $val)
                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div class="mt-3">
                    <label for="sessions_id" class="form-label">Horario</label>
                    @foreach ($sessions as $val)
                        @if ($val->id == $moviesShown->sessions_id)
                            <select name="sessions_id" class="form-select form-select-sm text-center"
                                aria-label=".form-select-sm example">
                                <option selected value="{{ $val->id }}">{{ $val->session_hour }}</option>
                                @foreach ($sessions as $val)
                                    <option value="{{ $val->id }}">{{ $val->session_hour }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div class="mt-3">
                    <label for="movies_id" class="form-label">Filme</label>
                    @foreach ($movies as $val)
                        @if ($val->id == $moviesShown->movies_id)
                            <select name="movies_id" class="form-select form-select-sm text-center"
                                aria-label=".form-select-sm example">
                                <option selected value="{{ $val->id }}">{{ $val->name }}</option>
                                @foreach ($movies as $val)
                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div class="create-button">
                    <button class="btn btn-success" id="create-button" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
