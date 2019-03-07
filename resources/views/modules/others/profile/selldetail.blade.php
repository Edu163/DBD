@extends('layouts.app')

@section('content')

@foreach ($sells as $sell)
    <div class="container">
        <div class="card">
            <div class="card-header text-dark">
                Venta: {{ $sell->source }}
            </div>
            <div class="card-body">
                <div class="row">
            @if (count($sell->flightSellDetail) != 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Vuelos</th>
                        </tr>
                    </thead>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="align-middle">Tipo de Vuelo</th>
                            <th class="align-middle">Pasajeros</th>
                            <th class="align-middle">Origen</th>
                            <th class="align-middle">Destino</th>
                            <th class="align-middle">Número de Escalas</th>
                            <th class="align-middle">Cabina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sell->flightSellDetail as $flightSellDetail)
                        <tr>
                            @if ($flightSellDetail->flight_id == null)
                                <td class="align-middle">Ida y Vuelta</td> 
                                <td class="align-middle">{{ $flightSellDetail->cantidad}}</td>
                                <td class="align-middle">{{ $flightSellDetail->roundtrip->vueloIda->origin->nombre }}</td>
                                <td class="align-middle">{{ $flightSellDetail->roundtrip->vueloIda->destiny->nombre  }}</td>
                                <td class="align-middle">Ida:{{ $flightSellDetail->roundtrip->vueloIda->escalas }} Vuelta:{{ $flightSellDetail->roundtrip->vueloVuelta->escalas }}</td>
                                <td class="align-middle">{{ $flightSellDetail->tipo }}</td>
                            @else
                                <td class="align-middle">Sólo ida</td>
                                <td class="align-middle">{{ $flightSellDetail->cantidad }}</td>
                                <td class="align-middle">{{ $flightSellDetail->flight->origin->nombre }}</td>
                                <td class="align-middle">{{ $flightSellDetail->flight->destiny->nombre }}</td>
                                <td class="align-middle">{{ $flightSellDetail->flight->escalas }}</td>
                                <td class="align-middle">{{ $flightSellDetail->tipo }}</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            @if (count($sell->hotelReservation) != 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Hoteles</th>
                        </tr>
                    </thead>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="align-middle">Zona</th>
                            <th class="align-middle">Patente</th>
                            <th class="align-middle">Marca</th>
                            <th class="align-middle">Tipo</th>
                            <th class="align-middle">Transmisión</th>
                            <th class="align-middle">Combustible</th>
                            <th class="align-middle">A/Acondicionado</th>
                            <th class="align-middle">Precio/día</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sell->hotelReservation as $hotelReservation)
                        <tr>
                            <td class="align-middle">{{ $hotelReservation->vehicle->zone->nombre }}</td>
                            <td class="align-middle">{{ $hotelReservation->vehicle->patente }}</td>
                            <td class="align-middle">{{ $hotelReservation->vehicle->marca }}</td>
                            <td class="align-middle">{{ $hotelReservation->vehicle->tipo }}</td>
                            <td class="align-middle">{{ $hotelReservation->vehicle->transmision }}</td>
                            <td class="align-middle">{{ $hotelReservation->vehicle->combustible }}</td>
                            <td class="align-middle">{{ $hotelReservation->vehicle->aire_acondicionado }}</td>
                            <td class="align-middle">{{ $hotelReservation->vehicle->precio }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            @if (count($sell->vehicleReservation) != 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Vehículos</th>
                        </tr>
                    </thead>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="align-middle">Zona</th>
                            <th class="align-middle">Patente</th>
                            <th class="align-middle">Marca</th>
                            <th class="align-middle">Tipo</th>
                            <th class="align-middle">Transmisión</th>
                            <th class="align-middle">Combustible</th>
                            <th class="align-middle">A/Acondicionado</th>
                            <th class="align-middle">Precio/día</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sell->vehicleReservation as $vehicleReservation)
                        <tr>
                            <td class="align-middle">{{ $vehicleReservation->vehicle->zone->nombre }}</td>
                            <td class="align-middle">{{ $vehicleReservation->vehicle->patente }}</td>
                            <td class="align-middle">{{ $vehicleReservation->vehicle->marca }}</td>
                            <td class="align-middle">{{ $vehicleReservation->vehicle->tipo }}</td>
                            <td class="align-middle">{{ $vehicleReservation->vehicle->transmision }}</td>
                            <td class="align-middle">{{ $vehicleReservation->vehicle->combustible }}</td>
                            <td class="align-middle">{{ $vehicleReservation->vehicle->aire_acondicionado }}</td>
                            <td class="align-middle">{{ $vehicleReservation->vehicle->precio }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            @if (count($sell->insuranceReservation) != 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Seguros</th>
                        </tr>
                    </thead>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="align-middle">Zona</th>
                            <th class="align-middle">Tipo</th>
                            <th class="align-middle">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sell->insuranceReservation as $insuranceReservation)
                        <tr>
                            <td class="align-middle">{{ $insuranceReservation->insurance->zone->nombre }}</td>
                            <td class="align-middle">{{ $insuranceReservation->insurance->groupsize }}</td>
                            <td class="align-middle">{{ $insuranceReservation->insurance->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            @if (count($sell->packageReservation) != 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Paquetes</th>
                        </tr>
                    </thead>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="align-middle">Zona</th>
                            <th class="align-middle">Tipo</th>
                            <th class="align-middle">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sell->packageReservation as $packageReservation)
                        <tr>
                            <td class="align-middle">{{ $packageReservation->package->zone->nombre }}</td>
                            <td class="align-middle">{{ $packageReservation->package->groupsize }}</td>
                            <td class="align-middle">{{ $packageReservation->package->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
            </div>
        </div>
    </div>
@endforeach
@endsection