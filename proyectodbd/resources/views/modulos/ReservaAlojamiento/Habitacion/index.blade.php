@extends('layouts.app')

@section('content')

<form action="/calendario_alojamiento" method="get">
    <h1>
        Habitaciones Disponibles
    </h1>

	<table style="text-align:center;">
    <tr>
    <th><h5 class="card-title"></h5></th>
    <th><h5 class="card-title">Camas</h5></th>
    <th><h5 class="card-title">Numero</h5></th>
    <th><h5 class="card-title">Capacidad</h5></th>
  </tr>
    @foreach($hab_disp as $hab)

    <tr>
    <th>
        <input type="hidden" id="hotel_id" name="hotel_id" value="{{ $hab->id }}">
        <center>
		<button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Reservar </span> </button>
        </center>
        </th>
    <th><h5 class="card-title">{{$hab->camas}}</h5></th>
    <th><h5 class="card-title">{{$hab->numero}}</h5></th>
    <th><h5 class="card-title">{{$hab->capacidad}}</h5></th>
  </tr>
    @endforeach
    </table>
</form>
@endsection