@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
    <section>
        <div class="row justify-content-center text-center">
            <h1>Esses são os filmes das proximas sessões</h1>
            <div class="col-4 d-block">
                <label for="session_date" class="form-label">Data</label>
                <input type="date" class="form-control text-center" id="input-date" name="input-date"
                    value="{{ date('Y-m-d') }}" placeholder="Digite a data da Sessão" required>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <input class="form-control mt-3 text-center" id="input-text" type="text" placeholder="Buscar">
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <table class="table table-dark table-striped" id="myTable">
                <thead class="thead-dark text-center align-middle">
                    <tr>
                        <th class="col-5">Filme</th>
                        <th class="col-1">C</th>
                        <th class="col-2">Data</th>
                        <th class="col-2">Horario</th>
                        <th class="col-2">Sala</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($moviesShown as $movieShown)
                        <tr>
                            <td>
                                <a href="{{ route('movie-details', $movieShown->movie->id) }}">
                                    <img src="{{ $movieShown->movie->poster }}" class="img-fluid w-25 rounded">
                                </a>
                                <p hidden>{{ $movieShown->movie->tags }}</p>
                                {{ $movieShown->movie->name }}
                            </td>
                            <td class="text-center align-middle">
                                <p hidden>{{ $movieShown->movie->pegi_id }}</p>
                                {{ $movieShown->movie->pegi->name }}
                            </td>
                            <td class="text-center align-middle">
                                <p hidden> {{ date('Y-m-d', strtotime($movieShown->session_date)) }}</p>
                                {{ date('d-m-Y', strtotime($movieShown->session_date)) }}
                            </td>
                            <td class="text-center align-middle">
                                {{ $movieShown->session->session_hour }}
                            </td>
                            <td class="text-center align-middle">
                                {{ $movieShown->room->name }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
