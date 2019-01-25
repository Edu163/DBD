<form action="/calendario_vehiculo" method="get">
@extends('layouts.app')

@section('content')
<form action="/reserva_vehiculo" method="get">
    <table class="table table-hover table-bordered table-sm datatable">
        <thead>
            <tr>
                <th></th>
                <th> Patente </th>
                <th> Tipo </th>
                <th> Gamma </th>
                <th> Marca </th>
                <th> Transmisión </th>
                <th> Combustible </th>
                <th> Capacidad de pasajeros </th>
                <th> Equipaje grande máximo </th>
                <th> Equipaje pequeño máximo </th>
                <th> Número de puertas </th>
                <th> Aireacondicionado </th>
                <th> Precio hora </th>
                <th class="no-sort"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>
                        <center>
		                    <button type="submit" class="btn btn-danger btn-hoteles" id="auto_id" name="auto_id" value="{{ $vehiculo->id }}" style="vertical-align:middle"><span>Reservar </span> </button>
                        </center>
                    </td>
                    <td>{{ $vehiculo->patente }}</td>
                    <td>{{ $vehiculo->tipo }}</td>
                    <td>{{ $vehiculo->gamma }}</td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->transmision }}</td>
                    <td>{{ $vehiculo->combustible }}</td>
                    <td>{{ $vehiculo->n_pasajeros }}</td>
                    <td>{{ $vehiculo->equipaje_g }}</td>
                    <td>{{ $vehiculo->equipaje_p }}</td>
                    <td>{{ $vehiculo->n_puertas }}</td>
                    <td>{{ $vehiculo->aire_acondicionado }}</td>
                    <td>{{ $vehiculo->precio_hora }}</td>
                    <td>
                    <button type="submit" class="btn btn-danger btn-hoteles" id="vehiculo_id" name="vehiculo->id" value="{{ $vehiculo->id }}" style="vertical-align:middle"><span>Reservar </span> </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection