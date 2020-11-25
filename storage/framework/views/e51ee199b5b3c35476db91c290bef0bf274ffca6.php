<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td class="joined"><img src="<?php echo e(asset('public/images/' . $course->image)); ?>" ></td>
<td class="joined"> <?php echo e($course->lesson); ?> </td>
<td class="joined"> <?php echo e($course->time); ?> </td>
<td class="joined content"><?php echo e($course->title); ?></td>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="<?php echo e($course->id); ?>" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
<td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="<?php echo e(route('courses.edit', [$course->id])); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/back/brick-standard-course.blade.php ENDPATH**/ ?>