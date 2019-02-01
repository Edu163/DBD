@extends('layouts.app')

@section('content')
    <div class="main app form" id="main"><!-- Main Section-->
        <div class="hero-section">
            <div class="container nopadding">
                <div class="col-md-12">
                    <div class="hero-content text-center">
                        <h1 class="wow fadeInUp" data-wow-delay="0.1s">¡Ve por el viaje que te mereces!</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"> No sigas esperando, tus vacaciones soñadas están a un solo click. </p>
                        <a href="#" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Ver Paquetes</a> 
                    </div>
                </div>
            </div>
        </div>

        <!-- Forms -->
        <div class="containerpy-4">
            <div class="col-md-6 offset-md-3" style="margin-top: -5%; margin-left: 24%; position: absolute;">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link buy-form-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <i class="fas fa-plane"></i>   
                                Vuelos
                            </a>
                            <a class="nav-link buy-form-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <i class="fas fa-car-side"></i>
                                Transporte
                            </a>
                            <a class="nav-link buy-form-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <i class="fas fa-building"></i>
                                Alojamiento
                            </a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                @include('modules.flightReservation.flight.form')
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @include('modules.vehicleReservation.vehicle.form')
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                @include('modules.housingReservation.hotel.form')
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package Section -->
        <div id="pricing" class="pricing-section text-center">
            <div class="container">
                <div class="col-md-12 col-sm-12 nopadding">
                    <div class="pricing-intro">
                        <h1 class="wow fadeInUp" data-wow-delay="0s">PAQUETES</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"> Lorem ipsum dolor sit. Incidunt laborum beatae earum nihil odio consequatur officiis <br class="hidden-xs">
                        tempore consequuntur officia ducimus unde doloribus quod unt repell </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
                            <div class="pricing-details">
                                <h2>Nombre de Paquete</h2>
                                <span>$49.50</span>
                                <ul>
                                <li>Consectetur adipiscing</li>
                                <li>Nunc luctus nulla et tellus</li>
                                <li>Suspendisse quis metus</li>
                                <li>Vestibul varius fermentum erat</li>
                                </ul>
                                <button class="btn btn-primary btn-action btn-fill">Reservar Paquete</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
                            <div class="pricing-details">
                                <h2>Nombre de Paquete</h2>
                                <span>$99.50</span>
                                <ul>
                                    <li>Consectetur adipiscing</li>
                                    <li>Nunc luctus nulla et tellus</li>
                                    <li>Suspendisse quis metus</li>
                                    <li>Vestibul varius fermentum erat</li>
                                </ul>
                                <button class="btn btn-primary btn-action btn-fill">Reservar Paquete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Client Section -->
        <div class="review-section" id="review">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="reviews owl-carousel owl-theme">
                        <div class="review-single"><img class="img-circle" src="images/customer1.png" alt="Client Testimonoal" />
                            <div class="review-text wow fadeInUp" data-wow-delay="0.2s">
                                <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>
                                In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                                <h3>Johnathan Doe</h3>
                                <h3>Marketing Head Matrix media</h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="images/customer2.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>
                                In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                                <h3>Oidila Matik</h3>
                                <h3>President Lexo Inc</h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="images/customer3.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>
                                In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                                <h3>- Alex Dattilo</h3>
                                <h3>CEO Optima Inc</h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="images/customer4.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>
                                In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                                <h3>- Robert Hammer</h3>
                                <h3>design head Omega Corp</h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="images/customer5.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>
                                In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                                <h3>- Rita Valentine</h3>
                                <h3>CEO Behena digital</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Form -->
        <div class="cta-sub no-color">
            <div class="container">
                <div class="cta-inner">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">¡Inscríbite a nuestro a nuestro boletín y enterate de nuestras grandiosas ofertas!</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s"> Ingresa tu correo electrónico y te envíaremos<br class="hidden-xs">
                        las mejores ofertas. </p>
                    <div class="form wow fadeInUp" data-wow-delay="0.3s">
                        <form class="subscribe-form center-form wow zoomIn" action="php/subscribe.php" method="post" name="subscribeform" id="subscribeform">
                            <input class="mail" type="email" name="email" placeholder="Tu bello correo electrónico" autocomplete="off" id="subemail">
                            <input class="submit-button" type="submit" value="¡Suscríbete!" name="send" id="subsubmit">
                        </form>
                        <!-- subscribe message -->
                        <div id="mesaj"></div>
                        <!-- subscribe message --> 
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
