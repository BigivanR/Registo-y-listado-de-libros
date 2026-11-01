<section class="tarjeta">
    <h2>
        Libros registrados
        <span class="contador"><?php echo e($libros->count()); ?></span>
    </h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Registrado</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><strong><?php echo e($libro->titulo); ?></strong></td>
                    <td><?php echo e($libro->autor); ?></td>
                    <td><?php echo e($libro->anio_publicacion); ?></td>
                    <td><?php echo e($libro->created_at->locale('es')->diffForHumans()); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="vacio">Aún no hay libros registrados. ¡Agrega el primero!</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>
<?php /**PATH D:\laragon\www\registro-libros\resources\views\libros\_tabla.blade.php ENDPATH**/ ?>