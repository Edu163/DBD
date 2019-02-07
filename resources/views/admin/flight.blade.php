<!-- Contenido del accordion de aéreo -->
<div class="accordion" id="flighAccordion">

    <!-- Vuelos -->
    <div class="card">
        <div class="card-header" id="flightAccordionOne">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#flightOne" aria-expanded="false" aria-controls="flightOne">
                    <i class="fas fa-fw fa-plane"></i>
                    Vuelos
                </button>
                <button class="btn btn-success">
                  Agregar
                </button>
            </h5>
        </div>
        <div id="flightOne" class="collapse" aria-labelledby="flightAccordionOne" data-parent="#flighAccordion">
            <div class="card-body">
                @include('modules.flightReservation.flight.edit')
            </div>
        </div>
    </div>

    <!-- Reservas de Vuelo -->
    <div class="card">
        <div class="card-header" id="flightAccordionTwo">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#flightTwo" aria-expanded="false" aria-controls="flightTwo">
                    <i class="fas fa-fw fa-plane"></i>
                    Reserva de Vuelos
                </button>
            </h5>
        </div>
        <div id="flightTwo" class="collapse" aria-labelledby="flightAccordionTwo" data-parent="#flighAccordion">
            <div class="card-body">

            </div>
        </div>
    </div>

    <!-- Detalles de Reservas de Vuelos -->
    <div class="card">
        <div class="card-header" id="flightAccordionThree">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#flightThree" aria-expanded="false" aria-controls="flightThree">
                    <i class="fas fa-fw fa-plane"></i>
                    Detalles de Reservas de Vuelos
                </button>
            </h5>
        </div>
        <div id="flightThree" class="collapse" aria-labelledby="flightAccordionThree" data-parent="#flighAccordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
</div>