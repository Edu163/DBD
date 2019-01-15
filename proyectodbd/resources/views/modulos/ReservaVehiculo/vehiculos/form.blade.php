<div class="auto-field field item-component">
    <div class="card buy-card flex-fill">
        <div class="card-body buy-card-body">
            <!-- Línea 1 -->
            <div class="row justify-content-around">
                <form action="/reserva_vehiculo" method="post">
                    {{ csrf_field() }}

                    <!-- Input Origen -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-origen">
                                <span for="zona_id"> 
                                    Zona
                                </span>
                                <div class="form-group">
                                    <select id="zona_id" name="zona_id" class="form-control selectpicker" title="Zona" data-live-search="true">
                                        @foreach ($zonas as $zona)
                                        <option value="{{ $zona->id }}">
                                            {{ $zona->nombre }}, {{ $zona->direccion }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </label>
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
                            <label for="compra-vuelo-ida">
                                <span> 
                                    Fecha de recogida
                                </span>
                                <span class="placeholder sr-only" data-text="Fecha de recogida">
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
                    <!-- Input Fecha de devolución: -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="compra-vuelo-vuelta">
                                <span> 
                                    Fecha de devolución:
                                </span>
                                <span class="placeholder sr-only" data-text="Fecha de devolución:">
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
                                <span class="placeholder sr-only" data-text="Fecha">
                                    Fecha 
                                </span>
                            </label>
                            <span id="compra-vuelo-vuelta-error" class="errorHelpText sr-only"></span>
                            <span id="help-compra-vuelo-vuelta" class="helpText sr-only" data-text=""></span>
                        </div>
                    </div>
                </div>
            </div> 
        </form>
        </div>
    </div>
</div>