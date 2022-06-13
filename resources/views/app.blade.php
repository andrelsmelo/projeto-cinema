<!doctype html>
<html lang="en">

<head style="background-color: #212529; color: white;">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body style="background-color: #212529; color: white;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">CINEMA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('movies')}}">Em Cartaz</a>
                    </li>
                    @can('access-admin')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('create-session') }}">Editar Programação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('view-movies')}}">Edição de Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('view-rooms') }}">Editar De Salas</a>
                    </li>
                    @endcan
                </ul>
            </div>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link href="route('logout')" class="btn btn-dark" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                @else
                <a href="{{ route('login') }}" class="btn btn-dark">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </nav>
    <div class="container" style="width: 100vw; height: 100vh;">
        @yield('conteudo')
    </div>
    <script>
    var today = new Date();
    var min = new Date().toISOString().split('T')[0];
    var maxDate = new Date(today.getTime() + 15 * 24 * 60 * 60 * 1000);
    var max = maxDate.toISOString().split('T')[0];
    document.getElementsByName("input-date")[0].setAttribute('min', min);
    document.getElementsByName("input-date")[0].setAttribute('value', min);
    document.getElementsByName("input-date")[0].setAttribute('max', max);
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>