<form action="/carrito" method="get" class="body-carrito">
@extends('layouts.app')

@section('content')
    <h1>
        Hoteles Disponibles
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
    @foreach($hoteles as $hotel)
    <tr>
    <th>
        <center>
		<a href="\" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Reservar </span> </a>
        </center>
        </th>
    <th><h5 class="card-title" id="nombre_hotel">{{$hotel->nombre}}</h5></th>
    <th><h5 class="card-title">{{$hotel->pais}}</h5></th>
    <th><h5 class="card-title">{{$hotel->direccion}}</h5></th>
    <th><h5 class="card-title">{{$hotel->estrellas}}</h5></th>
    <th><h5 class="card-title">{{$hotel->valoracion}}</h5></th>
    <th><h5 class="card-title">{{$hotel->capacidad}}</h5></th>
  </tr>
	@endforeach
    </table>
@endsection
