<?php $__env->startSection('content'); ?>
   <!-- <h1>
        Paquetes Disponibles
    </h1>

	<table style="text-align:center;">
    <tr>
    <th><h5 class="card-title"></h5></th>
    <th><h5 class="card-title">Hotel</h5></th>
    <th><h5 class="card-title">Pais</h5></th>
    <th><h5 class="card-title">Dirección</h5></th>
    <th><h5 class="card-title">Estrellas</h5></th>
    <th><h5 class="card-title">Valoración</h5></th>
    <th><h5 class="card-title">Capacidad</h5></th>
  </tr>
    <?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <th>
        <center>
		<a href="\" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Reservar </span> </a>
        </center>
        </th>
    <th><h5 class="card-title"><?php echo e($paquete->hotel->nombre); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($paquete->hotel->pais); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($paquete->hotel->direccion); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($paquete->hotel->estrellas); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($paquete->hotel->valoracion); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($paquete->hotel->capacidad); ?></h5></th>
  </tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <p class="text-center"></p>
            </div>
            <div class="row articles">
            <?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-md-4 item">
                    <center>
                    <a href="#">
                        <img src="https://picsum.photos/210/140?image=<?php echo e(mt_rand(1, 50)); ?>" alt="">
                    </a>
                    </center>
                    <center>
                    <h3 class="name"><?php echo e($paquete->hotel->nombre); ?></h3>
                    <p class="description">Aenean tortor est.</p>
                    </center>
                    <a id = "boton" href="#" class="action">
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>