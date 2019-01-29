<?php $__env->startSection('content'); ?>


<form action="/reserva_hotel" method="post">
 <?php echo csrf_field(); ?>
<?php $__currentLoopData = $habHotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" name="precio" id="precio" value="<?php echo e($hab->precio); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value=1>
    <input type="hidden" name="monto_total" id="monto_total" value="<?php echo e($hab->precio); ?>">
    <input type="hidden" name="descuento" id="descuento" value= 0>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <h1>
        ¿Desea confirmar su reserva?
    </h1>
   <button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Confirmar </span> </button>
    <button type="submit" class="btn btn-danger btn-hoteles" style="vertical-align:middle"><span>Rechazar </span> </button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>