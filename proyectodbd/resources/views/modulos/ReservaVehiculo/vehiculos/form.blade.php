<div class="auto-field field item-component">
    <div class="card buy-card flex-fill">
        <div class="card-body buy-card-body">
            <!-- Línea 1 -->
            <div class="row justify-content-center">
                <div class="col-12">
                <form action="/reserva_vehiculo" method="post">
                    {{ csrf_field() }}
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
                            <label for="reserva-vehiculo-recogida">
                                <span> 
                                    Fecha de recogida
                                </span>
                                <span class="placeholder sr-only" data-text="Fecha de recogida">
                                    Fecha
                                </span>
                            </label>
                            <span id="reserva-vehiculo-recogida-error" class="errorHelpText sr-only"></span>
                            <span id="help-reserva-vehiculo-recogida" class="helpText sr-only" data-text=""></span>
                            <input id="reserva-vehiculo-recogida" class="ui-autocomplete-input textbox-n" name="ida" type="date" placeholder="Fecha" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="compra-vuelo-origen-error" aria-disabled="false" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Input Fecha de devolución: -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="reserva-vehiculo-devolucion">
                                <span> 
                                    Fecha de devolución:
                                </span>
                                <span class="placeholder sr-only" data-text="Fecha de devolución:">
                                    Fecha 
                                </span>
                            </label>
                            <span id="reserva-vehiculo-devolucion-error" class="errorHelpText sr-only"></span>
                            <span id="help-reserva-vehiculo-devolucion" class="helpText sr-only" data-text=""></span>
                            <input id="reserva-vehiculo-devolucion" class="ui-autocomplete-input textbox-n" name="devolucion" type="date" placeholder="Fecha" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="compra-vuelo-origen-error" aria-disabled="false" autocomplete="off">
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
                            <label for="reserva-vehiculo-pasajeros">
                                <span> 
                                    Pasajeros 
                                </span>
                            </label>
                            <span id="reserva-vehiculo-pasajeros-error" class="errorHelpText sr-only"></span>
                            <span id="help-reserva-vehiculo-pasajeros" class="helpText sr-only" data-text=""></span>
                            <input
                            class="form-control"
                            id="reserva-vehiculo-pasajeros"
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
					<a href="/vehiculo" class="btn-hoteles" style="vertical-align:middle;" style="margin-top:6px;" >
                        <span>Busca tu vehiculo</span> 
                    </a>
					</center>	
        </form>
        </div>
    </div>
</div>