
@extends('layouts.app')

@section('content')


<form action="/reserva_hotel" method="post">
 @csrf
@foreach($habHotel as $hab)
    <input type="hidden" name="precio" id="precio" value="{{ $hab->precio }}">
    <input type="hidden" name="cantidad" id="cantidad" value=1>
    <input type="hidden" name="monto_total" id="monto_total" value="{{ $hab->precio }}">
    <input type="hidden" name="descuento" id="descuento" value= 0>
@endforeach
    <h1>
        ¿Desea confirmar su reserva?
    </h1>
   <button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Confirmar </span> </button>
    <button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Rechazar </span> </button>
</form>
@endsection