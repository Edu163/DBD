@extends('layouts.app')
@section('content')



<div class="container">
    @foreach($hab_disp as $hab)

    <div class="card borderlight  ">
    <div class="gp14-card">
        <div class="container">
            </center>
                <h5 class="card-title">Camas: {{$hab->camas}}</h5>
                <h5 class="card-title">Capacidad: {{$hab->capacidad}}</h5>
                <button id="hotel_id" name="hotel_id" value="{{ $hab->id }}" type="submit" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Reservar</button>
        <center>
            </div>
    </div>
    </div>
    @endforeach   
</div>
</form>