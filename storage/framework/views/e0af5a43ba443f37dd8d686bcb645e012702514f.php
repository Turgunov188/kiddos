<?php $__env->startSection('form-open'); ?>
    <form method="post" action="<?php echo e(route('courses.update', [$course->id])); ?>">
                     <?php echo e(csrf_field()); ?>

                  <?php echo e(method_field('PUT')); ?>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.courses.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/back/courses/edit.blade.php ENDPATH**/ ?>