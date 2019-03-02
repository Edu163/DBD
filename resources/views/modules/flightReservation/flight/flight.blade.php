@extends('layouts.app')

@section('content') 
<section id="pricing">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <div class="row">
            @foreach($flight as $vuelo)
                <div class="col-lg-4 col-md-6">
                    <div class="box featured wow fadeInUp">
                        <h4><sup>$</sup>{{ $vuelo->precio }}</h4>
                        <img class="img-fluid" src="https://picsum.photos/200/200?image={{ mt_rand(1043, 1052) }}" style="padding-bottom: 8% !important;">
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i>Destino: {{ $vuelo->escalas}}</li>
                            <li><i class="ion-android-checkmark-circle"></i>Salida: {{ $vuelo->fecha_despegue }} </li>
                            <li><i class="ion-android-checkmark-circle"></i>Llegada: {{ $vuelo->fecha_aterrizaje }} </li>
                           {{--<li><i class="ion-android-checkmark-circle"></i>Duración: {{ $vuelo->duracion() }}</li> --}}
                           {{-- <li><i class="ion-android-checkmark-circle"></i>Dirección: {{ $hotelCard->hotel->direccion }}</li>
                           <li><i class="ion-android-checkmark-circle"></i>Estrellas: {{ $hotelCard->hotel->estrellas }} <i class="fas fa-star" style="color: yellow !important;"></i></li>
                           <li><i class="ion-android-checkmark-circle"></i>Valoración: {{ $hotelCard->hotel->estrellas }}</li>
                           <li><i class="ion-android-checkmark-circle"></i>Camas: {{ $hotelCard->camas }}</li> --}}
                        </ul>
                        <center>
                            <center>
                                <button style="margin-top: 0.2cm;" type="submit" class="btn btn-success btn-galaxy" data-toggle="modal" data-target="#modal-vehicle-reservation-{{ $vuelo->id }}">Ver detalles</button>
                                @include('modules.flightReservation.flight.index')
                            </center>
                        </center>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
