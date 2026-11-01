<section class="tarjeta">
    <h2>Registrar nuevo libro</h2>

    <form action="<?php echo e(route('libros.store')); ?>" method="POST" novalidate>
        <?php echo csrf_field(); ?>

        <div class="fila">
            <?php if (isset($component)) { $__componentOriginalbb105f7b49c0e9718212460adae840e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb105f7b49c0e9718212460adae840e0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.campo','data' => ['nombre' => 'titulo','etiqueta' => 'Título','maxlength' => '150','placeholder' => 'Pepe y los frijoles mágicos']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('campo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['nombre' => 'titulo','etiqueta' => 'Título','maxlength' => '150','placeholder' => 'Pepe y los frijoles mágicos']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb105f7b49c0e9718212460adae840e0)): ?>
<?php $attributes = $__attributesOriginalbb105f7b49c0e9718212460adae840e0; ?>
<?php unset($__attributesOriginalbb105f7b49c0e9718212460adae840e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb105f7b49c0e9718212460adae840e0)): ?>
<?php $component = $__componentOriginalbb105f7b49c0e9718212460adae840e0; ?>
<?php unset($__componentOriginalbb105f7b49c0e9718212460adae840e0); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalbb105f7b49c0e9718212460adae840e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb105f7b49c0e9718212460adae840e0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.campo','data' => ['nombre' => 'autor','etiqueta' => 'Autor','maxlength' => '100','placeholder' => 'El Vago de la esquina']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('campo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['nombre' => 'autor','etiqueta' => 'Autor','maxlength' => '100','placeholder' => 'El Vago de la esquina']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb105f7b49c0e9718212460adae840e0)): ?>
<?php $attributes = $__attributesOriginalbb105f7b49c0e9718212460adae840e0; ?>
<?php unset($__attributesOriginalbb105f7b49c0e9718212460adae840e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb105f7b49c0e9718212460adae840e0)): ?>
<?php $component = $__componentOriginalbb105f7b49c0e9718212460adae840e0; ?>
<?php unset($__componentOriginalbb105f7b49c0e9718212460adae840e0); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalbb105f7b49c0e9718212460adae840e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb105f7b49c0e9718212460adae840e0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.campo','data' => ['nombre' => 'anio_publicacion','etiqueta' => 'Año de publicación','tipo' => 'number','min' => '1000','max' => ''.e(date('Y')).'','placeholder' => 'En números, por favor, no letras']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('campo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['nombre' => 'anio_publicacion','etiqueta' => 'Año de publicación','tipo' => 'number','min' => '1000','max' => ''.e(date('Y')).'','placeholder' => 'En números, por favor, no letras']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb105f7b49c0e9718212460adae840e0)): ?>
<?php $attributes = $__attributesOriginalbb105f7b49c0e9718212460adae840e0; ?>
<?php unset($__attributesOriginalbb105f7b49c0e9718212460adae840e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb105f7b49c0e9718212460adae840e0)): ?>
<?php $component = $__componentOriginalbb105f7b49c0e9718212460adae840e0; ?>
<?php unset($__componentOriginalbb105f7b49c0e9718212460adae840e0); ?>
<?php endif; ?>
        </div>

        <button type="submit">Guardar libro</button>
    </form>
</section>
<?php /**PATH D:\laragon\www\registro-libros\resources\views\libros\_formulario.blade.php ENDPATH**/ ?>