<?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td class="joined"><img src="<?php echo e(asset('public/images/' . $teacher->image)); ?>" ></td>
<td class="joined"> <?php echo e($teacher->name); ?> </td>
<td class="joined"> <?php echo e($teacher->job); ?> </td>
<td class="joined content"><?php echo e($teacher->about); ?></td>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="<?php echo e($teacher->id); ?>" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
<td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="<?php echo e(route('teachers.edit', [$teacher->id])); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/back/brick-standard.blade.php ENDPATH**/ ?>