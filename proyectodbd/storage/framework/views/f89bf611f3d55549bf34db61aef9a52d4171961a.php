<?php $__env->startSection('content'); ?>


<form action="/reserva_vehiculo" method="post">
 <?php echo csrf_field(); ?>
<?php $__currentLoopData = $autos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" name="monto_total" id="monto_total" value="<?php echo e($auto->precio); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <h1>
        ¿Desea confirmar su reserva?
    </h1>
   <button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Confirmar </span> </button>
    <button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Rechazar </span> </button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>