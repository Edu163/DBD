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
                            <label for="reserva-alojamiento-destino">
                                <span> 
                                    Destino 
                                </span>
                                <span class="placeholder sr-only" data-text="Destino">
                                    Destino
                                </span>
                            </label>
                            <span id="reserva-alojamiento-destino-error" class="errorHelpText sr-only"></span>
                            <span id="help-reserva-alojamiento-destino" class="helpText sr-only" data-text=""></span>
						<select 
                        id="destino_id" 
                        name="destino_id" 
                        class="custom-select" 
                        title="Destino" 
                        data-live-search="true" 
                        aria-required="true" 
                        dir="ltr" 
                        aria-readonly="false" 
                        aria-describedby="reserva-alojamiento-destino-error" 
                        aria-disabled="false" 
                        autocomplete="off" 
                        placeholder = "" 
                        required>
                            <option selected disabled>Seleccione su destino</option>
                            @foreach ($hoteles as $hotel)
                            <option value="{{ $hotel->pais }}">
                                {{ $hotel->pais }}
                            </option>
                            @endforeach
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
                            <label for="reserva-alojamiento-entrada">
                                <span> 
                                    Entrada 
                                </span>
                                <span class="placeholder sr-only" data-text="Entrada">
                                    Entrada
                                </span>
                            </label>
                            <span id="reserva-alojamiento-entrada-error" class="errorHelpText sr-only"></span>
                            <span id="help-reserva-alojamiento-entrada" class="helpText sr-only" data-text=""></span>
                            <input 
                            id="entrada"
                            class="ui-autocomplete-input textbox-n"
                            name="entrada" 
                            type="date"
                            aria-required="true" 
                            dir="ltr" 
                            aria-readonly="false" 
                            aria-describedby="compra-vuelo-origen-error" 
                            aria-disabled="false" 
                            autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Input Vuelta -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="reserva-alojamiento-salida">
                                <span> 
                                    Salida
                                </span>
                                <span class="placeholder sr-only" data-text="Salida">
                                    Salida
                                </span>
                            </label>
                            <span id="reserva-alojamiento-salida-error" class="errorHelpText sr-only"></span>
                            <input 
                            id="salida"
                            class="ui-autocomplete-input textbox-n"
                            name="salida"
                            type="date"
                            placeholder="Fecha"
                            aria-required="true"
                            dir="ltr"
                            aria-readonly="false"
                            aria-describedby="compra-vuelo-origen-error"
                            aria-disabled="false" autocomplete="off">
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
                            <label for="reserva-alojamiento-habitaciones">
                                <span> 
                                    Habitaciones 
                                </span>
                            </label>
                            <span id="reserva-alojamiento-habitaciones-error" class="errorHelpText sr-only"></span>
                            <input 
                            id="habitaciones" 
                            class="form-control" 
                            name="habitaciones" 
                            type='number' 
                            min= '0'
                            min= '3' 
                            placeholder="0" 
                            aria-required="true" 
                            dir="ltr" 
                            aria-readonly="false" 
                            aria-describedby="reserva-alojamiento-habitaciones-error" 
                            aria-disabled="false" 
                            autocomplete="off">
                        </div>
                    </div>
                </div>
				 <!-- Input Adultos -->
                <div class="col-6">
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="reserva-alojamiento-personas">
                                <span> 
                                    Personas 
                                </span>
                            </label>
                            <span id="reserva-alojamiento-personas-error" class="errorHelpText sr-only"></span>
                            <input 
                            id="personas"
                            class="form-control" 
                            name="personas" 
                            type='number' 
                            min= '0'
                            min= '8' 
                            placeholder="0" 
                            aria-required="true" 
                            dir="ltr" 
                            aria-readonly="false" 
                            aria-describedby="reserva-alojamiento-personas-error" 
                            aria-disabled="false" 
                            autocomplete="off">
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
					<button type="submit" class="btn-hoteles">Busca tu Hotel</button>
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