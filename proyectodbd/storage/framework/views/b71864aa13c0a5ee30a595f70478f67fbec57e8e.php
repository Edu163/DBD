<?php $__env->startSection('content'); ?>
    <h1>
        Hoteles Disponibles
    </h1>

	<table>
    <tr>
    <th><h5 class="card-title"></h5></th>
    <th><h5 class="card-title">Hotel</h5></th>
    <th><h5 class="card-title">Pais</h5></th>
    <th><h5 class="card-title">Dirección</h5></th>
    <th><h5 class="card-title">Estrellas</h5></th>
    <th><h5 class="card-title">Valoración</h5></th>
    <th><h5 class="card-title">Capacidad</h5></th>
  </tr>
    <?php $__currentLoopData = $hoteles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <th>
        <center>
		<a href="\" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Reservar </span> </a>
        </center>
        </th>
    <th><h5 class="card-title"><?php echo e($hotel->nombre); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($hotel->pais); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($hotel->direccion); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($hotel->estrellas); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($hotel->valoracion); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($hotel->capacidad); ?></h5></th>
  </tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>