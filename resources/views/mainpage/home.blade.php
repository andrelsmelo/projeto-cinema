@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
    <div class="row justify-content-center align-middle">
        <h1>Esses são os filmes das proximas sessões</h1>
        <div class="col-4">
            <label for="session_date" class="form-label">Data</label>
            <input type="date" class="form-control" id="input-date" name="input-date" placeholder="Digite a data da Sessão"
                required>
            <div class="row">
                <i class="bi bi-search me-3"><input class="form-control d-inline" id="input-text" type="text"
                        placeholder="Buscar"></i>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-dark table-striped fs-4" id="myTable">
            <thead class="thead-dark text-center">
                <tr>
                    <th class="col-5">Filme</th>
                    <th class="col-1">C</th>
                    <th class="col-2">Data</th>
                    <th class="col-2">Horario</th>
                    <th class="col-2">Sala</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($moviesShown as $val)
                    <tr>
                        <td>
                            @foreach ($movies as $val2)
                                @if ($val->movies_id == $val2->id)
                                    <a href="{{ route('movie-details', $val2->id) }}"><img src="{{ $val2->poster }}"
                                            class="img-fluid w-25 rounded"></a>
                                    <span class="align-middle ms-3">{{ $val2->name }}</span>
                                    <p hidden>{{ $val2->tags }}</p>
                                    @foreach ($genres as $val3)
                                        @if ($val2->genre_id == $val3->id)
                                            <p hidden>{{ $val3->name }}</p>
                                        @endif
                                    @endforeach
                                    <p hidden>{{ $val->session_date }}</p>
                        </td>
                        <td class="text-center align-middle">
                            @foreach ($pegis as $val3)
                                @if ($val3->id == $val2->pegi_id)
                                    <span>{{ $val3->name }}</span>
                                @endif
                            @endforeach
                        </td>
                @endif
                @endforeach
                <td class="text-center align-middle">
                    {{ date('d-m-Y', strtotime($val->session_date)) }}
                </td>
                @foreach ($sessions as $val2)
                    @if ($val->sessions_id == $val2->id)
                        <td class="text-center align-middle">
                            {{ $val2->session_hour }}
                        </td>
                    @endif
                @endforeach
                @foreach ($rooms as $val2)
                    @if ($val->rooms_id == $val2->id)
                        <td class="text-center align-middle">
                            {{ $val2->name }}
                        </td>
                    @endif
                @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            var value = $("#input-date").val();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        })
        $(document).ready(function() {
            $("#input-date").on("change", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        $(document).ready(function() {
            $("#input-text").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
