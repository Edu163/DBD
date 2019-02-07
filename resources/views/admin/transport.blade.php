<!-- Contenido del accordion de transporte -->
<div class="accordion" id="vehicleAccordion">

    <!-- Vehículos -->
    <div class="card">
        <div class="card-header" id="vehicleAccordionOne">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#vehicleOne" aria-expanded="false" aria-controls="vehicleOne">
                    <i class="fas fa-fw fa-car"></i>
                    Vehículo
                </button>
                <form action="/vehicle/" method="post">
                    @method('POST')
                    @csrf
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-vehicle-store">
                        Agregar
                    </button>
                    @include('modules.vehicleReservation.vehicle.store')
                </form> 
            </h5>
        </div>
        <div id="vehicleOne" class="collapse" aria-labelledby="vehicleAccordionOne" data-parent="#vehicleAccordion">
            <div class="card-body">
                @include('modules.vehicleReservation.vehicle.edit')
            </div>
        </div>
    </div>

    <!-- Reservas de Vehículo -->
    <div class="card">
        <div class="card-header" id="vehicleAccordionTwo">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#vehicleTwo" aria-expanded="false" aria-controls="vehicleTwo">
                    <i class="fas fa-fw fa-car"></i>
                    Reserva de Vehículos
                </button>
            </h5>
        </div>
        <div id="vehicleTwo" class="collapse" aria-labelledby="vehicleAccordionTwo" data-parent="#vehicleAccordion">
            <div class="card-body">
                @include('modules.vehicleReservation.vehicleReservation.edit')
            </div>
        </div>
    </div>

    <!-- Detalles de Reserva de vehículos -->
    <div class="card">
        <div class="card-header" id="vehicleAccordionThree">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#vehicleThree" aria-expanded="false" aria-controls="vehicleThree">
                    <i class="fas fa-fw fa-car"></i>
                    Detalles de Reservas de Vehículos
                </button>
            </h5>
        </div>
        <div id="vehicleThree" class="collapse" aria-labelledby="vehicleAccordionThree" data-parent="#vehicleAccordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
</div>