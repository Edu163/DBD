<!-- Contenido del accordion de transporte -->
<div class="accordion" id="packageAccordion">

    <!-- Paquetes -->
    <div class="card">
        <div class="card-header" id="packageAccordionOne">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#packageOne" aria-expanded="false" aria-controls="packageOne">
                    <i class="fas fa-heartbeat"></i>
                    Seguros
                </button>
                <form action="/admin/package/" method="post">
                    @method('POST')
                    @csrf
                    <button type="button" class="btn btn-success btn-galaxy" data-toggle="modal" data-target="#modal-package-store">
                        Agregar
                    </button>
                    @include('modules.others.package.store')
                </form> 
            </h5>
        </div>
        <div id="packageOne" class="collapse" aria-labelledby="packageAccordionOne" data-parent="#insuranceAccordion">
            <div class="card-body">
                @include('modules.others.package.edit')
            </div>
        </div>
    </div>

    <!-- Reservas de Paquetes -->
    <div class="card">
        <div class="card-header" id="packageAccordionTwo">
            <h5 class="d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#insuranceTwo" aria-expanded="false" aria-controls="insuranceTwo">
                    <i class="fas fa-heartbeat"></i>
                    Reservas de Seguros
                </button>
            </h5>
        </div>
        <div id="packageTwo" class="collapse" aria-labelledby="packageAccordionTwo" data-parent="#insuranceAccordion">
            <div class="card-body">
                @include('modules.others.packageReservation.edit')
            </div>
        </div>
    </div>
</div>