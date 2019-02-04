<form action="/habitacion_hotel" method="get" style="background-color: black;">
@extends('layouts.app')
@section('content')
<div class="container">
    @foreach($hotels as $hotel)

    <div class="gp14-card">
        <center>
        <img src="images/hotel.jpg" alt="{{$hotel->nombre}}" style="width:800px">
        </center>
        <div class="container">
            <center>
                <div class="card-header" id="nombre_hotel">{{$hotel->nombre}}</div>
                <h5 class="card-title">{{$hotel->direccion}}, {{$hotel->pais}}</h5>
                <h5 class="card-title">Estrellas {{$hotel->estrellas}}</h5>
                <h5 class="card-title">Valoración {{$hotel->valoracion}}</h5>
                <h5 class="card-title">Capacidad {{$hotel->capacidad}}</h5>
            </center>
        </div>
    </div>
    @endforeach   
</div>
</form>