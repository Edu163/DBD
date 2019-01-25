
@extends('layouts.app')

@section('content')


<form action="/reserva_vehiculo" method="post">
 @csrf
@foreach($autos as $auto)
    <input type="hidden" name="monto_total" id="monto_total" value="{{ $auto->precio }}">
@endforeach
    <h1>
        ¿Desea confirmar su reserva?
    </h1>
   <button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Confirmar </span> </button>
    <button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Rechazar </span> </button>
</form>
@endsection