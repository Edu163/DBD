<form action="/vehichle_reservation" method="get">
@extends('layouts.app')

@section('content')
  <div class="container" style="color:white;">
    <div class="vehicle-table">
      <center>
        <h1 style="font-size:25px !important;">
          Vehículos Disponibles
        </h1>
      
      </br>
      <table class="table-hover table-bordered table-sm datatable" style="text-align:center; color:white;">
      <thead>
        <tr>
          <th><h5 class="card-title">Patente</h5></th>
          <th><h5 class="card-title">Marca</h5></th>
          <th><h5 class="card-title">Tipo de Vehículo</h5></th>
          <th><h5 class="card-title">Gamma</h5></th>
          <th><h5 class="card-title">Transmisión</h5></th>
          <th><h5 class="card-title">Tipo de Combustible</h5></th>
          <th><h5 class="card-title"></h5></th>
        </tr>
      </thead>
      <tbody>
        @foreach($vehicles as $vehicle)
          <tr>
            <th><h5 class="card-title">{{$vehicle->patente}}</h5></th>
            <th><h5 class="card-title">{{$vehicle->marca}}</h5></th>
            <th><h5 class="card-title">{{$vehicle->tipo}}</h5></th>
            <th><h5 class="card-title">{{$vehicle->gamma}}</h5></th>
            <th><h5 class="card-title">{{$vehicle->transmision}}</h5></th>
            <th><h5 class="card-title">{{$vehicle->combustible}}</h5></th>
            <th>
            <center>
              <button type="submit" class="btn btn-primary btn-hoteles" id="vuelo_id" name="vuelo_id" value="{{ $vehicle->id }}" style="vertical-align:middle"><span>Reservar </span> </button>
            </center>
            </th>
        </tr>
        @endforeach
      </tbody>
    </table> 
    </center>
  </div>   
</div>
@endsection

<!-- .vehicle-table{
    margin-top: 20%;
    margin-bottom: 20%;
} -->