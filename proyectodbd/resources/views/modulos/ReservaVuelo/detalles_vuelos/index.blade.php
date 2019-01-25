@extends('layouts.app')

@section('content')
    <h1>
        Vuelos Disponibles
    </h1>

	<table style="text-align:center;">
    <tr>
    <th><h5 class="card-title"></h5></th>
    <th><h5 class="card-title">Origen</h5></th>
    <th><h5 class="card-title">Destino</h5></th>
    <th><h5 class="card-title">Fecha salida</h5></th>
    <th><h5 class="card-title">Fecha llegada</h5></th>
    <th><h5 class="card-title">precio</h5></th>
  </tr>
    @foreach($detalles_vuelos as $detalle_vuelo)
    <tr>
    <th>
        <center>
		<a href="\" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Reservar </span> </a>
        </center>
        </th>
    <th><h5 class="card-title">{{$detalle_vuelo->origen->ciudad}}</h5></th>
    <th><h5 class="card-title">{{$detalle_vuelo->destino->ciudad}}</h5></th>
    <th><h5 class="card-title">{{$detalle_vuelo->fecha_despegue}}</h5></th>
    <th><h5 class="card-title">{{$detalle_vuelo->fecha_aterrizaje}}</h5></th>
    <th><h5 class="card-title">{{$detalle_vuelo->precio}}</h5></th>
  </tr>
	@endforeach
    </table>
@endsection
