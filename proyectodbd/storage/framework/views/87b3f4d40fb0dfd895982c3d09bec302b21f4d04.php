<form action="/vehiculo" method="get">
<div class="auto-field field item-component">
    <div class="card buy-card flex-fill">
        <div class="card-body buy-card-body">
            <!-- Línea 1 -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Input Origen -->
                    <div class="box-component col-xs-12 col-md-12 field-origin box-no-margin">
                        <div class="box-input col-xs-12 col-sm-push-0 col-sm-12 inner-shadow-box">
                            <label for="reserva-vehiculo-zona">
                                <span> 
                                    Zona
                                </span>
                                <span class="placeholder sr-only" data-text="Zona">
                                    Zona
                                </span>
                            </label>
                            <span id="reserva-vehiculo-zona-error" class="errorHelpText sr-only"></span>
                            <span id="help-reserva-vehiculo-zona" class="helpText sr-only" data-text=""></span>
                            <div class="form-group">
                                <select 
                                id="zona_id" 
                                name="zona_id" 
                                class="form-control selectpicker custom-select" 
                                title="Zona"
                                class="custom-select"
                                data-live-search="true"
                                aria-required="true" 
                                dir="ltr" 
                                aria-readonly="false" 
                                aria-describedby="compra-vuelo-origen-error" 
                                aria-disabled="false" 
                                autocomplete="off" 
                                placeholder = "" 
                                required>
                                    <option selected disabled>Elija la zona</option>
                                    <?php $__currentLoopData = $zonas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($zona->id); ?>">
                                        <?php echo e($zona->nombre); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
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
                            <input id="fecha-recogida" name="fecha-recogida" class="ui-autocomplete-input textbox-n"  type="date" placeholder="Fecha" aria-required="true" dir="ltr" aria-readonly="false" aria-describedby="fecha-recogida-error" aria-disabled="false" autocomplete="off">
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
				<button type="submit" class="btn-vehiculo">Busca tu vehiculo</button>
			</center>
        </div>
    </div>
</div>
</form>