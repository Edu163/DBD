<div class="form">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Tipo de Vehículo</th>
                <th>Gamma</th>
                <th>Transmisión</th>
                <th>Tipo de Combustible</th>
                <th></th>
                <th></th>
            </tr>
      </thead>
      <tbody>
        @foreach($vehicles as $vehicle)
          <tr>
            <td>{{$vehicle->patente}}</td>
            <td>{{$vehicle->marca}}</td>
            <td>{{$vehicle->tipo}}</td>
            <td>{{$vehicle->gamma}}</td>
            <td>{{$vehicle->transmision}}</td>
            <td>{{$vehicle->combustible}}</td>
            <td>
            <center>
              <button type="submit" class="btn btn-primary btn-vehiculo" id="vehiculo_id" name="vehiculo_id" value="{{ $vehicle->id }}" style="vertical-align:middle"><span>Editar</span> </button>
            </center>
            </td>
            <td>
            <center>
              <button type="submit" class="btn btn-danger btn-vehiculo" id="vehiculo_id" name="vehiculo_id" value="{{ $vehicle->id }}" style="vertical-align:middle"><span>Eliminar</span> </button>
            </center>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table> 
    </center>
  </div>
</div>