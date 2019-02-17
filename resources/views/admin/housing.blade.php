<!-- Contenido del accordion de alojamiento -->
<div class="accordion" id="housingAccordion">

    <!-- Hoteles -->
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

    <!-- Reservas de Hoteles -->
    <div class="card">
        <div class="card-header" id="housingAccordionTwo">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#housingTwo" aria-expanded="false" aria-controls="housingTwo">
                    <i class="fas fa-fw fa-building"></i>
                    Reservas de Hoteles
                </button>
            </h5>
        </div>
        <div id="housingTwo" class="collapse" aria-labelledby="housingAccordionTwo" data-parent="#housingAccordion">
            <div class="card-body">
                @include('modules.housingReservation.hotelReservation.edit')
            </div>
        </div>
    </div>

    <!-- Detalles de Reservas de Hoteles -->
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
                @include('modules.housingReservation.hotelReservationDetail.edit')
            </div>
        </div>
    </div>
</div>