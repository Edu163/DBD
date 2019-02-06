<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>