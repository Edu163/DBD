<!-- Modal -->
<form action="/admin/package" method="post">
  @method('POST')
  @csrf
  <div class="modal text-dark fade" id="modal-package-store" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Agregar Nuevo Paquete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label 
            for="hotel_room_id" 
            class="col-sm-4 col-form-label text-md-right"
            >
              {{ __('Hotel') }}
            </label>

            <div class="col-md-6">
                <select 
                  id="hotel_room_id" 
                  name="hotel_room_id" 
                  class="form-control selectpicker custom-select"
                  >        
                    @foreach ($hotels as $hotel)
                    <option value="">
                    </option>
                    <option value="{{ $hotel->id }}">
                      {{ $hotel->nombre }}
                    </option>
                    @endforeach
                </select>
            </div>
          </div>

          <div class="form-group row">
            <label 
            for="vehicle_id" 
            class="col-sm-4 col-form-label text-md-right"
            >
              {{ __('Vehículo') }}
            </label>

            <div class="col-md-6">
                <select 
                  id="vehicle_id" 
                  name="vehicle_id" 
                  class="form-control selectpicker custom-select"
                  >
                    @foreach ($vehicles as $vehicle)
                    <option value=null>
                    </option>
                    <option value={{ $vehicle->id }}>
                      {{ $vehicle->patente }}
                    </option>
                    @endforeach
                </select>
            </div>
          </div>

          <div class="form-group row">
              <label 
              for="type" 
              class="col-sm-4 col-form-label text-md-right"
              >
                {{ __('Tipo') }}
              </label>

              <div class="col-md-6">
                  <input 
                    id="type" 
                    name="type" 
                    type="number" 
                    class="form-control"  
                    min="1"
                    max="3"
                    required 
                    autofocus
                  >
              </div>
            </div>

            <div class="form-group row">
            <label 
            for="fecha_inicio" 
            class="col-sm-4 col-form-label text-md-right"
            >
              {{ __('Fecha de Inicio') }}
            </label>

            <div class="col-md-6">
              <div class="input-group">
                  <input 
                  id="fecha_inicio"
                  name="fecha_inicio"
                  type="date"
                  class="form-control"
                  style="color:black;"
                  required>
                  <span class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                  </span>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label 
            for="fecha_fin" 
            class="col-sm-4 col-form-label text-md-right"
            >
              {{ __('Fecha de Fin') }}
            </label>

            <div class="col-md-6">
              <div class="input-group">
                  <input 
                  id="fecha_fin"
                  name="fecha_fin"
                  type="date"
                  class="form-control"
                  style="color:black;"
                  required>
                  <span class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                  </span>
              </div>
            </div>
          </div>

          <div class="form-group row">
              <label 
              for="precio" 
              class="col-sm-4 col-form-label text-md-right"
              >
                {{ __('Precio') }}
              </label>

              <div class="col-md-6">
                  <input 
                    id="precio" 
                    name="precio" 
                    type="number" 
                    class="form-control"  
                    required 
                    autofocus
                  >
              </div>
            </div>

            <div class="col-md-6">
                <input 
                  id="precio" 
                  name="precio" 
                  type="hidden" 
                  class="form-control" 
                  value=1
                >
            </div>

          <input type="hidden" name="actual_user_id" id="actual_user_id" value="{{ Crypt::encrypt(Auth::user()->id) }}">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-galaxy">Guardar cambios</button>
          <button type="button" class="btn btn-danger btn-galaxy" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</form>
