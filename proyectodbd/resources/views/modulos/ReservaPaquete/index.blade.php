@extends('layouts.app')

@section('content')
<div class="article-list">
    <div class="container">
        <div class="intro">
            <p class="text-center"></p>
        </div>
        <div class="row articles">
        @foreach($paquetes as $paquete)
            <div class="col-sm-6 col-md-4 item">
                <center>
                <a href="#">
                    <img src="https://picsum.photos/210/140?image={{ mt_rand(1, 50) }}" alt="">
                </a>
                </center>
                <center>
                <h3 class="name">{{$paquete->hotel->nombre}}</h3>
                <p class="description">Aenean tortor est.</p>
                </center>
                <a id = "boton" href="#" class="action">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection

