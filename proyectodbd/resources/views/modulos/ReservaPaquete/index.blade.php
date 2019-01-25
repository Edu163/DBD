@extends('layouts.app')

@section('content')
<div class="article-list">
    <div class="container">
        <div class="intro">
        <form action="/reserva_paquete" method="get">
            <p class="text-center"></p>
        </div>
        <div class="row articles">
        @foreach($paquetes as $paquete)
            <div class="col-sm-6 col-md-4 item">
                <center>
                <a href="#">
                    <img src="https://picsum.photos/210/140?image={{ mt_rand(1, 80) }}" alt="">
                </a>
                </center>
                <center>
                </br>
                <div class="row justify-content-center">
                    <div class="col-3">
                    <span for=""> 
                        Hotel:  
                    </span>
                    </div>
                    <div class="col-3">
                        <p class="name">{{$paquete->hotel->nombre}}</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-3">
                    <span for=""> 
                        Vehiculo:  
                    </span>
                    </div>
                    <div class="col-3">
                        <p class="name">{{$paquete->vehiculo->marca}}</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-3">
                    <span for=""> 
                        Vuelo:  
                    </span>
                    </div>
                    <div class="col-3">
                        <p class="name">{{$paquete->vehiculo->zona->nombre}}</p>
                    </div>
                </div>
                <p class="description">Aenean tortor est.</p>
                <a id = "boton" href="/reserva_paquete/{{ $paquete->id }}" method="get" class="action" >
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
                </br>
                </br>
                </br>
                </center>
            </div>
        @endforeach
        </div>
        </form>
    </div>
</div>
@endsection

