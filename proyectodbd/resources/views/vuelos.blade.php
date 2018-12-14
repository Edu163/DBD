@foreach ($vuelos as $vuelo)
	<h1>{{ $vuelo->precio}} <small>Avion: {{$vuelo->detalleVentaVuelo->cantidad}}</small></h1>
@endforeach
