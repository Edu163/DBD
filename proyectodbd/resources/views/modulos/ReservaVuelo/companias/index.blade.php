@extends('layouts.app')

@section('content')
	<div class="card-deck">
	@foreach($companias as $compania)
		<div class="col-sm">
			<div class="card card-companias" style="width: 18rem;">
  				<div class="card-body">
   					<h5 class="card-title">{{$compania->nombre}}</h5>
					<p class="card-text">{{$compania->direccion}}</p>
					<center>
					<a href="#" class="btn btn-danger btn-companias" style="vertical-align:middle"><span>Editar </span> </a>
					</center>
  				</div>
			</div>
		</div>
	@endforeach
	</div>
@endsection