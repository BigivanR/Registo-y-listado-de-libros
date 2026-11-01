<?php $__env->startSection('titulo', 'Libros'); ?>

<?php $__env->startSection('contenido'); ?>
    <?php if(session('exito')): ?>
        <?php if (isset($component)) { $__componentOriginal5a24ad53a597d4ec9d7665cebf2a8aa2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a24ad53a597d4ec9d7665cebf2a8aa2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alerta','data' => ['tipo' => 'exito','class' => 'alerta-con-imagen']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alerta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tipo' => 'exito','class' => 'alerta-con-imagen']); ?>
            <img src="<?php echo e(asset('img/conserje.gif')); ?>" alt="Conserje de Enchufe.tv" onerror="this.remove()">
            <span><?php echo e(session('exito')); ?></span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5a24ad53a597d4ec9d7665cebf2a8aa2)): ?>
<?php $attributes = $__attributesOriginal5a24ad53a597d4ec9d7665cebf2a8aa2; ?>
<?php unset($__attributesOriginal5a24ad53a597d4ec9d7665cebf2a8aa2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a24ad53a597d4ec9d7665cebf2a8aa2)): ?>
<?php $component = $__componentOriginal5a24ad53a597d4ec9d7665cebf2a8aa2; ?>
<?php unset($__componentOriginal5a24ad53a597d4ec9d7665cebf2a8aa2); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <?php if (isset($component)) { $__componentOriginal5a24ad53a597d4ec9d7665cebf2a8aa2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a24ad53a597d4ec9d7665cebf2a8aa2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alerta','data' => ['tipo' => 'error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alerta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tipo' => 'error']); ?>Por estas cosas el champú (sí, champú como suena, no juzgue) trae indicaciones. Revise antes de darle a guardar. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5a24ad53a597d4ec9d7665cebf2a8aa2)): ?>
<?php $attributes = $__attributesOriginal5a24ad53a597d4ec9d7665cebf2a8aa2; ?>
<?php unset($__attributesOriginal5a24ad53a597d4ec9d7665cebf2a8aa2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a24ad53a597d4ec9d7665cebf2a8aa2)): ?>
<?php $component = $__componentOriginal5a24ad53a597d4ec9d7665cebf2a8aa2; ?>
<?php unset($__componentOriginal5a24ad53a597d4ec9d7665cebf2a8aa2); ?>
<?php endif; ?>
    <?php endif; ?>

    <div class="columnas">
        <?php echo $__env->make('libros._formulario', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('libros._tabla', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <img class="bibliotecaria" src="<?php echo e(asset('img/bibliotecaria.gif')); ?>" alt="Bibliotecaria" onerror="this.remove()">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\registro-libros\resources\views\libros\index.blade.php ENDPATH**/ ?>