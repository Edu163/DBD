<div class="auto-field field item-component">
    <div class="card buy-card flex-fill">
        <div class="card-body buy-card-body">
            <form action="/detalle_reserva_vehiculo" method="get">
            <!-- Línea 1 -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Input Origen -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="reserva-vehiculo-zona">
                                <span for="zona_id"> 
                                    Zona
                                </span>
                                <div class="form-group">
                                    <select 
                                    id="zona_id" 
                                    name="zona_id" 
                                    class="form-control selectpicker custom-select" 
                                    title="Zona" 
                                    data-live-search="true" 
                                    required>
                                        <option selected disabled>Elija la zona</option>
                                        @foreach ($zonas as $zona)
                                        <option value="{{ $zona->id }}">
                                            {{ $zona->nombre }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </label>
                        </div>
                    </div>
                    </div>
            </div>
            </br>
            <!-- Línea 2 -->
            <div class="row justify-content-around">
                <div class="col-6">
                    <!-- Input Fecha de recogida -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="fecha-recogida">
                                <span> 
                                    Fecha de recogida
                                </span>
                                <span class="placeholder sr-only" data-text="Fecha de recogida">
                                    Fecha
                                </span>
                            </label>
                            <span id="fecha-recogida-error" class="errorHelpText sr-only"></span>
                            <span id="help-fecha-recogida" class="helpText sr-only" data-text=""></span>
                            <input id="fecha-recogida" name="fecha-recogida" class="ui-autocomplete-input textbox-n"  type="date" placeholder="Fecha" aria-required="true" dir="ltr" aria-readonly="false" aria-disabled="false" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Input Fecha de devolución: -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="fecha-devolucion">
                                <span> 
                                    Fecha de devolución:
                                </span>
                                <span class="placeholder sr-only" data-text="Fecha de devolución:">
                                    Fecha 
                                </span>
                            </label>
                            <span id="fecha-devolucion-error" class="errorHelpText sr-only"></span>
                            <span id="help-fecha-devolucion" class="helpText sr-only" data-text=""></span>
                            <input id="fecha-devolucion" name="fecha-devolucion" class="ui-autocomplete-input textbox-n" type="date" placeholder="Fecha" aria-required="true" dir="ltr" aria-readonly="false" aria-disabled="false" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div> 
            </br>
            <!-- Línea 3 -->
            <div class="row justify-content-around">
                <div class="col-12">
                    <!-- Input Pasajeros -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="pasajeros">
                                <span> 
                                    Pasajeros 
                                </span>
                            </label>
                            <span id="reserva-vehiculo-pasajeros-error" class="errorHelpText sr-only"></span>
                            <span id="help-reserva-vehiculo-pasajeros" class="helpText sr-only" data-text=""></span>
                            <input
                            class="form-control"
                            id="pasajeros"
                            name="pasajeros"
                            type="number"
                            min="0"
                            max="8"
                            placeholder="Número de pasajeros"
                            style="width:100%;" 
                            required>
                        </div>
                    </div>
                </div>
            </div> 
					<center>
					<a type="submit" class="btn-vehiculo" style="vertical-align:middle;" style="margin-top:6px;" >
                        <span>Busca tu vehiculo</span> 
                    </a>
					</center>	
        </form>
        </div>
    </div>
</div>
