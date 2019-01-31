<form action="/hotel" method="get">
     <div class="card buy-card flex-fill">
          <div class="card-body buy-card-body">
               <!-- Línea 1 -->
               <div class="row justify-content-center">
                    <div class="col-12">
                         <!-- Input Destino -->
                         <center>
                              <label for="reserva-vehiculo-zona">
                                   <span> 
                                        Destino
                                   </span>
                              </label>
                         </center>
                         <div class="form-group">
                              <select 
                                   id="zona_id" 
                                   name="zona_id" 
                                   class="form-control selectpicker custom-select" 
                                   required>
                                   <option selected disabled>
                                        Seleccione su destino
                                   </option>
                                   @foreach ($hotels as $hotel)
                                   <option value="{{ $hotel->pais }}">
                                        {{ $hotel->pais }}
                                   </option>
                                   @endforeach
                              </select>
                         </div>
                    </div>
               </div>

               <!-- Línea 2 -->
               <div class="row justify-content-center">
                    <div class="col">
                         <center>
                              <!-- Input Entrada -->
                              <label for="fecha-entrada">
                                   <span> 
                                        Entrada
                                   </span>
                              </label>
                              <input 
                                   id="fecha-entrada" 
                                   name="fecha-entrada" 
                                   type="date"
                                   class="form-control"
                                   style="color:black;"
                                   required>
                         </center>
                    </div>
                    <div class="col">
                         <center>
                              <!-- Input Salida -->
                              <label for="fecha-salida">
                                   <span> 
                                        Salida
                                   </span>
                              </label>
                              <input 
                                   id="fecha-salida"
                                   name="fecha-salida"
                                   type="date" 
                                   class="form-control"
                                   style="color:black;"
                                   required>
                         </center>
                    </div>
               </div>
               </br>
               <!-- Línea 3 -->
               <div class="row justify-content-center">
                    <div class="col">
                         <!-- Input Habitaciones -->
                         <center>
                              <label for="habitaciones">
                                   <span> 
                                        Habitaciones 
                                   </span>
                              </label>
                         </center>
                         <input
                              class="form-control"
                              id="habitaciones"
                              name="habitaciones"
                              type="number"
                              min="0"
                              max="8"
                              placeholder="Número de habitaciones"
                              style="width:100%;" 
                              required>
                    </div>
                    <div class="col">
                         <!-- Input Personas -->
                         <center>
                              <label for="personas">
                                   <span> 
                                        Personas 
                                   </span>
                              </label>
                         </center>
                         <input
                              class="form-control"
                              id="personas"
                              name="personas"
                              type="number"
                              min="0"
                              max="8"
                              placeholder="Número de personas"
                              style="width:100%;" 
                              required>
                    </div>
               </div>
               </br>
               <center>
                    <button type="submit" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Encuentra su alojamiento</button> 
               </center>
          </div> 
     </div>
</form>