@extends('app')

@section('titulo', 'Inserir um filme')

@section('conteudo')
    <div class="row justify-content-center text-center">
        <h1>Está é a tela de inserção de novo filme</h1>
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
    <form action="{{ route('store-movie') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do Filme"
                required>
        </div>
        <div class="mb-3">
            <label for="trailer" class="form-label">Link Video</label>
            <input type="text" class="form-control" id="trailer" name="trailer"
                placeholder="Insira os digitos do link do trailer após a / no botao do Compartilhar" required>
        </div>
        <div class="mb-3">
            <label for="poster" class="form-label">Link Poster</label>
            <input type="text" class="form-control" id="poster" name="poster"
                placeholder="Cole o link do Poster aqui" required>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duração</label>
            <input type="time" class="form-control" id="duration" name="duration"
                placeholder="Digite a duração do filme" required>
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Ano de lançamento</label>
            <input type="text" class="form-control" id="release" name="release"
                placeholder="Digite o ano de lançamento" required>
        </div>
        <div class="mb-3">
            <label for="pegi_id" class="form-label">Classificação de Idade</label>
            <select name="pegi_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected value="">Selecione a Classificação de idade</option>
                @foreach ($pegis as $pegi)
                    <option value="{{ $pegi->id }}">{{ $pegi->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="genre_id" class="form-label">Genêro</label>
            <select name="genre_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected value="">Selecione um Genero</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Coloque as tags abaixo</label>
            <textarea class="form-control" id="tags" name="tags"
                placeholder="Adicione tags customizadas para facilitar a busca" required></textarea>
        </div>
        <div class="mb-3">
            <label for="sinopse" class="form-label">Coloque a sinopse abaixo</label>
            <textarea class="form-control" id="sinopse" name="sinopse" placeholder="Cole a sinopse do filme aqui" required></textarea>
        </div>
        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection
