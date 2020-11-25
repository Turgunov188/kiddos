
<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6 course d-lg-flex ftco-animate">
	<div class="img" style="background-image: url(<?php echo e(asset('public/images/' . $course->image)); ?>);"></div>
	<div class="text bg-light p-4">
	  <h3><a href="#"><?php echo e($course->lesson); ?> </a></h3>
	  <p class="subheading"><span>Class time:</span> <?php echo e($course->time); ?> </p>
	  <p><?php echo e($course->title); ?></p>
	</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/front/brick-course.blade.php ENDPATH**/ ?>