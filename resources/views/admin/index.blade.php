@extends('layouts.admin')

@section('content')
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin">Tablón de Administración</a>
          </li>
          <li class="breadcrumb-item active">Vista General</li>
        </ol>

        <!-- Icon Cards-->
        <!-- <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">26 New Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div> -->

        <div id="accordion">
          <!-- Vuelos -->
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="d-flex justify-content-between">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fas fa-fw fa-plane"></i>
                  Vuelos
                </button>
                <button class="btn btn-success">
                  Agregar
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                @include('modules.flightReservation.flight.edit')
              </div>
            </div>
          </div>
          <!-- Vehículos -->
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-car"></i>
                  Vehículos
                </button>
                <form action="/vehicle/" method="post">
                @method('POST')
                @csrf
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-vehicle-store">
                    Agregar
                  </button>
                  @include('modules.vehicleReservation.vehicle.store')
                </form> 
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                @include('modules.vehicleReservation.vehicle.edit')
              </div>
            </div>
          </div>
          <!-- Reserva de Vehículos -->
          <div class="card">
            <div class="card-header" id="headingTwoOne">
              <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwoOne" aria-expanded="false" aria-controls="collapseTwoOne">
                  <i class="fas fa-fw fa-car"></i>
                  Reserva de Vehículos
                </button>
              </h5>
            </div>
            <div id="collapseTwoOne" class="collapse" aria-labelledby="headingTwoOne" data-parent="#accordion">
              <div class="card-body">
                @include('modules.vehicleReservation.vehicleReservation.edit')
              </div>
            </div>
          </div>
          <!-- Hoteles -->
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="fas fa-fw fa-building"></i>
                  Hoteles
                </button>
                <form action="/hotel/" method="post">
                @method('POST')
                @csrf
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-hotel-store">
                    Agregar
                  </button>
                  @include('modules.housingReservation.hotel.store')
                </form>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                @include('modules.housingReservation.hotel.edit')
              </div>
            </div>
          </div>
        </div>
@endsection