
<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6 col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a class="block-20 d-flex align-items-end" style="background-image: url('<?php echo e(asset('public/images/' . $blog->image)); ?>');">
        <div class="meta-date text-center p-2">
        <span class="day"><?php echo e($blog->day); ?></span>
        <span class="mos"><?php echo e($blog->month); ?></span>
        <span class="yr"><?php echo e($blog->year); ?></span>
      </div>
    </a>
    <div class="text bg-white p-4">
      <h3 class="heading"><a ><?php echo e($blog->title); ?></a></h3>
      <p><?php echo e($blog->information); ?></p>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/front/brick-blog.blade.php ENDPATH**/ ?>