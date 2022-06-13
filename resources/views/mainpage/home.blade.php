@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
<p>Bem vindo! Esses são os filmes das proximas sessões</p>
<div class="container">
    <div class="mb-3">
        <label for="session_date" class="form-label">Data</label>
        <input type="date" class="form-control" id="input-date" name="session_date" placeholder="Digite a data da Sessão" required>
    </div>
    <input class="form-control" id="input-text" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Filme</th>
                <th>Data</th>
                <th>Horario</th>
                <th>Sala</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($moviesShown as $val)
            <tr>
                @foreach($movies as $val2)
                @if($val->movies_id == $val2->id)
                <td>
                    <img src="{{$val2->poster }}" style="border-radius: 5px; margin-bottom: 20px; width: 10%; ">
                    {{ $val2->name}}
                </td>
                @endif
                @endforeach
                <td>{{$val->session_date}}</td>
                @foreach($sessions as $val2)
                @if($val->sessions_id == $val2->id)
                <td>{{$val2->session_hour}}</td>
                @endif
                @endforeach
                @foreach($rooms as $val2)
                @if($val->rooms_id == $val2->id)
                <td>{{$val2->name}}</td>
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
            console.log(value)
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $(document).ready(function() {
        $("#input-text").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            console.log(value)
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

var today = new Date().toISOString().split('T')[0];
document.getElementsByName("session_date")[0].setAttribute('min', today);
</script>
@endsection