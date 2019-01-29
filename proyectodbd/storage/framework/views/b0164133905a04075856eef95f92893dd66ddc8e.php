<?php $__env->startSection('content'); ?>

<form action="/calendario_alojamiento" method="get">
    <h1>
        Habitaciones Disponibles
    </h1>

	<table style="text-align:center;">
    <tr>
    <th><h5 class="card-title"></h5></th>
    <th><h5 class="card-title">Camas</h5></th>
    <th><h5 class="card-title">Numero</h5></th>
    <th><h5 class="card-title">Capacidad</h5></th>
  </tr>
    <?php $__currentLoopData = $hab_disp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
    <th>
        <input type="hidden" id="hotel_id" name="hotel_id" value="<?php echo e($hab->id); ?>">
        <center>
		<button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Reservar </span> </button>
        </center>
        </th>
    <th><h5 class="card-title"><?php echo e($hab->camas); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($hab->numero); ?></h5></th>
    <th><h5 class="card-title"><?php echo e($hab->capacidad); ?></h5></th>
  </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>