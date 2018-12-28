@extends('layouts.app')

@section('content')
	<div class="card-deck">
	@foreach($companias as $compania)
		<div class="col-sm">
			<div class="card" style="width: 18rem;">
  				<div class="card-body">
   					<h5 class="card-title">{{$compania->nombre}}</h5>
    				<p class="card-text">{{$compania->direccion}}</p>
    				<a href="#" class="btn btn-primary">Go somewhere</a>
  				</div>
			</div>
		</div>
	@endforeach
	</div>
@endsection