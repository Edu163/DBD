@extends('layouts.app')

@section('content') 
<section id="pricing">
    <div class="container">
        <div class="row">
            @foreach($flight as $vuelo)
                <div class="col-lg-4 col-md-6">
                    <div class="box featured wow fadeInUp">
                        <h4><sup>$</sup>{{ $vuelo->precio }}</h4>
                        <img class="img-fluid" src="https://picsum.photos/200/200?image={{ mt_rand(1, 50) }}" style="padding-bottom: 8% !important;">
                        <ul>
                            {{-- <li><i class="ion-android-checkmark-circle"></i>Destino: {{ $vuelo->destiny->ciudad }}</li>
                           <li><i class="ion-android-checkmark-circle"></i>Fecha de despegue: {{ $vuelo->horarioDespegue() }}</li>
                           <li><i class="ion-android-checkmark-circle"></i>Fecha de aterrizaje: {{ $vuelo->horarioAterrizaje() }}</li>
                           <li><i class="ion-android-checkmark-circle"></i>Duración: {{ $vuelo->duracion() }}</li> --}}
                           {{-- <li><i class="ion-android-checkmark-circle"></i>Dirección: {{ $hotelCard->hotel->direccion }}</li>
                           <li><i class="ion-android-checkmark-circle"></i>Estrellas: {{ $hotelCard->hotel->estrellas }} <i class="fas fa-star" style="color: yellow !important;"></i></li>
                           <li><i class="ion-android-checkmark-circle"></i>Valoración: {{ $hotelCard->hotel->estrellas }}</li>
                           <li><i class="ion-android-checkmark-circle"></i>Camas: {{ $hotelCard->camas }}</li> --}}
                        </ul>
                        <center>
                            <form action="{{ route('cart.storeFlights', $vuelo) }}" method="POST">
                            @csrf
                                <button style="margin-top: 0.2cm;" type="submit" class="btn btn-success btn-galaxy">Añadir al carrito</button>
                            </form>
                        </center>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
