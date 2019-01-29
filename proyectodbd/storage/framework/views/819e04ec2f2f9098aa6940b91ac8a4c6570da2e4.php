<?php $__env->startSection('content'); ?>
	<div class="card-deck">
	<?php $__currentLoopData = $companias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compania): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-sm">
			<div class="card card-companias" style="width: 18rem;">
  				<div class="card-body">
   					<h5 class="card-title"><?php echo e($compania->nombre); ?></h5>
					<p class="card-text"><?php echo e($compania->direccion); ?></p>
					<center>
					<a href="#" class="btn btn-danger btn-companias" style="vertical-align:middle"><span>Editar </span> </a>
					</center>
  				</div>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>