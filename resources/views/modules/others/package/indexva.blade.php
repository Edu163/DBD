@extends('layouts.app')

@section('content') 
<section id="pricing">
    <div class="container">
        <div class="row">
            @foreach($flights as $flight)
                <div class="col-lg-4 col-md-6">
                    <div class="box featured wow fadeInUp">
                        <img class="img-fluid" src="https://source.unsplash.com/600x600/?bedroom={{ mt_rand(500, 50000) }}" style="padding-bottom: 8% !important;">
                        <ul>
                           <li><i class="ion-android-checkmark-circle"></i>Id: {{ $flight->id }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
            @foreach($hotels as $hotel)
                <div class="col-lg-4 col-md-6">
                    <div class="box featured wow fadeInUp">
                        <img class="img-fluid" src="https://source.unsplash.com/600x600/?bedroom={{ mt_rand(500, 50000) }}" style="padding-bottom: 8% !important;">
                        <ul>
                           <li><i class="ion-android-checkmark-circle"></i>Id: {{ $hotel->id }}</li>
                        </ul>
                        <center>
                            <form action="{{ route('cart.storeFlights', $hotel) }}" method="POST">
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