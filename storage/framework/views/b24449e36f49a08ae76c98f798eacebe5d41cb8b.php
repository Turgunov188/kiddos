<?php $__env->startSection('css'); ?>
<style>
.upload_field {
opacity:0.0;
z-index:2;
position:absolute;
}
.upload_submit {
z-index:1;
display:none;
}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="row">
        <!-- left column -->
       <div class="col-md-3">
       </div>
        <!-- center column -->       
        <div class="col-md-6 margin">
            <?php if(session('course-ok')): ?>
                <?php $__env->startComponent('back.components.alert'); ?>
                    <?php $__env->slot('type'); ?>
                        success
                    <?php $__env->endSlot(); ?>
                    <?php echo session('course-ok'); ?>

                <?php echo $__env->renderComponent(); ?>
            <?php endif; ?>
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                    <div class="box-body">
                        <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->    
                          <img class="img_product" src="<?php if(isset($image)): ?><?php echo e(asset('public/images/courses/' . $image)); ?><?php elseif(isset($course)): ?><?php echo e(asset('public/images/' . $course->image)); ?><?php else: ?><?php echo e(asset('public/images/nophoto.jpg')); ?><?php endif; ?>" alt="" style="width: 150px; margin-top: 5px;" />

                          <!-- not updating image, only creating -->
                          <?php if(\Request::is('courses/create')): ?>
                          <form method="post" action="<?php echo e(route('uploadcourse')); ?>" name="form_upload" enctype="multipart/form-data">
                                            <?php echo e(csrf_field()); ?>    
                              <input type="file" name="image" class="upload_field" value="<?php if(isset($image)): ?><?php elseif(isset($course)): ?><?php echo e($course->image); ?><?php echo e($image); ?><?php elseif(old('image')): ?><?php echo e(old('image')); ?><?php else: ?><?php echo e('nophoto.jpg'); ?><?php endif; ?>">
                              <button type="submit" class="upload_submit">Go</button>
                              <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Select</button>
                          </form> 
                          <?php endif; ?>        
                        </div>
                        <?php echo $__env->yieldContent('form-open'); ?>  
                        <!-- 'bg-img/' . - custom -->
                        <input type="hidden" id="image" name="image" value="<?php if(isset($image)): ?><?php echo e('courses/' . $image); ?><?php elseif(isset($course)): ?><?php echo e($course->image); ?><?php else: ?><?php echo e('courses/nophoto.jpg'); ?><?php endif; ?>">   
                        <div class="form-group <?php echo e($errors->has('lesson') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo app('translator')->getFromJson('Lesson'); ?></label>
                            <input type="text" class="form-control" id="lesson" name="lesson" value="<?php if(isset($course)): ?><?php echo e($course->lesson); ?><?php elseif(old('lesson')): ?><?php echo e(old('lesson')); ?><?php endif; ?>" placeholder="Lesson"> 
                            <?php echo $errors->first('lesson', '<small class="help-block">:message</small>'); ?>

                        </div>
                        <div class="form-group <?php echo e($errors->has('time') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo app('translator')->getFromJson('Time'); ?></label>
                            <input type="text" class="form-control" id="time" name="time" value="<?php if(isset($course)): ?><?php echo e($course->time); ?><?php elseif(old('time')): ?><?php echo e(old('time')); ?><?php endif; ?>" placeholder="Time"> 
                            <?php echo $errors->first('time', '<small class="help-block">:message</small>'); ?>

                        </div>
                        <div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo app('translator')->getFromJson('Title'); ?></label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php if(isset($course)): ?><?php echo e($course->title); ?><?php elseif(old('title')): ?><?php echo e(old('title')); ?><?php endif; ?>" placeholder="Title"> 
                            <?php echo $errors->first('title', '<small class="help-block">:message</small>'); ?>

                        </div>
                                           
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->getFromJson('Submit'); ?></button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <!-- right column -->
       <div class="col-md-3">
       </div> 
    </div>
    <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
$(document).ready(function(){
  $("body").on("change", ".upload_field", function(){
    //alert('hi');
    $(".upload_submit").click();
  });
});       
</script>
<?php $__env->stopSection(); ?>  

<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/back/courses/template.blade.php ENDPATH**/ ?>