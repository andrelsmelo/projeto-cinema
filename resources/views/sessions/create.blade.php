@extends('app')

@section('titulo', 'Criar Sessão')

@section('conteudo')
<p>Está é a tela de Gerenciamento de Sessões</strong></p>

<form action="{{ route('create-session') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="session_date" class="form-label">Data</label>
        <input type="date" class="form-control" id="session_date" name="session_date" placeholder="Digite a data da Sessão" required>
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

<script>
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("session_date")[0].setAttribute('min', today);
document.getElementsByName("session_date")[0].setAttribute('value', today);
</script>
@endsection