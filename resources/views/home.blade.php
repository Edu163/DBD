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
                <li><a href="#more-features">Transporte</a></li>
                <li><a href="#pricing">Alojamiento</a></li>
                {{-- <li><a href="#gallery">Galería</a></li> --}}
                <li><a href="#contact">Contáctenos</a></li>
                <li><a class="nav-link page-scroll" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></li>
                @if (Route::has('register'))
                    <li><a class="nav-link page-scroll" href="{{ route('register') }}">{{ __('Registrarse') }}</a></li>
                @endif
                @else
                    <li class="menu-active"><a href="#intro">Inicio</a></li>
                    <li><a href="#about">Paquetes</a></li>
                    <li><a href="#buy-forms">Servicios</a></li>
                    <li><a href="#features">Vuelos</a></li>
                    <li><a href="#more-features">Transporte</a></li>
                    <li><a href="#pricing">Alojamiento</a></li>
                    {{-- <li><a href="#gallery">Galería</a></li> --}}
                    <li><a href="#contact">Contáctenos</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <i class="fas fa-caret-down"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" style="background: linear-gradient(45deg, #1de099, #1dc8cd) !important;" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show', Auth::user()->id )}}"  method="get">
                                    {{ __('Perfil') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
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
                        <div class="tp-caption tp-resizeme rev-btn first_text"
                        data-x="['center','center','center','center','center','center']"
                        data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-130','-130','-130','-80','-80','-80']"
                        data-fontsize="['12','12','12','12','12']"
                        data-lineheight="['64','64','64','50','35']"
                        data-width="['550','550','550','550','300']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text"
                        data-type="button"
                        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-2971-layer-18","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-2971-layer-18","delay":""},{"event":"click","action":"startlayer","layer":"slide-2971-layer-15","delay":""},{"event":"click","action":"startlayer","layer":"slide-2971-layer-19","delay":""},{"event":"click","action":"startlayer","layer":"slide-2971-layer-20","delay":"1000"},{"event":"click","action":"playvideo","layer":"slide-2971-layer-15","delay":"1000"}]'
                        data-responsive_offset="on"
                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                        data-textAlign="['center','center','center','center','center','center']"
                        style="z-index: 8;font-family: 'Poppins', sans-serif;font-weight:600;color:#fff;text-transform: uppercase;"><span style="text-decoration: underline;padding-left: 10px;"></span></div>

                        

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption Agency-CloseBtn rev-btn "
                        id="slide-2971-layer-20"
                        data-x="['center','center','center','center']" data-hoffset="['510','389','270','199']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-298','-229','-163','-118']"
                        data-width="50"
                        data-height="none"
                        data-whitespace="nowrap"

                        data-type="button"
                        data-actions='[{"event":"click","action":"stoplayer","layer":"slide-2971-layer-15","delay":""},{"event":"click","action":"stoplayer","layer":"slide-2971-layer-19","delay":""},{"event":"click","action":"stoplayer","layer":"slide-2971-layer-20","delay":""}]'
                        data-responsive_offset="on"
                        data-responsive="off"
                        data-frames='[{"from":"z:0;rX:0;rY:0;rZ:45deg;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},{"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;sX:1.1;sY:1.1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-lasttriggerstate="reset"
                        style="z-index: 15; min-width: 50px; max-width: 50px; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;font-size: 24px;"><i class="fa fa-close"></i> </div>

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
                            data-hoffset="['0','80','80','0']"
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

                            {{-- style="z-index: 8;font-family:'Poppins', sans-serif;font-weight:700;color:#fff; background-image: linear-gradient(to right, #744fff 0%, #f4a8f4 51%, #744fff 100%);"--}}
                            >Ve por las vacaciones que te mereces
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
                    <p class="section-description">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br>
                        sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    </div>

                    <div class="row">
                    <div class="col-lg-6 about-img wow fadeInLeft">
                        <img src="{{ asset('template/img/about-img.jpg') }}" alt="">
                    </div>

                    <div class="col-lg-6 content wow fadeInRight">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elite storium paralate</h2>
                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum.</h3>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <ul>
                        <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </li>
                        <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit.</li>
                        <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                            nulla pariatur.</li>
                        </ul>

                        <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum Libero justo laoreet sit amet
                        cursus sit amet dictum sit. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend
                        donec
                        </p>
                    </div>
                </div>    
            </div>
        </section><!-- #about -->

        <section id="buy-forms" class="section-bg">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link btn-galaxy active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <i class="fas fa-plane"></i>   
                                Vuelos
                            </a>
                            <a class="nav-link btn-galaxy" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <i class="fas fa-car-side"></i>
                                Transporte
                            </a>
                            <a class="nav-link btn-galaxy" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
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
        </section>

        <!--==========================
        Product Featuress Section
        ============================-->
        <section id="features">
        <div class="container">

            <div class="row">

            <div class="col-lg-8 offset-lg-4">
                <div class="section-header wow fadeIn" data-wow-duration="1s">
                <h3 class="section-title">Vuelos</h3>
                <span class="section-divider"></span>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 features-img">
                <img src="{{ asset('template/img/product-features.png') }}" alt="" class="wow fadeInLeft">
            </div>

            <div class="col-lg-8 col-md-7 ">

                <div class="row">

                <div class="col-lg-6 col-md-6 box wow fadeInRight">
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident clarida perendo.</p>
                </div>
                <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                    <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata noble dynala mark.</p>
                </div>
                <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur teleca starter sinode park ledo.</p>
                </div>
                <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum dinoun trade capsule.</p>
                </div>
                </div>

            </div>

            </div>

        </div>

        </section><!-- #features -->

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
                <h3 class="cta-title">Call To Action</h3>
                <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Call To Action</a>
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
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

            <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight">
                <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                <div class="icon"><i class="ion-ios-heart-outline"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
                </div>
            </div>

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
        </section><!-- #more-features -->

        <!--==========================
        Pricing Section
        ============================-->
        <section id="pricing" class="section-bg">
        <div class="container">

            <div class="section-header">
            <h3 class="section-title">Alojamiento</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
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
        </div>
        </section><!-- #pricing -->


        <!--==========================
        Frequently Asked Questions Section
        ============================-->
        <section id="faq">
        <div class="container">

            <div class="section-header">
            <h3 class="section-title">Frequently Asked Questions</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <ul id="faq-list" class="wow fadeInUp">
            <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
                <div id="faq6" class="collapse" data-parent="#faq-list">
                <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
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
        <section id="team" class="section-bg">
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
                {{-- <span>Chief Executive Officer</span> --}}
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
                {{-- <span>Product Manager</span> --}}
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
                {{-- <span>CTO</span> --}}
                <div class="social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
                </div>
            </div>

            </div>

        </div>
        </section><!-- #team -->

        <!--==========================
        Contact Section
        ============================-->
        <section id="contact">
        <div class="container">
            <div class="row wow fadeInUp">

            <div class="col-lg-4 col-md-4">
                <div class="contact-about">
                <h3>GP14</h3>
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
                    <p>info@example.com</p>
                </div>

                <div>
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+1 5589 55488 55s</p>
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
                    <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
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
                &copy; Copyright <strong>Avilon</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
            </div>
            <div class="col-lg-6">
            <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                <a href="#intro" class="scrollto">Home</a>
                <a href="#about" class="scrollto">About</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
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
