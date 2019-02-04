<form action="/hotel" method="get" class="body-hotel">
<div class="auto-field field item-component">
    <div class="card buy-card flex-fill">
        <div class="card-body buy-card-body">
            <!-- Línea 1 -->
            <div class="row justify-content-around">
                <div class="col-12">
                    <!-- Input Destino -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-destino">
                                <span> 
                                    Destino 
                                </span>
                                <span class="placeholder sr-only" data-text="Ciudad">
                                    Ciudad
                                </span>
                            </label>
                            <span id="compra-vuelo-destino-error" class="errorHelpText sr-only"></span>
                            <span id="help-compra-vuelo-destino" class="helpText sr-only" data-text=""></span>
						<select id="destino_id" name="destino_id" class="custom-select" title="Destino" data-live-search="true" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="compra-vuelo-origen-error" aria-disabled="false" autocomplete="off" placeholder = "">
                            <option selected disabled>Seleccione su destino</option>
                            <?php $__currentLoopData = $hoteles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($hotel->pais); ?>">
                                <?php echo e($hotel->pais); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						</div>
                    </div>
                </div>
            </div>
			</br>
			<!-- Línea 2 -->
            <div class="row justify-content-around">
                <div class="col-6">
                    <!-- Input Ida -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-ida">
                                <span> 
                                    Entrada 
                                </span>
                                <span class="placeholder sr-only" data-text="Ciudad o aeropuerto">
                                    Ciudad
                                </span>
                            </label>
                            <span id="compra-vuelo-ida-error" class="errorHelpText sr-only"></span>
                            <span id="help-compra-vuelo-ida" class="helpText sr-only" data-text=""></span>
                            <input id="compra-vuelo-ida" class="ui-autocomplete-input textbox-n" name="ida" type="date" placeholder="Fecha" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="compra-vuelo-origen-error" aria-disabled="false" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Input Vuelta -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-vuelta">
                                <span> 
                                    Salida
                                </span>
                                <span class="placeholder sr-only" data-text="Fecha">
                                    Fecha 
                                </span>
                            </label>
                            <span id="compra-vuelo-vuelta-error" class="errorHelpText sr-only"></span>
                            
                            <input id="compra-vuelo-vuelta" class="ui-autocomplete-input textbox-n" name="destino" type="date" placeholder="Fecha" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="compra-vuelo-origen-error" aria-disabled="false" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div> 
			</br>
			<!-- Línea 3 -->
            <div class="row justify-content-around">
			 <!-- Input Adultos -->
                <div class="col-6">
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-pasajeros">
                                <span> 
                                    Habitaciones 
                                </span>
                            </label>
                            <span id="compra-vuelo-pasajeros-error" class="errorHelpText sr-only"></span>
                        
                            <input id="capacidad_adulto" class="form-control" name="capacidad_adulto" type='number' min= '0' placeholder="0" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="compra-vuelo-origen-error" aria-disabled="false" autocomplete="off">
                        </div>
                    </div>
                </div>
				 <!-- Input Adultos -->
                <div class="col-6">
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-pasajeros">
                                <span> 
                                    Personas 
                                </span>
                            </label>
                            <span id="compra-vuelo-pasajeros-error" class="errorHelpText sr-only"></span>
                        
                            <input id="capacidad_adulto" class="form-control" name="capacidad_adulto" type='number' min= '0' placeholder="0" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="compra-vuelo-origen-error" aria-disabled="false" autocomplete="off">
                        </div>
                    </div>
                </div>

				 </br>
			</div>
			</br>
			<!-- Línea 4 -->
			<div class="row justify-content-around">
                <div class="col-12">
				<div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">    
					<center>
					<button type="submit" class="btn-hoteles">Reserva tu Paquete</button>
					</center>	
                </div>
                </div>
			</div>
			</br>
			<!-- Línea 5 -->
			<div class="row justify-content-around">
                <div class="col-12">
				<div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
					
				

<!-- Pruebas fecha -->
				

					
                    </div>
                </div>
				</div>
			</br>

			</div>
			</div>
        </div>
    </div>
</div>
</form>

<script>
localStorage.setItem("pais", "Poland");

  let fechaEntrada = flatpickr('#fecha_entrada', {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      minDate: "today",
  });

  let fechaSalida = flatpickr('#fecha_salida', {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      minDate: "today",
  });

  fechaEntrada.set("onChange", 
  	function(d) {
      fechaSalida.set("minDate", d[0].fp_incr(1)
    );
  });
</script>