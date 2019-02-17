<form action="/calendario" method="get" style="background: #2e2e30;">
@extends('layouts.app')
@section('content')
<div class="container">
    @foreach($hab_disp as $hab)
    <div class="card borderlight  ">
    <div class="gp14-card">
    <center>
        <img src="https://source.unsplash.com/600x600/?bedroom={{ mt_rand(500, 50000) }}" alt="habitacion" style="width:600px">
        <div class="container">
            <br>
            <h5 class="card-title">Camas: {{$hab->camas}}</h5>
            <h5 class="card-title">Capacidad: {{$hab->capacidad}}</h5>
            <button id="hotel_id" name="hotel_id" value="{{ $hab->id }}" type="submit" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Reservar</button>
        </div>
    </center>
    </div>
    </div>
    @endforeach   
</div>
</form>
@endsection