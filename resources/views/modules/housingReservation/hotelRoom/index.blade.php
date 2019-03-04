@extends('layouts.app')

@section('content') 
<section id="pricing">
    <div class="container">
        <div class="row">
            @foreach($hab_disp as $hab)
                <div class="col-lg-4 col-md-6">
                    <div class="box featured wow fadeInUp">
                        <img class="img-fluid" src="https://source.unsplash.com/600x600/?bedroom={{ mt_rand(500, 50000) }}" style="padding-bottom: 8% !important;">
                        <ul>
                           <li><i class="ion-android-checkmark-circle"></i>Camas: {{ $hab->camas }}</li>
                           <li><i class="ion-android-checkmark-circle"></i>Capacidad: {{ $hab->capacidad }}</li>
                        </ul>
                        <center>
                            <form action="{{ route('cart.storeFlights', $hab) }}" method="POST">
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