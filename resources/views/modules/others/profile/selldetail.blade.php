<!-- Modal Centered -->
<center>
<div class="modal fade" id="modal-sell-{{ $sell->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-sell-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width:110% !important;">
            <div class="modal-header" style="color: black;">
                <h5 class="modal-title" id="exampleModalCenterTitle">Venta: {{$sell->source}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="color: white; background-color: white !important; overflow-x: auto;">
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
                    @if (count($sell->housingReservation) != 0)
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
                                @foreach ($sell->housingReservation as $housingReservation)
                                <tr>
                                    <td class="align-middle">{{ $housingReservation->vehicle->zone->nombre }}</td>
                                    <td class="align-middle">{{ $housingReservation->vehicle->patente }}</td>
                                    <td class="align-middle">{{ $housingReservation->vehicle->marca }}</td>
                                    <td class="align-middle">{{ $housingReservation->vehicle->tipo }}</td>
                                    <td class="align-middle">{{ $housingReservation->vehicle->transmision }}</td>
                                    <td class="align-middle">{{ $housingReservation->vehicle->combustible }}</td>
                                    <td class="align-middle">{{ $housingReservation->vehicle->aire_acondicionado }}</td>
                                    <td class="align-middle">{{ $housingReservation->vehicle->precio }}</td>
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

            <div class="modal-footer" style="color: grey; ">
                <button type="button" class="btn btn-danger btn-galaxy" data-dismiss="modal">Volver</button>
            </div>
        </div>
    </div>
</div>
</center>