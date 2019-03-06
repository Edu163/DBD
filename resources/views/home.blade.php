<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>G14Airland</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Template Style Files -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="{{ asset('template/lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/lib/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/lib/magnific-popup/magnific-popup.css') }}">

    <!-- Rev slider css -->
    <link href="{{ asset('template/lib/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/animate/animate.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <!-- End Template Style Files -->

</head>
<body>

    <!--==========================
        Header
    ============================-->
    <header id="header">
        <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">GP14</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu" id="navbarSupportedContent">
            @guest  
                <li class="menu-active"><a href="#intro">Inicio</a></li>
                <li><a href="#about">Paquetes</a></li>
                <li><a href="#buy-forms">Servicios</a></li>
                <li><a href="#features">Vuelos</a></li>
                <li><a href="#pricing">Alojamiento</a></li>
                <li><a href="#more-features">Transporte</a></li>
                {{-- <li><a href="#gallery">Galería</a></li> --}}
                {{-- <li><a href="#contact">Contáctenos</a></li> --}}
                <li><a class="nav-link page-scroll" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></li>
                @if (Route::has('register'))
                    <li><a class="nav-link page-scroll" href="{{ route('register') }}">{{ __('Registrarse') }}</a></li>
                @endif
                <li>
                    <a href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart" style="font-size: 22px;"></i><span class="cart-count">
                        @if (Cart::instance('default')->count() > 0)
                        <span>{{ Cart::instance('default')->count() }}</span></span>
                        @endif
                    </a>
                </li>
                @else
                    <li class="menu-active"><a href="#intro">Inicio</a></li>
                    <li><a href="#about">Paquetes</a></li>
                    <li><a href="#buy-forms">Servicios</a></li>
                    <li><a href="#features">Vuelos</a></li>
                    <li><a href="#pricing">Alojamiento</a></li>
                    <li><a href="#more-features">Transporte</a></li>
                    {{-- <li><a href="#gallery">Galería</a></li> --}}
                    {{-- <li><a href="#contact">Contáctenos</a></li> --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <i class="fas fa-caret-down"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" style="background: linear-gradient(45deg, #1de099, #1dc8cd) !important;" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->is_admin == 1)
                                <a class="dropdown-item" href="/admin"  method="post">
                                    {{ __('Administración') }}
                                    <i class="fas fa-user-tie"></i>
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('profile.show',[Crypt::encrypt(Auth::user()->id) ])}}"  method="post">
                                {{ __('Perfil') }}
                                <i class="fas fa-user"></i>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                    <i class="fas fa-sign-out-alt"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart" style="font-size: 22px;"></i><span class="cart-count">
                            @if (Cart::instance('default')->count() > 0)
                            <span>{{ Cart::instance('default')->count() }}</span></span>
                            @endif
                        </a>
                     </li>
            @endguest
            </ul>
        </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--================Slider Area =================-->
    <section class="main_slider_area" id="intro">
        <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
            <ul>
                <li data-index="rs-2946" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                    
                    <img src="{{ asset('template/img/home-slider/slider-1.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme secand_text"
                            data-x="['center','center','center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['0','0','0','0','0']"
                            data-fontsize="['48','48','48','28','28','22']"
                            data-lineheight="['60','60','60','36','36','30']"
                            data-width="100%"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['center','center','center','center','center','center']"

                            {{-- style="z-index: 8;font-family:'Poppins', sans-serif;font-weight:700;color:#fff; background: linear-gradient(to right, #744fff 0%, #f4a8f4 51%, #744fff 100%);"--}}
                            >Encuentra tu paquete de viaje ideal
                        </div>

                        <div class="tp-caption tp-resizeme slider_button"
                            data-x="['center','center','center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['130','130','130','100','100','100']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['center','center','center','center','center','center']">
                            <a class="btn-galaxy scrollto" href="#about">Paquetes</a>
                            <a class="btn-galaxy scrollto" href="#buy-forms">Servicios</a>
                        </div>
                    </div>
                </li>
                <li data-index="rs-2947" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                    <img src="{{ asset('template/img/home-slider/slider-2.jpg') }}" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme secand_text"
                            data-x="['center','center','center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['0','0','0','0','0']"
                            data-fontsize="['48','48','48','28','28','22']"
                            data-lineheight="['60','60','60','36','36','30']"
                            data-width="100%"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['center','center','center','center','center','center']"

                            {{-- style="z-index: 8;font-family:'Poppins', sans-serif;font-weight:700;color:#fff; background: linear-gradient(to right, #744fff 0%, #f4a8f4 51%, #744fff 100%);"--}}
                            >Encuentra tu paquete de viaje ideal
                        </div>
                        <div class="tp-caption tp-resizeme slider_button"
                            data-x="['center','center','center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['130','130','130','100','100','100']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['center','center','center','center','center','center']">
                            <a class="btn-galaxy scrollto" href="#about">Paquetes</a>
                            <a class="btn-galaxy scrollto" href="#buy-forms">Servicios</a>
                        </div>
                    </div>
                </li>             
            </ul>
        </div>
    </section>
    <!--================End Slider Area =================-->

    <main id="main">

        <!--==========================
        About Us Section
        ============================-->
        <section id="about">
            <div class="container-fluid">
                <div class="section-header">
                    <h3 class="section-title">Paquetes</h3>
                    <span class="section-divider"></span>
                    {{-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
                </div>


                 <div class="row">

                @foreach ($packagesCards as $pCard)
                    <div class="col-lg-4 col-md-6">
                        <div class="box featured wow fadeInUp">
                            <h3>{{ $pCard->id }}</h3>
                            <h4><sup>$</sup>{{ $pCard->id }}<span> Precio</span></h4>
                            <ul>
                                <li><i class="ion-android-checkmark-circle"></i>Flight: {{ $pCard->flight_id}}</li>
                                <li><i class="ion-android-checkmark-circle"></i>Hotel: {{ $pCard->hotel_id}}</li>
                                <li><i class="ion-android-checkmark-circle"></i>Vehicle: {{ $pCard->vehicle_id}}</li>
                                <li><i class="ion-android-checkmark-circle"></i>Inicio: {{ $pCard->fecha_inicio}}</li>
                                <li><i class="ion-android-checkmark-circle"></i>Fin: {{ $pCard->fecha_fin}}</li>
                            </ul>
                            <a href="#" class="get-started-btn">Ver detalles</a>
                        </div>
                    </div>
                @endforeach

            </div>
            </div>
                

               
        </section><!-- #about -->

        <section id="buy-forms" class="section-bg">
            <div class="container-fluid py-4" style="padding-right:10% !important; padding-left:10% !important;"">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link btn-galaxy active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <i class="fas fa-plane"></i>   
                                Vuelos
                            </a>
                            @if (Auth::check())
                                <a class="nav-link btn-galaxy" id="v-pills-checkin-tab" data-toggle="pill" href="#v-pills-checkin" role="tab" aria-controls="v-pills-checkin" aria-selected="false">
                                    <i class="fas fa-laptop"></i>
                                    Check-in   
                                </a>
                            @endif
                            <a class="nav-link btn-galaxy" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <i class="fas fa-car-side"></i>
                                Transporte
                            </a>
                            <a class="nav-link btn-galaxy" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <i class="fas fa-building"></i>
                                Alojamiento
                            </a>
                            <a class="nav-link btn-galaxy" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <i class="fas fa-cubes"></i>
                                Paquetes
                            </a>
                            <a class="nav-link btn-galaxy" id="v-pills-insurance-tab" data-toggle="pill" href="#v-pills-insurance" role="tab" aria-controls="v-pills-insurance" aria-selected="false">
                                <i class="fas fa-heartbeat"></i>
                                Seguros de viaje
                            </a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    @include('modules.flightReservation.flight.form')
                                </div>
                                <div class="tab-pane fade" id="v-pills-checkin" role="tabpanel" aria-labelledby="v-pills-checkin-tab">
                                    @include('modules.others.checkin.form')
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    @include('modules.vehicleReservation.vehicle.form')
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    @include('modules.housingReservation.hotel.form')
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    @include('modules.others.package.form')
                                </div>
                                <div class="tab-pane fade" id="v-pills-insurance" role="tabpanel" aria-labelledby="v-pills-insurance-tab">
                                    @include('modules.others.insurance.form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==========================
        Product Featuress Section
        ============================-->
        <section id="features">
        <div class="container" style="background-color: white !important">

            <div class="section-header">
            <h3 class="section-title">Vuelos</h3>
            <span class="section-divider"></span>
            </div>

            <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="box wow fadeInLeft">
                <h3>Free</h3>
                <h4><sup>$</sup>0<span> month</span></h4>
                <ul>
                    <li><i class="ion-android-checkmark-circle"></i> Quam adipiscing vitae proin</li>
                    <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
                    <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
                    <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="box featured wow fadeInUp">
                <h3>Business</h3>
                <h4><sup>$</sup>29<span> month</span></h4>
                <ul>
                    <li><i class="ion-android-checkmark-circle"></i> Quam adipiscing vitae proin</li>
                    <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
                    <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
                    <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="box wow fadeInRight">
                <h3>Developer</h3>
                <h4><sup>$</sup>49<span> month</span></h4>
                <ul>
                    <li><i class="ion-android-checkmark-circle"></i> Quam adipiscing vitae proin</li>
                    <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
                    <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
                    <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
                </div>
            </div>

        </div>

        </section><!-- #features -->

        <!--==========================
        Call To Action Section
        ============================-->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">¿No te queda algo claro?</h3>
                        <p class="cta-text">Si tienes alguna duda o consulta que te impide ir a por tus vacaciones soñadas, no dudes en contactarnos y te ayudaremos </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="btn btn-galaxy align-middle scrollto" href="#contact">Contacto</a>
                    </div>
                </div>

            </div>
        </section><!-- #call-to-action -->

        <!--==========================
        Pricing Section
        ============================-->
        <section id="pricing" class="section-bg">
        <div class="container">

            <div class="section-header">
            <h3 class="section-title">Alojamiento</h3>
            <span class="section-divider"></span>
            {{-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
            </div>

            <div class="row">

                @foreach ($hotelCards as $hab)
                    <div class="col-lg-4 col-md-6">
                        <div class="box featured wow fadeInUp">
                            <h3>{{ $hab->hotel->nombre }}</h3>
                            <h4><sup>$</sup>{{ $hab->precio }}<span> noche</span></h4>
                            <ul>
                                <li><i class="ion-android-checkmark-circle"></i>País: {{ $hab->hotel->pais }}</li>
                                <li><i class="ion-android-checkmark-circle"></i>Dirección: {{ $hab->hotel->direccion }}</li>
                                <li><i class="ion-android-checkmark-circle"></i>Estrellas: {{ $hab->hotel->estrellas }} <i class="fas fa-star" style="color: yellow !important;"></i></li>
                                <li><i class="ion-android-checkmark-circle"></i>Valoración: {{ $hab->hotel->estrellas }}</li>
                                <li><i class="ion-android-checkmark-circle"></i>Camas: {{ $hab->camas }}</li>
                            </ul>
                            <center>  
                            <button style="margin-top: 0.2cm;" type="submit" class="btn btn-success btn-galaxy" data-toggle="modal" data-target="#modal-housing-reservation-{{ $hab->id }}">Ver detalles</button>
                            @include('modules.housingReservation.hotelReservationDetail.index') 
                            </center>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        </section><!-- #pricing -->

        <!--==========================
        Product Advanced Featuress Section
        ============================-->
        {{-- <section id="advanced-features">

        <div class="features-row section-bg">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <img class="advanced-feature-img-right wow fadeInRight" src="{{ asset('template/img/advanced-feature-1.jpg') }}" alt="">
                <div class="wow fadeInLeft">
                    <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                    <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="features-row">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <img class="advanced-feature-img-left" src="{{ asset('template/img/advanced-feature-2.jpg') }}" alt="">
                <div class="wow fadeInRight">
                    <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                    <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
                    <p class="wow fadeInRight" data-wow-duration="0.5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"></i>
                    <p class="wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                    <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4" data-wow-duration="0.5s"></i>
                    <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="features-row section-bg">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <img class="advanced-feature-img-right wow fadeInRight" src="{{ asset('template/img/advanced-feature-3.jpg') }}" alt="">
                <div class="wow fadeInLeft">
                    <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                    <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <i class="ion-ios-albums-outline"></i>
                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section> --}}
        <!-- #advanced-features -->

        <!--==========================
        Call To Action Section
        ============================-->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">¡No te quedes con las ganas!</h3>
                        <p class="cta-text">No te pierdas tus vacaciones soñadas, vea nuestros paquetes y... ¡Ve por esas vacaciones que te mereces!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="btn btn-galaxy align-middle scrollto" href="#about">Ver Paquetes</a>
                    </div>
                </div>

            </div>
        </section><!-- #call-to-action -->

        <!--==========================
        More Features Section
        ============================-->
        <section id="more-features" class="section-bg">
        <div class="container">

            <div class="section-header">
            <h3 class="section-title">Transporte</h3>
            <span class="section-divider"></span>
            {{-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
            </div>

            <div class="row">
                @foreach ($vehicleCards as $vehicle)
                    <div class="col-lg-4 col-md-6">
                        <div class="box featured wow fadeInUp">
                        <h3 style="color:grey;">{{ $vehicle->marca }}</h3>
                        <h4><sup>$</sup>{{ $vehicle->precio }}<span> día</span></h4>
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> Tipo: {{ $vehicle->tipo }}</li>
                            <li><i class="ion-android-checkmark-circle"></i> Gamma: {{ $vehicle->gamma }}</li>
                            <li><i class="ion-android-checkmark-circle"></i> Transmisión: {{ $vehicle->transmision }}</li>
                            <li><i class="ion-android-checkmark-circle"></i> Zona: {{ $vehicle->zone->nombre }}</li>
                            <li><i class="ion-android-checkmark-circle"></i> Aire Acondicionado: {{ $vehicle->aire_acondicionado }}</li>
                        </ul>
                        <a href="#" class="get-started-btn" data-toggle="modal" data-target="#modal-vehicle-reservation-{{ $vehicle->id }}">Ver detalles</a>
                        @include('modules.vehicleReservation.vehicleReservationDetail.index')
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </section><!-- #more-features -->

        <!--==========================
        Clients
        ============================-->
        <section id="clients">
        <div class="container">

            <div class="row wow fadeInUp">

            <div class="col-md-2">
                <img src="{{ asset('template/img/clients/client-1.png') }}" alt="">
            </div>

            <div class="col-md-2">
                <img src="{{ asset('template/img/clients/client-2.png') }}" alt="">
            </div>

            <div class="col-md-2">
                <img src="{{ asset('template/img/clients/client-3.png') }}" alt="">
            </div>

            <div class="col-md-2">
                <img src="{{ asset('template/img/clients/client-4.png') }}" alt="">
            </div>

            <div class="col-md-2">
                <img src="{{ asset('template/img/clients/client-5.png') }}" alt="">
            </div>

            <div class="col-md-2">
                <img src="{{ asset('template/img/clients/client-6.png') }}" alt="">
            </div>

            </div>
        </div>
        </section><!-- #clients -->

        <!--==========================
        Frequently Asked Questions Section
        ============================-->
        <section id="faq" class="bg-light">
        <div class="container">

            <div class="section-header">
            <h3 class="section-title">Preguntas Frecuentes</h3>
            <span class="section-divider"></span>
            </div>

            <ul id="faq-list" class="wow fadeInUp">
            <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">¿Qué documentos necesito para viajar al extranjero? <i class="ion-android-remove"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                <p>
                    Para vuelos nacionales sólo necesitas cédula de identidad.
                    </br>
                    Para vuelos internacionales, necesitarás los siguientes documentos:
                </p>
                <ul>
                    <li>
                    Pasaporte válido y vigente al menos por 6 meses a la fecha de retorno.
                    </li>
                    <li>
                        Cédula de Identidad (para ciudadanos del Mercosur que viajan entre países sudamericanos).
                    </li>
                    <li>
                        En algunos casos necesitarás VISA, según el país de destino y tu ciudadanía.
                    </li>
                </ul>
                </br>
                <p>
                    Si viajas con un menor de edad, tendrás que presentar un certificado de nacimiento o libreta de familia y una autorización de salida del país en el caso de que viaje con uno sólo de los padres, con terceros o solos. El certificado debe ser otorgado por un Juez, Notario o Cónsul acreditado en el exterior.
                </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">¿Por qué no puedo hacer Check-in online para mi vuelo?<i class="ion-android-remove"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                <p>
                    Existen varias razones por las cuales no podrás hacer tu Check-in: 
                </p>
                <ul>
                    <li>
                        El vuelo no está dentro del periodo disponible. Recuerda que tiene que estar dentro de las 48 horas y 75 minutos antes de la salida del vuelo.
                    </li>
                    <li>
                        Tu vuelo tuvo una modificación en el horario de salida o fue cancelado. En este caso, te recomendamos revisar la nueva opción sugerida. Luego podrás hacer el Check-in sin problemas.
                    </li>
                    <li>
                        Tu viaje tiene un vuelo que es operado por otra aerolínea. Te recomendamos hacerlo en en el sitio web de la compañia que corresponde.
                    </li>
                    <li>
                        Tu reserva tiene cargos pendientes.
                    </li>
                </ul>
                </br>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">¿Puedo cambiar un vuelo o la fecha de mi pasaje?<i class="ion-android-remove"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                <p>
                    Sí, pero dependerá de las condiciones de tu tarifa. Ingresa con tu código de reserva y apellido a Cambio de Pasaje y verás si permite cambios.
                </p>
                <p>
                    Para saber si el cambio tiene algún cargo adicional o multa, revisa las regulaciones de tu pasaje en tu Comprobante de compra. 
                </p>
                <p>
                    Ten en cuenta que por ahora, el cambio de pasajes en línea sólo está disponible en Chile, Colombia, Perú, Ecuador, Argentina y Brasil.
                </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">¿Cuál es el equipaje de bodega permitido para mi viaje?<i class="ion-android-remove"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                <p>
                    El equipaje permitido en bodega depende de tu categoría de socio Elite, de la tarifa que hayas elegido al comprar tu pasaje y de la ruta en la que viajas.
                    <br>
                    El equipaje de bodega debe:
                </p>
                <ul>
                    <li>
                        Medir máximo 158 cm. lineales (largo, ancho y alto), y pesar máximo 23 kilos. Si supera estas medidas y peso, tendrás que pagar adicional.
                    </li>
                    <li>
                        No contener artículos restringidos o elementos prohibidos.
                    </li>
                    <li>
                        Ser entregado en los counters de Check-in de LATAM ubicados en los distintos aeropuertos. De lo contrario, al momento de embarcar, se te cobrará un cargo adicional.
                    </li>
                </ul>
                <br>
                <p>
                    Revisa aquí la información de tu compra.
                    <br>
                    Si necesitas mayor detalle sobre equipaje de bodega ingresa aquí.
                    <br>
                    Conoce nuestros convenios de equipaje para cuando viajes en otras aerolíneas.
                    <br>
                    Si necesitas viajar con equipaje especial o sobredimensionado, revisa aquí los cobros y condiciones.
                    <br>
                    Te compartimos un video sobre cómo encontrar toda la información necesaria para aclarar tus dudas respecto a tu equipaje.
                </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">¿Puedo embarcar antes si viajo con niños?<i class="ion-android-remove"></i></a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                <p>
                    Los bebés (menores de 2 años) que viajen en coche tienen preferencia para embarcar
                    <br>
                    junto a sus padres sin importar la categoría de socio de éstos.
                    <br>
                    <br>
                    Los mayores de 2 años estarán sujetos a la preferencia de embarque de su clase de 
                    <br>
                    cabina o categoría LATAM Pass. Recuerda que el embarque podría ser diferente en 
                    <br>
                    situaciones especiales. Si viajas con un bebé, acércate al mesón en la sala de 
                    <br>
                    embarque  para  confirmar.
                </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq6" class="collapsed">¿Qué dispositivos no puedo utilizar a bordo?<i class="ion-android-remove"></i></a>
                <div id="faq6" class="collapse" data-parent="#faq-list">
                <p>
                    Por tu seguridad y la del vuelo, no es posible utilizar durante el viaje juguetes a control remoto,
                    <br>
                    teléfonos o cualquier otro dispositivo sin opción para desactivar sus funciones inalámbricas de transmisión
                    <br>
                    de datos ni cigarrillos electrónicos. {{--  Para ver los detalles de los equipos que si están permitidos visita nuestra sección "uso de dispositivos electrónicos". --}}
                </p>
                </div>
            </li>

            </ul>

        </div>
        </section><!-- #faq -->

        <!--==========================
        Gallery Section
        ============================-->
        {{-- <section id="gallery">
        <div class="container-fluid">
            <div class="section-header">
            <h3 class="section-title">Galaría</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row no-gutters">

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                <a href="{{ asset('template/img/gallery/gallery-1.jpg') }}" class="gallery-popup">
                    <img src="{{ asset('template/img/gallery/gallery-1.jpg') }}" alt="">
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                <a href="{{ asset('template/img/gallery/gallery-2.jpg') }}" class="gallery-popup">
                    <img src="{{ asset('template/img/gallery/gallery-2.jpg') }}" alt="">
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                <a href="{{ asset('template/img/gallery/gallery-3.jpg') }}" class="gallery-popup">
                    <img src="{{ asset('template/img/gallery/gallery-3.jpg') }}" alt="">
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                <a href="{{ asset('template/img/gallery/gallery-4.jpg') }}" class="gallery-popup">
                    <img src="{{ asset('template/img/gallery/gallery-4.jpg') }}" alt="">
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                <a href="{{ asset('template/img/gallery/gallery-5.jpg') }}" class="gallery-popup">
                    <img src="{{ asset('template/img/gallery/gallery-5.jpg') }}" alt="">
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                <a href="{{ asset('template/img/gallery/gallery-6.jpg') }}" class="gallery-popup">
                    <img src="{{ asset('template/img/gallery/gallery-6.jpg') }}" alt="">
                </a>
                </div>
            </div>

            </div>

        </div>
        </section> --}}
        <!-- #gallery -->

        <!--==========================
        Our Team Section, Esto queda sólo si no se sube a la red.
        ============================-->
        {{-- <section id="team" class="section-bg">
        <div class="container">
            <div class="section-header">
            <h3 class="section-title">Nuestro Equipo</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
            <div class="row wow fadeInUp">
            <div class="col-6 col-md-4">
                <div class="member">
                <div class="pic"><img src="{{ asset('img/team-1.jpg') }}" alt=""></div>
                <h4>Guillermo Campos</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="member">
                <div class="pic"><img src="{{asset('img/team-2.jpg')}}" alt=""></div>
                <h4>Omar Carrasco</h4>
                <span>Product Manager</span>
                <div class="social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="member">
                <div class="pic"><img src="{{ asset('img/team-3.jpg') }}" alt=""></div>
                <h4>Eduardo Pailemilla</h4>
                <span>CTO</span>
                <div class="social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
                </div>
            </div>

            </div>

        </div>
        </section> --}}
        <!-- #team -->

        <!--==========================
    Contact Section
    ============================-->
    <section id="contact">
        <div class="container">
            <div class="row wow fadeInUp">

            <div class="col-lg-4 col-md-4">
                <div class="contact-about">
                <h3>GP14LATAM</h3>
                <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                <div class="social-links">
                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="info">
                <div>
                    <i class="ion-ios-location-outline"></i>
                    <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div>
                    <i class="ion-ios-email-outline"></i>
                    <p>contacto@rollers.cl</p>
                </div>

                <div>
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+56 9 4272 3136</p>
                </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-8">
                <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                    <div class="form-group col-lg-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit" title="Send Message">Enviar Mensaje</button></div>
                </form>
                </div>
            </div>

            </div>

        </div>
    </section><!-- #contact -->

    </main>

    <!--==========================
        Footer
    ============================-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>GP14LATAM</strong>. Todos los derechos reservados
                    </div>
                    <div class="credits" style="font-size:7px !important;">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
                        -->
                        Diseñado en primera instancia por <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="/#intro" class="scrollto">Inicio</a>
                        <a href="/#about" class="scrollto">Paquetes</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="{{ asset('js/app.js') }}"defer></script>
    

    <!-- JavaScript Libraries -->
    <script src="{{ asset('template/lib/jquery/jquery.min.js') }}"defer></script>
    <script src="{{ asset('template/lib/jquery/jquery-migrate.min.js') }}"defer></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"defer></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"defer></script>
    <script src="{{ asset('template/lib/superfish/hoverIntent.js') }}"defer></script>
    <script src="{{ asset('template/lib/superfish/superfish.min.js') }}"defer></script>
    <script src="{{ asset('template/lib/magnific-popup/magnific-popup.min.js') }}"defer></script>

    <!-- Rev slider js -->
    <script src="{{ asset('template/lib/revolution/js/jquery.themepunch.tools.min.js') }}" defer></script>
    <script src="{{ asset('template/lib/revolution/js/jquery.themepunch.revolution.min.js') }}" defer></script>
    <script src="{{ asset('template/lib/revolution/js/extensions/revolution.extension.actions.min.js') }}" defer></script>
    <script src="{{ asset('template/lib/revolution/js/extensions/revolution.extension.video.min.js') }}" defer></script>
    <script src="{{ asset('template/lib/revolution/js/extensions/revolution.extension.slideanims.min.js') }}" defer></script>
    <script src="{{ asset('template/lib/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}" defer></script>
    <script src="{{ asset('template/lib/revolution/js/extensions/revolution.extension.navigation.min.js') }}" defer></script>
    <script src="{{ asset('template/lib/revolution/js/extensions/revolution.extension.slideanims.min.js') }}" defer></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('template/js/main.js') }}"defer></script>
</body>
</html>
