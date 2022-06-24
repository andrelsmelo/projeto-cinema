@extends('app')

@section('titulo', 'Editar um filme')

@section('conteudo')
<p>Está é a tela de edição do filme <strong>{{$movie->name}}</strong></p>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('update-movie', $movie->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" value="{{ $movie->name }}" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
    </div>
    <div class="mb-3">
        <label for="trailer" class="form-label">Link Video</label>
        <input type="text" value="{{$movie->trailer}}" class="form-control" id="trailer" name="trailer"
            placeholder="Insira os digitos do link do trailer após a tag 'watch?v='" required>
    </div>
    <div class="mb-3">
        <label for="poster" class="form-label">Link Poster</label>
        <input type="text" value="{{ $movie->poster }}" class="form-control" id="poster" name="poster" placeholder="Cole o link do Poster" required>
    </div>
    <div class="mb-3">
        <label for="duration" class="form-label">Duração</label>
        <input type="time" value="{{ $movie->duration }}" class="form-control" id="duration" name="duration" placeholder="Digite a duração do filme" required>
    </div>
    <div class="mb-3">
        <label for="release" class="form-label">Ano de lançamento</label>
        <input type="text" value="{{ $movie->release }}" class="form-control" id="release" name="release" placeholder="Digite o ano de lançamento" required>
    </div>
    <div class="mb-3">
        <label for="pegi_id" class="form-label">Classificação de Idade</label>
        @foreach($pegi as $val)
        @if($val->id == $movie->pegi_id)
        <select name="pegi_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected value="{{$val->id}}">{{$val->name}}</option>
            @foreach ($pegi as $val)
            <option value="{{ $val->id }}">{{ $val->name }}</option>
            @endforeach
        </select>
        @endif
        @endforeach
    </div>
    <div class="mb-3">
        <label for="genre_id" class="form-label">Genêro</label>
        @foreach($genre as $val)
        @if($val->id == $movie->genre_id)
        <select name="genre_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected value="{{$val->id}}">{{$val->name}}</option>
            @foreach ($genre as $genre)
            <option value="{{ $genre->id }}">{{ $val->genre }}</option>
            @endforeach
        </select>
        @endif
        @endforeach
    </div>
    <div class="mb-3">
        <label for="release" class="form-label">Ano de lançamento</label>
        <input type="text" value="{{ $movie->tags }}" class="form-control" id="tags" name="tags" placeholder="Digite Tags para facilitar a busca" required>
    </div>
    <div class="mb-3">
        <label for="sinopse" class="form-label">Coloque a sinopse abaixo</label>
        <textarea value="{{ $movie->sinopse }}" class="form-control" id="sinopse" name="sinopse" placeholder="Cole a sinopse aqui" required>{{$movie->sinopse}}</textarea>
    </div>
    <button class="btn btn-success" type="submit">Enviar</button>
</form>

@endsection