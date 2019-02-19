<form action="/cart" method="get"">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="hotel-cards">
         @foreach($insurances as $insurance)
    <div class="card borderlight  ">
    <div class="gp14-card">
    <center>
        <img src="{{ asset('/images/insurance.png') }}" alt="insurance" style="width:600px">
        <div class="container">
            <h3>{{$insurance->medicalService}}</h3>
            <h3>{{$insurance->service2}}</h3>
            <h3>{{$insurance->service3}}</h3>
            <button id="hotel_id" name="hotel_id" value="{{ $insurance->id }}" type="submit" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Reservar</button>
        </div>
    </center>
    </div>
    </div>
    @endforeach  
    </div>
    
</div>
</form>
@endsection