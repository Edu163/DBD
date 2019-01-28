<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>G14Airland</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="iLand Multipurpose Landing Page Template">
    <meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Resource style -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <!-- Resource style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top navbar-expand-md">
                    <div class="container"> 
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand page-scroll" href="/"> <img src="images/logo.png" width="80" height="30" alt="GP14Airland" /> </a> </div>
                        <!-- put a logo img with  <img src="images/logo.png" width="80" height="30" alt="GP14Airland" /> -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        @if (Route::has('login'))
                        <ul class="nav navbar-nav navbar-right">           
                            <li><a class="page-scroll" href="{{ url('/home') }}">Inicio</a></li>
                            <li><a class="page-scroll" href="#classes">Vuelos</a></li>
                            <li><a class="page-scroll" href="#features">Transporte</a></li>
                            <li><a class="page-scroll" href="#review">Alojamiento</a></li>
                            @auth
                            @else
                            <li><a class="page-scroll" href="{{ route('login') }}">Iniciar sesión</a></li>
                                @if (Route::has('register'))
                            <li><a class="page-scroll" href="{{ route('register') }}">Registrarse</a></li>
                                @endif
                            @endauth
                        </ul>
                        @endif
                        </div>
                    </div>
                </nav>
                <!-- /.navbar-collapse --> 
            </div>
            <!-- /.container-fluid -->
            
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
                                @include('modulos.reserva_vuelo.vuelo.form')
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @include('modulos.reserva_vehiculo.vehiculo.form')
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                @include('modulos.reserva_alojamiento.hotel.form')
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
                
                <!-- Footer Section -->
                <div class="footer" id="contact">
                    <div class="container">
                        <div class="col-md-6 contact">
                            <h1>Sobre Nosotros</h1>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, <br>
                                vel illum dolore eu feugiat nulla facilisis at vero Duis autem vel eum iriure dolor in <br>
                                hendrerit in vulputate velit esse eros et accumsan.</p>
                            <p>Pellentesque eget dolor gravida, tempus purus ac, ultricies mauris. Etiam est nisl,<br>
                                molestie sed egestas bibendum, varius eu diam.</p>
                        </div>
                        <div class="col-md-3 contact footer-menu">
                            <h1>Social</h1>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Github</a></li>
                                <li><a href="#">Pinterest</a></li>
                                <li><a href="#">Google Plus</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 contact">
                            <h1>Contáctenos</h1>
                            <p> Contacte a nuestra atención al cliente 24/7 si tiene alguna pregunta. </p>
                            <a href="mailto:support@gmail.com">contacto@iland.com</a> 
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Scroll To Top --> 
            
            <a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a> 
            
            <!-- Scroll To Top Ends--> 
            
            </div>
        </div>
        <!-- Wrapper--> 

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Jquery and Js Plugins --> 
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
        <script type="text/javascript" src="js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="js/plugins.js"></script> 
        <script type="text/javascript" src="js/menu.js"></script> 
        <script type="text/javascript" src="js/custom.js"></script> 
        <script src="js/jquery.subscribe.js"></script>
    </body>
</html>