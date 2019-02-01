<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>G14Airland</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="iLand Multipurpose Landing Page Template">
    <meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <!-- Resource style -->
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/ionicons.min.css')); ?>">
    <!-- Resource style -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />


</head>
<body>
    <div id="wrapper">
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-expand-md">
                <div class="container"> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand page-scroll" href="/"> <img src="images/logo.png" width="80" height="30" alt="GP14Airland" /> </a> </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right"> 
                        <?php if(auth()->guard()->guest()): ?>  
                            <li><a class="page-scroll" href="<?php echo e(url('/')); ?>">Inicio</a></li>
                            <li><a class="page-scroll" href="#classes">Vuelos</a></li>
                            <li><a class="page-scroll" href="#features">Transporte</a></li>
                            <li><a class="page-scroll" href="#review">Alojamiento</a></li>
                            <li><a class="nav-link page-scroll" href="<?php echo e(route('login')); ?>"><?php echo e(__('Iniciar sesión')); ?></a></li>
                            <?php if(Route::has('register')): ?>
                                <li><a class="nav-link page-scroll" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrarse')); ?></a></li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li><a class="page-scroll" href="<?php echo e(url('/home')); ?>">Inicio</a></li>
                            <li><a class="page-scroll" href="#classes">Vuelos</a></li>
                            <li><a class="page-scroll" href="#features">Transporte</a></li>
                            <li><a class="page-scroll" href="#review">Alojamiento</a></li>
                            <li>
                                <a href="<?php echo e(route('cart.index')); ?>">Cart <span class="cart-count">
                                <?php if(Cart::instance('default')->count() > 0): ?>
                                <span><?php echo e(Cart::instance('default')->count()); ?></span></span>
                                <?php endif; ?>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Cerrar sesión')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>       
        <!-- /.navbar-collapse --> 

        <div class="main app form" id="main"><!-- Main Section-->
            <?php echo $__env->yieldContent('content'); ?>
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

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    
    <!-- Jquery and Js Plugins --> 
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
        <script type="text/javascript" src="js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="js/plugins.js"></script> 
        <script type="text/javascript" src="js/menu.js"></script> 
        <script type="text/javascript" src="js/custom.js"></script> 
        <script src="js/jquery.subscribe.js"></script>
</body>


</html>
