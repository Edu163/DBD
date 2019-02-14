  <div class="form">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark text-center">
              <tr>
                  <th class="align-middle">Precio</th>
                  <th class="align-middle">Duración del Vuelo</th>
                  <th class="align-middle"></th>
                  <th class="align-middle"></th>
              </tr>
        </thead>
        <tbody class="text-center align-middle">
          @foreach($flights as $flight)
            <tr>
              <td class="align-middle">{{$flight->precio}}</td>
              <td class="align-middle">{{$flight->duracion_vuelo}}</td>
              <td class="align-middle">
              <center>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">
                  Editar
                </button>
              </center>
              </td>
              <td class="align-middle">
              <form action="/flight/{{ $flight->id }}" method="post">
                @method('DELETE')
                @csrf
              <center>
                <button type="submit" class="btn btn-danger" id="flight" name="flight"><span>Eliminar</span> </button>
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

