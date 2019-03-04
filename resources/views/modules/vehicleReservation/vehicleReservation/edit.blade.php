  <div class="form">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark text-center">
              <tr>
                  <th class="align-middle">Nombre de Usuario</th>
                  <th class="align-middle">Fecha de la Reserva</th>
                  <th class="align-middle">Monto total</th>
                  <th class="align-middle"></th>
              </tr>
        </thead>
        <tbody class="text-center align-middle">
          @foreach($vehicleReservations as $vehicleReservation)
            <tr>
              <td class="align-middle">{{$vehicleReservation->sell->user->name}}</td>
              <td class="align-middle">{{$vehicleReservation->fecha}}</td>
              <td class="align-middle">{{$vehicleReservation->monto_total}}</td>
              <td class="align-middle">
              <form action="/admin/vehicleReservation/{{ $vehicleReservation->id }}" method="post">
                @method('DELETE')
                @csrf
              <center>
                <button type="submit" class="btn btn-danger" id="vehicleReservation" name="vehicleReservation"><span>Eliminar</span> </button>
              </center>
              </form>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table> 
      </center>
    </div>
  </div>

