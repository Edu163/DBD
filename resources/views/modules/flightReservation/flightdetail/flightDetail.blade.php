@extends('layouts.app')

<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="projects-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Projects </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            @foreach($flight as $vuelo)
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="https://picsum.photos/200/200?image={{ mt_rand(1, 50) }}">
                    <h3 class="name">${{$vuelo->precio}}</h3>
                    <p class="description">{{ $vuelo->fecha_despegue }}</p>
                    <center>
                        <form action="{{ route('cart.storeFlights', $vuelo) }}" method="POST">
                        {{ csrf_field() }}
                        <input type = "hidden" name = "id" value = "{{ $vuelo->id }}">
                        <input type = "hidden" name = "nombre" value = "{{ $vuelo->fecha_despegue}}">
                        <input type = "hidden" name = "precio" value = "{{$vuelo->precio}}">
                        <button style="margin-top: 0.2cm;" type="submit" class="btn btn-success">Añadir al carrito</button>
                        </form>
					</center>
                </div>
            @endforeach
        </div>
    </div>
