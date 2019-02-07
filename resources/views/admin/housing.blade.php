<!-- Contenido del accordion de alojamiento -->
<div class="accordion" id="housingAccordion">

    <!-- Vehículos -->
    <div class="card">
        <div class="card-header" id="housingAccordionOne">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#housingOne" aria-expanded="false" aria-controls="housingOne">
                    <i class="fas fa-fw fa-building"></i>
                    Hoteles
                </button>
                <form action="/hotel/" method="post">
                    @method('POST')
                    @csrf
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-hotel-store">
                        Agregar
                    </button>
                    @include('modules.housingReservation.hotel.store')
                </form>
            </h5>
        </div>
        <div id="housingOne" class="collapse" aria-labelledby="housingAccordionOne" data-parent="#housingAccordion">
            <div class="card-body">
                @include('modules.housingReservation.hotel.edit')
            </div>
        </div>
    </div>

    <!-- Reservas de Vehículo -->
    <div class="card">
        <div class="card-header" id="housingAccordionTwo">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#housingTwo" aria-expanded="false" aria-controls="housingTwo">
                    <i class="fas fa-fw fa-building"></i>
                    Reserva de Hoteles
                </button>
            </h5>
        </div>
        <div id="housingTwo" class="collapse" aria-labelledby="housingAccordionTwo" data-parent="#housingAccordion">
            <div class="card-body">
                
            </div>
        </div>
    </div>

    <!-- Detalles de Reserva de vehículos -->
    <div class="card">
        <div class="card-header" id="housingAccordionThree">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#housingThree" aria-expanded="false" aria-controls="housingThree">
                    <i class="fas fa-fw fa-building"></i>
                    Detalles de Reservas de Hoteles
                </button>
            </h5>
        </div>
        <div id="housingThree" class="collapse" aria-labelledby="housingAccordionThree" data-parent="#housingAccordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
</div>