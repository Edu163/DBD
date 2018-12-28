@foreach ($aviones as $avion)
	<h1><small>Avion: {{ $avion->modelo}}</small> <small>compania: {{$avion->compania->nombre}}</small></h1>
@endforeach
