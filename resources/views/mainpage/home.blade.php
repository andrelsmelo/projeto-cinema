@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
<div style="text-align: center">
    <h1>Esses são os filmes das proximas sessões</h1>
</div>
<div class="container">
    <div class="mb-3">
        <label for="session_date" class="form-label">Data</label>
        <input type="date" class="form-control" id="input-date" name="session_date" placeholder="Digite a data da Sessão" required>
    </div>
    <input class="form-control" id="input-text" type="text" placeholder="Buscar">
    <br>
    <table class="table table-dark table-striped" style="width:100%">
    <thead class="thead-dark">
            <tr>
                <th style="width:50%;margin: auto;vertical-align: middle; text-align: center">Filme</th>
                <th style="width:20%;margin: auto;vertical-align: middle; text-align: center">Data</th>
                <th style="width:20%;margin: auto;vertical-align: middle; text-align: center">Horario</th>
                <th style="width:10%;margin: auto;vertical-align: middle; text-align: center">Sala</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($moviesShown as $val)
            <tr>
                @foreach($movies as $val2)
                @if($val->movies_id == $val2->id)
                <td style="width:50%">
                    <a href="{{ route('movie-details', $val2->id)}}"><img src="{{$val2->poster }}" style="border-radius: 5px; margin-bottom: 20px; width: 20%; "></a>
                        <p style="display: inline;">{{ $val2->name}}</p>
                            @foreach($pegis as $val3)
                            @if($val2->pegi_id == $val3->id)
                            <p style="display: inline; vertical-align: middle; float:right"><strong>{{ $val3->name}}</strong></p>
                            @endif
                            @endforeach
                    <p hidden>{{$val2->tags}}</p>
                    @foreach($genres as $val3)
                    @if($val2->genre_id == $val3->id)
                    <p hidden>{{$val3->name}}</p>
                    @endif
                    @endforeach
                </td>
                @endif
                @endforeach
                <td style="width:20%;vertical-align: middle; text-align: center">{{ date('d-m-Y', strtotime($val->session_date)) }}</td>
                @foreach($sessions as $val2)
                @if($val->sessions_id == $val2->id)
                <td style="width:20%;vertical-align: middle; text-align: center">{{$val2->session_hour}}</td>
                @endif
                @endforeach
                @foreach($rooms as $val2)
                @if($val->rooms_id == $val2->id)
                <td style="width:10%;vertical-align: middle; text-align: center">{{$val2->name}}</td>
                @endif
                @endforeach
            </tr>

            @endforeach

        </tbody>
    </table>


</div>

<script>
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

    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("session_date")[0].setAttribute('min', today);
</script>
@endsection