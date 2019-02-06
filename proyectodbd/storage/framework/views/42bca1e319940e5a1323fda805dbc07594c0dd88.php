<form action="/calendario_vehiculo" method="get">


<?php $__env->startSection('content'); ?>
    <table class="table table-hover table-bordered table-sm datatable">
        <thead>
            <tr>
                <th></th>
                <th> Patente </th>
                <th> Tipo </th>
                <th> Gamma </th>
                <th> Marca </th>
                <th> Transmisión </th>
                <th> Combustible </th>
                <th> Capacidad de pasajeros </th>
                <th> Equipaje grande máximo </th>
                <th> Equipaje pequeño máximo </th>
                <th> Número de puertas </th>
                <th> Aireacondicionado </th>
                <th> Precio hora </th>
                <th class="no-sort"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $vehiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <center>
		                    <button type="submit" class="btn btn-danger btn-hoteles" id="auto_id" name="auto_id" value="<?php echo e($vehiculo->id); ?>" style="vertical-align:middle"><span>Reservar </span> </button>
                        </center>
                    </td>
                    <td><?php echo e($vehiculo->patente); ?></td>
                    <td><?php echo e($vehiculo->tipo); ?></td>
                    <td><?php echo e($vehiculo->gamma); ?></td>
                    <td><?php echo e($vehiculo->marca); ?></td>
                    <td><?php echo e($vehiculo->transmision); ?></td>
                    <td><?php echo e($vehiculo->combustible); ?></td>
                    <td><?php echo e($vehiculo->n_pasajeros); ?></td>
                    <td><?php echo e($vehiculo->equipaje_g); ?></td>
                    <td><?php echo e($vehiculo->equipaje_p); ?></td>
                    <td><?php echo e($vehiculo->n_puertas); ?></td>
                    <td><?php echo e($vehiculo->aire_acondicionado); ?></td>
                    <td><?php echo e($vehiculo->precio_hora); ?></td>
                    <td>
                        <a class="btn btn-sm btn-info" href="/vehiculo/<?php echo e($vehiculo->id); ?>"> Elígeme!
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>