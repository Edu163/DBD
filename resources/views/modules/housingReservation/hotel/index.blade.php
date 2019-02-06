<form action="/hotel_room" method="get" style="background: #2e2e30; margin-top: 5.5%;">
@extends('layouts.app')
@section('content')

<div class="container">
    @foreach($hotels as $hotel)

    <div class="card borderlight  ">
    <div class="gp14-card">
     <center>
        <img src="https://source.unsplash.com/600x600/?hotels={{ mt_rand(500, 50000) }}" alt="{{$hotel->nombre}}" style="width:600px">
        <div class="container">
                <h1>{{$hotel->nombre}}</h1>
                <h3>{{$hotel->direccion}}, {{$hotel->pais}}</h3>
                <img src="images/{{$hotel->estrellas}}.png">
                <h3>Valoración {{$hotel->valoracion}}</h3>
                <h3>Capacidad {{$hotel->capacidad}}</h3>
                <button id="hotel_id" name="hotel_id" value="{{ $hotel->id }}" type="submit" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Reservar</button>
        </center>
        </div>
    </div>
    </div>
    @endforeach   
</div>
</form>