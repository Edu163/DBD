<div id="carruselInicio" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carruselInicio" data-slide-to="0" class="active"></li>
        <li data-target="#carruselInicio" data-slide-to="1"></li>
        <li data-target="#carruselInicio" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo e(asset('img/2.jpg')); ?>" alt="Primera slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo e(asset('img/3.jpg')); ?>" alt="Segunda slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo e(asset('img/5.jpg')); ?>" alt="Tercera slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carruselInicio" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carruselInicio" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>