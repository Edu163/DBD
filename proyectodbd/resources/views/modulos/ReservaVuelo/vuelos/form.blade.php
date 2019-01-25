<form action="/detallesVuelos" method="get" class="body-vuelo">
<div class="auto-field field item-component">
    <div class="card buy-card flex-fill">
        <div class="card-body buy-card-body">
            <!-- Línea 1 -->
            <div class="row justify-content-around">
                <div class="col-6">
                    <!-- Input Origen -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-origen">
                                <span> 
                                    Origen 
                                </span>
                                <span class="placeholder sr-only" data-text="Ciudad o aeropuerto">
                                    Ciudad
                                </span>
                            </label>
                            <span id="compra-vuelo-origen-error" class="errorHelpText sr-only"></span>
                            <span id="help-compra-vuelo-origen" class="helpText sr-only" data-text=""></span>
                            <select 
                                id="origen_id" 
                                name="origen_id" 
                                class="form-control selectpicker custom-select" 
                                title="Aeropuerto" 
                                data-live-search="true" 
                                required>
                                <option selected disabled>Ciudad de origen</option>
                                    @foreach ($aeropuertos as $aeropuerto)
                                    <option value="{{ $aeropuerto->id }}">
                                        {{ $aeropuerto->ciudad }}
                                    </option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Input Destino -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-destino">
                                <span> 
                                    Destino 
                                </span>
                                <span class="placeholder sr-only" data-text="Ciudad o aeropuerto">
                                    Ciudad
                                </span>
                            </label>
                            <span id="compra-vuelo-destino-error" class="errorHelpText sr-only"></span>
                            <span id="help-compra-vuelo-destino" class="helpText sr-only" data-text=""></span>
                            <select 
                                id="destino_id" 
                                name="destino_id" 
                                class="form-control selectpicker custom-select" 
                                title="Aeropuerto" 
                                data-live-search="true" 
                                required>
                                <option selected disabled>Ciudad de destino</option>
                                    @foreach ($aeropuertos as $aeropuerto)
                                    <option value="{{ $aeropuerto->id }}">
                                        {{ $aeropuerto->ciudad }}
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
                            <label for="compra-vuelo-ida">
                                <span> 
                                    Ida 
                                </span>
                                <span class="placeholder sr-only" data-text="Ciudad o aeropuerto">
                                    Fecha
                                </span>
                            </label>
                            <span id="compra-vuelo-ida-error" class="errorHelpText sr-only"></span>
                            <span id="help-compra-vuelo-ida" class="helpText sr-only" data-text=""></span>
                            <input id="compra-vuelo-ida" class="ui-autocomplete-input textbox-n" name="ida" type="text" onfocus="(this.type='date')" placeholder="Fecha" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="compra-vuelo-origen-error" aria-disabled="false" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Input Vuelta -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-vuelta">
                                <span> 
                                    Vuelta
                                </span>
                                <span class="placeholder sr-only" data-text="Fecha">
                                    Fecha 
                                </span>
                            </label>
                            <span id="compra-vuelo-vuelta-error" class="errorHelpText sr-only"></span>
                            <span id="help-compra-vuelo-vuelta" class="helpText sr-only" data-text=""></span>
                            <input id="compra-vuelo-vuelta" class="ui-autocomplete-input textbox-n" name="destino" type="text" onfocus="(this.type='date')" placeholder="Fecha" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="compra-vuelo-origen-error" aria-disabled="false" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div> 
            </br>
            <!-- Línea 3 -->
            <div class="row justify-content-around">
                <div class="col-6">
                    <!-- Input Pasajeros -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-pasajeros">
                                <span> 
                                    Pasajeros 
                                </span>
                            </label>
                            <span id="compra-vuelo-pasajeros-error" class="errorHelpText sr-only"></span>
                            <span id="help-compra-vuelo-pasajeros" class="helpText sr-only" data-text=""></span>
                            <input
                            class="form-control"
                            id="pasajerosVuelo_id"
                            name="pasajerosVuelo"
                            type="number"
                            min="0"
                            placeholder="Número de pasajeros"
                            style="width:100%;" 
                            required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Input Cabina -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-vuelta">
                                <span> 
                                    Cabina
                                </span>

                            </label>
                            <span id="compra-vuelo-vuelta-error" class="errorHelpText sr-only"></span>
                            <span id="help-compra-vuelo-vuelta" class="helpText sr-only" data-text=""></span>
                            <select 
                            id="tipo_id" 
                            name="tipo" 
                            class="form-control selectpicker custom-select" 
                            data-live-search="true" 
                            required>
                                <option value="" selected disabled hidden>Elige aquí</option>
                                <option value="1">First Class</option>
                                <option value="2">Bussiness</option>
                                <option value="3">Economy</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> 
            <center>
				<button type="submit" class="btn-vehiculo">Busca tu vuelo</button>
			</center>
        </div>
    </div>
</div>