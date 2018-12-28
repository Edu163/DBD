<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>NombreAereolinea</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <a class="navbar-brand links" href="{{ url('/') }}">LogoEmpresa</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto mt-2 mt-lg-0 nav-item nav-link links">
                    <a href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
                </div>
                <div class="nav-item nav-link links">
                    @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/home') }}">{{ Auth::user()->nombre }}</a>
                        @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <div id="carruselInicio" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carruselInicio" data-slide-to="0" class="active"></li>
                <li data-target="#carruselInicio" data-slide-to="1"></li>
                <li data-target="#carruselInicio" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('img/2.jpg')}}" alt="Primera slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/3.jpg')}}" alt="Segunda slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/5.jpg')}}" alt="Tercera slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carruselInicio" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carruselInicio" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>

        <div class="flex-center position-ref full-height">            
            <div class="content">
                <div class="title m-b-md">
                    @auth
                    ¡Bienvenido {{ Auth::user()->nombre }}!
                    @else
                    ¡Bienvenido!
                    @endauth
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
