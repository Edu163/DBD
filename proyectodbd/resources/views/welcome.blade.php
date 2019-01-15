@extends('layouts.app')

@section('contenido')

@include('components.carrusel')

</br>

<div class="container py-4">
        <div class="row row-buy-forms">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link nav-link-form active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <i class="material-icons">local_airport</i>
                    Reserva tu vuelo
                </a>

                <a class="nav-link nav-link-form" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <i class="material-icons">directions_car</i>
                    Reserva vehiculo
                </a>
                        
                <a class="nav-link nav-link-form" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    <i class="material-icons">domain</i>
                    Reserva alojamiento
                </a>

                <a class="nav-link nav-link-form" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <i class="material-icons">view_quilt</i>
                    Vuelo, alojamiento y vehiculo
                </a>
            </div>

            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    @include('modulos.ReservaVuelo.vuelos.form')
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"> 
                    @include('modulos.ReservaVehiculo.vehiculos.form')
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"> </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"> 
                    @include('modulos.ReservaAlojamiento.Hotel.form')
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"> </div>
            </div>
        </div>
</div>

@endsection