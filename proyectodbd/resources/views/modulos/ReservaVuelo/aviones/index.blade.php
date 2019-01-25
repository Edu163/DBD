@extends('layouts.app')

@section('content')
	<div class="card-deck">
	@foreach($aviones as $avion)
		<div class="col-sm">
			<div class="card card-companias" style="width: 18rem;">
  				<div class="card-body">
   					<h5 class="card-title">{{$avion->modelo}}</h5>
					<p class="card-text">{{$avion->compania->nombre}}</p>
					<center>
					<a href="#" class="btn btn-danger btn-companias" style="vertical-align:middle"><span>Editar </span> </a>
					</center>
  				</div>
			</div>
		</div>
	@endforeach
	</div>
@endsection