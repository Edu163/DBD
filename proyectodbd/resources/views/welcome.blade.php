<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Aerolinea') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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

        <!--
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

        -->





        <div class="container">
            <div class="search-container">
                <div class="row">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="material-icons">local_airport</i>
                            Vuelo

                        </a>

                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="material-icons">directions_car</i>
                            Vehiculo
                        </a>
                        
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="material-icons">domain</i>
                            Alojamiento
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="material-icons">view_quilt</i>
                            Paquetes
                        </a>
                    </div>
                        <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @yield('content')
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="card">
                                <div class="card-header">Datos Personales</div>
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                                        <div class="col-md-6">
                                            <input id="nombre" type="text" class="form-control" name="nombre" required autofocus></input>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>
                                        <div class="col-md-6">
                                            <input id="apellido" type="text" class="form-control" name="apellido" required autofocus></input>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" required></input>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>
                                        <div class="col-md-6">
                                            <input id="telefono" type="text" class="form-control" name="telefono" required autofocus></input>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary" type="submit">
                                            Enviar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                    </div>
                </div>
            </div>
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
