@extends('app')

@section('titulo', 'Criar Sessão')

@section('conteudo')
<p>Está é a tela de Criar Sessão</strong></p>

<form action="{{ route('create-session') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="session_date" class="form-label">Data</label>
        <input type="date" class="form-control" id="session_date" name="session_date" value=""placeholder="Digite a data da Sessão" required>
    </div>
    <div class="mb-3">
        <label for="rooms_id" class="form-label">Sala</label>
        <select  name="rooms_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected value="">Selecione uma Sala</option>
            @foreach ($rooms as $val)
            <option value="{{ $val->id }}">{{ $val->name }}</option>
            @endforeach
        </select>
   </div>
    <div class="mb-3">
        <label for="sessions_id" class="form-label">Horario</label>
        <select  name="sessions_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected value="">Selecione um Horario</option>
            @foreach ($sessions as $val)
            <option value="{{ $val->id }}">{{ $val->session_hour }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="movies_id" class="form-label">Filme</label>
        <select  name="movies_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected value="">Selecione um Filme</option>
            @foreach ($movies as $val)
            <option value="{{ $val->id }}">{{ $val->name }}</option>
            @endforeach
            
        </select>
    </div>
    <button class="btn btn-success" type="submit">Enviar</button>
</form>

@endsection