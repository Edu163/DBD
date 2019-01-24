@extends('layouts.app')
@section('content')
	<form class="form-group" method="POST" action="/aviones">
    
		<div class="container">
			<head>
				<title>Crear - avion</title>
				<div class="card-header">{{ __('Ingresar avion') }}</div>
			</head>
			<body>
				<div class="card-body">
					<div class="container">	
                    @csrf
						<div class="form-group">
							
							<label for="">Nombre: </label>
							<input type="text" name="modelo" class="form-control" required>
						</div>
						<div class="form-group">
							
							<label for="">Compania: </label>
							<select name="compania_id" class="custom-select" required>
                                <option selected disabled>Elija la compañia</option>
                                @foreach ($companias as $compania)
                                <option value="{{$compania->id}}">
                                    {{$compania->nombre}}
                                </option>
                                @endforeach
                            </select>
						</div>
			
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</body>
		</div>
	</form>
@endsection