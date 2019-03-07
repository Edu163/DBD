<div class="form">
  @if (count($sell->packageReservation) != 0)
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark text-center">
          <tr>
              <th class="align-middle">Código de la compra</th>
              <th class="align-middle">Fecha de compra</th>
              <th class="align-middle">Monto pagado</th>
              <th class="align-middle">Hotel</th>
              <th class="align-middle">Destino</th>
              <th class="align-middle">Duración</th>
              <th class="align-middle">Patente</th>
              <th class="align-middle">Marca</th>
              <th class="align-middle">Tipo</th>
          </tr>
        </thead>
        <tbody class="text-center align-middle text-light">   
          @foreach ($sell->packageReservation as $packageReservation)
            <tr>
              <td class="align-middle">{{ $sell->source }}</td>
              <td class="align-middle">{{ $packageReservation->created_at }}</td>
              <td class="align-middle">{{ $packageReservation->monto_total }}</td>
              @if ($packageReservation->package->hotel != null)
              <td class="align-middle">{{ $packageReservation->package->hotel->nombre }}</td>
              <td class="align-middle">{{ $packageReservation->package->hotel->ciudad }}</td>
              @else
                  <td class="align-middle">No aplica</td>
                  <td class="align-middle">No aplica</td>
              @endif
              <td class="align-middle">{{ $packageReservation->package->getDias() }}</td>
              @if ($packageReservation->package->vehicle != null)
              <td class="align-middle">{{ $packageReservation->package->vehicle->patente }}</td>
              <td class="align-middle">{{ $packageReservation->package->vehicle->marca }}</td>
              <td class="align-middle">{{ $packageReservation->package->vehicle->tipo }}</td>
              @else 
                <td class="align-middle">No aplica</td>
                <td class="align-middle">No aplica</td>
                <td class="align-middle">No aplica</td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table> 
      </center>
    </div>
  @endif
</div>

