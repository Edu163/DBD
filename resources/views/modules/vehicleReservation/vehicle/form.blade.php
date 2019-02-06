<form action="/vehicle" method="get">
     <div class="card buy-card flex-fill">
          <div class="card-body buy-card-body">
               <!-- Línea 1 -->
               <div class="row justify-content-center">
                    <div class="col-12">
                         <center>
                              <!-- Input Zona -->
                              <label for="zone">
                                   <span> 
                                        Zona
                                   </span>
                              </label>
                         </center>
                         <div class="form-group">
                              <select 
                                   id="zone" 
                                   name="zone" 
                                   class="form-control selectpicker custom-select" 
                                   required>
                                   <option selected disabled>
                                        Seleccione su zona objetivo
                                   </option>
                                   @foreach ($zones as $zone)
                                   <option value="{{ $zone->id }}">
                                            {{ $zone->nombre }}
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
                              <!-- Input Fecha de recogida -->
                              <label for="fecha-recogida">
                                   <span> 
                                        Fecha de recogida
                                   </span>
                              </label>
                              <input 
                                   id="fecha-recogida" 
                                   name="fecha-recogida" 
                                   type="date"
                                   class="form-control"
                                   style="color:black;"
                                   required>
                         </center>
                    </div>
                    <div class="col">
                         <center>
                              <!-- Input Fecha de devolución -->
                              <label for="fecha-devolucion">
                                   <span> 
                                        Fecha de devolución
                                   </span>
                              </label>
                              <input 
                                   id="fecha-devolucion"
                                   name="fecha-devolucion"
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
                    <div class="col-12">
                         <!-- Input Pasajeros -->
                         <center>
                              <label for="pasajeros">
                                   <span> 
                                        Pasajeros 
                                   </span>
                              </label>
                         </center>
                         <input
                              class="form-control"
                              id="pasajeros"
                              name="pasajeros"
                              type="number"
                              min="1"
                              max="8"
                              placeholder="Número de pasajeros"
                              style="width:100%;" 
                              required>
                    </div>
               </div>
               </br>
               <center>
                    <button type="submit" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Encuentra tu vehículo</button> 
               </center>
               

          </div> 
     </div>
</form>