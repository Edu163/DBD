@extends('layouts.admin')

@section('content')
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin">Tablón de Administración</a>
          </li>
          <li class="breadcrumb-item active">Vista General</li>
        </ol>
        @if (session()->has('success_message'))
          <div class="alert alert-success">
              {{ session()->get('success_message')}}
          </div>
        @endif
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

        <div class="accordion" id="mainAccordion">
          
          <!-- Aéreo -->
          <div class="card">
            <div class="card-header" id="flightAccordion">
              <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#flight" aria-expanded="false" aria-controls="flight">
                  <i class="fas fa-fw fa-plane"></i>
                  Aéreo
                </button>
              </h5>
            </div>
            <div id="flight" class="collapse" aria-labelledby="flightAccordion" data-parent="#mainAccordion">
              <div class="card-body">
                @include('admin.flight')
              </div>
            </div>
          </div>

          <!-- Alojamiento -->
          <div class="card">
            <div class="card-header" id="housingAccordion">
              <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#housing" aria-expanded="false" aria-controls="housing">
                  <i class="fas fa-fw fa-building"></i>
                  Alojamiento
                </button>
              </h5>
            </div>
            <div id="housing" class="collapse" aria-labelledby="housingAccordion" data-parent="#mainAccordion">
              <div class="card-body">
                @include('admin.housing')
              </div>
            </div>
          </div>
        
          <!-- Transporte -->
          <div class="card">
            <div class="card-header" id="transportAccordion">
              <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#transport" aria-expanded="false" aria-controls="transport">
                  <i class="fas fa-fw fa-car"></i>
                    Transporte
                </button>
              </h5>
            </div>

            <div id="transport" class="collapse" aria-labelledby="transportAccordion" data-parent="#mainAccordion">
              <div class="card-body">
                @include('admin.transport')
              </div>
            </div>
          </div>
        </div>
@endsection