
<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td class="joined"><img src="<?php echo e(asset('public/images/' . $blog->image)); ?>" ></td>
<td class="joined"> <?php echo e($blog->title); ?> </td>
<td class="joined"> <?php echo e($blog->day); ?> </td>
<td class="joined"> <?php echo e($blog->month); ?> </td>
<td class="joined"> <?php echo e($blog->year); ?> </td>
<td class="joined content"><?php echo e($blog->information); ?></td>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="<?php echo e($blog->id); ?>" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
<td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="<?php echo e(route('blogs.edit', [$blog->id])); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/back/brick-standard-blog.blade.php ENDPATH**/ ?>