<?php $__env->startSection('form-open'); ?>
    <form method="post" action="<?php echo e(route('blogs.store')); ?>">
                    <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('POST')); ?>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.blogs.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/back/blogs/create.blade.php ENDPATH**/ ?>