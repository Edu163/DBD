@extends('layouts.app')

@section('content')
   <!-- <h1>
        Paquetes Disponibles
    </h1>

	<table style="text-align:center;">
    <tr>
    <th><h5 class="card-title"></h5></th>
    <th><h5 class="card-title">Hotel</h5></th>
    <th><h5 class="card-title">Pais</h5></th>
    <th><h5 class="card-title">Dirección</h5></th>
    <th><h5 class="card-title">Estrellas</h5></th>
    <th><h5 class="card-title">Valoración</h5></th>
    <th><h5 class="card-title">Capacidad</h5></th>
  </tr>
    @foreach($paquetes as $paquete)
    <tr>
    <th>
        <center>
		<a href="\" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Reservar </span> </a>
        </center>
        </th>
    <th><h5 class="card-title">{{$paquete->hotel->nombre}}</h5></th>
    <th><h5 class="card-title">{{$paquete->hotel->pais}}</h5></th>
    <th><h5 class="card-title">{{$paquete->hotel->direccion}}</h5></th>
    <th><h5 class="card-title">{{$paquete->hotel->estrellas}}</h5></th>
    <th><h5 class="card-title">{{$paquete->hotel->valoracion}}</h5></th>
    <th><h5 class="card-title">{{$paquete->hotel->capacidad}}</h5></th>
  </tr>
	@endforeach
    </table>-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <p class="text-center"></p>
            </div>
            <div class="row articles">
            @foreach($paquetes as $paquete)
                <div class="col-sm-6 col-md-4 item">
                    <center>
                    <a href="#">
                        <img src="https://picsum.photos/210/140?image={{ mt_rand(1, 50) }}" alt="">
                    </a>
                    </center>
                    <center>
                    <h3 class="name">{{$paquete->hotel->nombre}}</h3>
                    <p class="description">Aenean tortor est.</p>
                    </center>
                    <a id = "boton" href="#" class="action">
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
@endsection

