<?php
//print_r($teachers);
?>

<?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="staff">
    <div class="img-wrap d-flex align-items-stretch">
      <div class="img align-self-stretch" style="background-image: url(<?php echo e(asset('public/images/' . $teacher->image)); ?>);"></div>
    </div>
    <div class="text pt-3 text-center">
      <h3><?php echo e($teacher->name); ?></h3>
      <span class="position mb-2"><?php echo e($teacher->job); ?></span>
      <div class="faded">
        <p><?php echo e($teacher->about); ?></p>
        <!-- <ul class="ftco-social text-center">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul> -->
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/front/brick-standard.blade.php ENDPATH**/ ?>