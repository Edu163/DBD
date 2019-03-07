<div class="form">
  @if (count($sell->packageReservation) != 0)
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark text-center">
          <tr>
              <th class="align-middle">Código de la compra</th>
              <th class="align-middle">Fecha de compra</th>
              <th class="align-middle">Monto pagado</th>
              <th class="align-middle">Zona</th>
              <th class="align-middle">Proveedor</th>
          </tr>
        </thead>
        <tbody class="text-center align-middle text-light">   
          @foreach ($sell->packageReservation as $packageReservation)
            <tr>
              <td class="align-middle">{{ $sell->source }}</td>
              <td class="align-middle">{{ $packageReservation->created_at }}</td>
              <td class="align-middle">{{ $packageReservation->monto_total }}</td>
              {{-- <td class="align-middle">{{ $packageReservation->vehicle->zone->nombre }}</td>
              <td class="align-middle">{{ $packageReservation->vehicle->vehicleProvider->politica_combustible }}</td> --}}
            </tr>
          @endforeach
        </tbody>
      </table> 
      </center>
    </div>
  @endif
</div>

