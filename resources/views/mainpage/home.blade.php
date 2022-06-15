@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
<div>
    <h1>Esses são os filmes das proximas sessões</h1>
</div>
<div class="search-container">
    <div class="col-sm-3 my-3">
        <label for="session_date" class="form-label">Data</label>
        <input type="date" class="form-control" id="input-date" name="input-date" placeholder="Digite a data da Sessão" required>
    </div>
    <div class="col-sm-6 my-3">
        <input class="form-control" id="input-text" type="text" placeholder=" &#128269; Buscar">
    </div>
</div>
<div class="container">
    <table class="table table-dark table-striped">
        <thead class="thead-dark ">
            <tr>
                <th class="movie-col">Filme</th>
                <th><strong>C</strong></th>
                <th>Data</th>
                <th>Horario</th>
                <th>Sala</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($moviesShown as $val)
            <tr>
                <td class="movie-table">
                    @foreach($movies as $val2)
                    @if($val->movies_id == $val2->id)
                    <a href="{{ route('movie-details', $val2->id)}}"><img src="{{$val2->poster }}" class="home-movie-img"></a>
                    <span>{{$val2->name}}</span>
                    <p hidden>{{$val2->tags}}</p>
                    @foreach($genres as $val3)
                    @if($val2->genre_id == $val3->id)
                    <p hidden>{{$val3->name}}</p>
                    @endif
                    @endforeach
                    <p hidden>{{$val->session_date}}</p>
                </td>
                <td class="align-middle">
                    @foreach($pegis as $val3)
                    @if($val3->id == $val2->pegi_id)
                    <span>{{$val3->name}}</span>
                    @endif
                    @endforeach
                </td>
                @endif
                @endforeach
                <td class="align-middle">{{ date('d-m-Y', strtotime($val->session_date)) }}</td>
                @foreach($sessions as $val2)
                @if($val->sessions_id == $val2->id)
                <td class="align-middle">{{$val2->session_hour}}</td>
                @endif
                @endforeach
                @foreach($rooms as $val2)
                @if($val->rooms_id == $val2->id)
                <td class="align-middle">{{$val2->name}}</td>
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