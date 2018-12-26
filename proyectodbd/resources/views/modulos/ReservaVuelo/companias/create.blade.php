@extends('layouts.app')

@section('content')
	<form class="form-group" method="POST" action="/companias">
		<div class="container">
			<head>
				<title>Crear - compania</title>
				<div class="card-header">{{ __('Ingresar compania') }}</div>
			</head>
			<body>
				<div class="card-body">
					<div class="container">	
						@csrf
						<div class="form-group">
							
							<label for="">Nombre: </label>
							<input type="text" name="nombre" class="form-control">
						</div>
						<div class="form-group">
							
							<label for="">Direccion: </label>
							<input type="text" name="direccion" class="form-control">
						</div>
			
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</body>
		</div>
	</form>
@endsection