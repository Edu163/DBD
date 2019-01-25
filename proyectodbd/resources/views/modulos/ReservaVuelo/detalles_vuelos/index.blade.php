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
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Reservar
        </button>
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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> </h5>
        
<table style="text-align:center;">
    <tr>
    <th><h5 class="card-title">Origen</h5></th>
    <th><h5 class="card-title">Destino</h5></th>
    <th><h5 class="card-title">Fecha salida</h5></th>
    <th><h5 class="card-title">Fecha llegada</h5></th>
    <th><h5 class="card-title">precio</h5></th>
  </tr>
    @foreach($detalles_vuelos as $detalle_vuelo)
    <tr>
    <th><h5 class="card-title">{{$detalle_vuelo->origen->ciudad}}</h5></th>
    <th><h5 class="card-title">{{$detalle_vuelo->destino->ciudad}}</h5></th>
    <th><h5 class="card-title">{{$detalle_vuelo->fecha_despegue}}</h5></th>
    <th><h5 class="card-title">{{$detalle_vuelo->fecha_aterrizaje}}</h5></th>
    <th><h5 class="card-title">{{$detalle_vuelo->precio}}</h5></th>
  </tr>
	@endforeach
    </table>

        
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <a href="\" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Confirmar </span> </a>
         <a href="\" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Recharzar </span> </a>
      </div>
    </div>
  </div>
</div>
@endsection
