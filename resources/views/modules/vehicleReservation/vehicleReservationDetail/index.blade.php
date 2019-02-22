<!-- Modal -->
<form action="/vehicleReservationDetail" method="post" onsubmit="return confirm('¿Esta seguro que desea agregar al carro?')">
  @method('POST')
  @csrf
  <div class="modal fade" id="modal-vehicle-reservation-{{ $vehicle->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-vehicle-reservation-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        {{-- <div class="modal-header" style="color: grey;">
          <h5 class="modal-title" id="exampleModalCenterTitle">Vehículo Patente: {{$vehicle->patente}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-light">
            <h4><sup>$</sup>{{ $vehicle->precio }}</h4>
            <h3 style="color: grey">{{ $vehicle->marca }}</h3>
            <img class="img-fluid" src="https://picsum.photos/200/200?image={{ mt_rand(1, 50) }}" style="padding-bottom: 8% !important;">
            <ul>
                <li><i class="ion-android-checkmark-circle"></i>Patente: {{ $vehicle->patente }}</li>
                <li><i class="ion-android-checkmark-circle"></i>Marca: {{ $vehicle->marca }}</li>
                <li><i class="ion-android-checkmark-circle"></i>Tipo: {{ $vehicle->tipo }}</li>
                <li><i class="ion-android-checkmark-circle"></i>Gamma: {{ $vehicle->gamma }}</li>
                <li><i class="ion-android-checkmark-circle"></i>Transmisión: {{ $vehicle->transmision }}</li>
                <li><i class="ion-android-checkmark-circle"></i>Combustible: {{ $vehicle->combustible }}</li>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-galaxy">Reservar Vehículo</button>
          <button type="button" class="btn btn-danger btn-galaxy" data-dismiss="modal">Volver</button>
        </div> --}}
        <div class="modal-header" style="color: black;">
          <h5 class="modal-title" id="exampleModalCenterTitle">Vehículo Patente: {{$vehicle->patente}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body bg-light" style="color: grey;">
            <div class="row">
                <div class="col-6">
                <p class="modal-text">
                    <b>Marca</b>
                    <br>
                    {{ $vehicle->marca }}
                </p>

                <p class="modal-text">
                    <b>Tipo de Vehículo</b>
                    <br>
                    {{ $vehicle->tipo }}
                </p>

                <p class="modal-text">
                    <b>Gamma del Vehículo</b>
                    <br>
                    {{ $vehicle->gamma }}
                </p>

                <p class="modal-text">
                    <b>Tipo de Transmisión</b>
                    <br>
                    {{ $vehicle->transmision }}
                </p>

                <p class="modal-text">
                    <b>Tipo de Combustible</b>
                    <br>
                    {{ $vehicle->combustible }}
                </p>

                </div>
                <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="https://picsum.photos/600/300?image=0" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="https://picsum.photos/600/300?image=1" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="https://picsum.photos/600/300?image=2" alt="Third slide">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
            </div>
        </div>

        <div class="modal-footer" style="color: grey; ">
            <button type="submit" class="btn btn-success btn-galaxy">
                <i class="fas fa-cart-plus" style="margin-right: 3%;"></i>Reservar Vehículo</button>
            <button type="button" class="btn btn-danger btn-galaxy" data-dismiss="modal">Volver</button>
        </div>
      </div>
    </div>
  </div>
</form>