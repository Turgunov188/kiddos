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
            <?php if(session('blog-ok')): ?>
                <?php $__env->startComponent('back.components.alert'); ?>
                    <?php $__env->slot('type'); ?>
                        success
                    <?php $__env->endSlot(); ?>
                    <?php echo session('blog-ok'); ?>

                <?php echo $__env->renderComponent(); ?>
            <?php endif; ?>
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                    <div class="box-body">
                        <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->    
                          <img class="img_product" src="<?php if(isset($image)): ?><?php echo e(asset('public/images/blogs/' . $image)); ?><?php elseif(isset($blog)): ?><?php echo e(asset('public/images/' . $blog->image)); ?><?php else: ?><?php echo e(asset('public/images/nophoto.jpg')); ?><?php endif; ?>" alt="" style="width: 150px; margin-top: 5px;" />

                          <!-- not updating image, only creating -->
                          <?php if(\Request::is('blogs/create')): ?>
                          <form method="post" action="<?php echo e(route('uploadblog')); ?>" name="form_upload" enctype="multipart/form-data">
                                            <?php echo e(csrf_field()); ?>    
                              <input type="file" name="image" class="upload_field" value="<?php if(isset($image)): ?><?php elseif(isset($blog)): ?><?php echo e($blog->image); ?><?php echo e($image); ?><?php elseif(old('image')): ?><?php echo e(old('image')); ?><?php else: ?><?php echo e('nophoto.jpg'); ?><?php endif; ?>">
                              <button type="submit" class="upload_submit">Go</button>
                              <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Select</button>
                          </form> 
                          <?php endif; ?>        
                        </div>
                        <?php echo $__env->yieldContent('form-open'); ?>  
                        <!-- 'bg-img/' . - custom -->
                        <input type="hidden" id="image" name="image" value="<?php if(isset($image)): ?><?php echo e('blogs/' . $image); ?><?php elseif(isset($blog)): ?><?php echo e($blog->image); ?><?php else: ?><?php echo e('blogs/nophoto.jpg'); ?><?php endif; ?>">   
                        <div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo app('translator')->getFromJson('Title'); ?></label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php if(isset($blog)): ?><?php echo e($blog->title); ?><?php elseif(old('title')): ?><?php echo e(old('title')); ?><?php endif; ?>" placeholder="Title"> 
                            <?php echo $errors->first('title', '<small class="help-block">:message</small>'); ?>

                        </div>
                        <div class="form-group <?php echo e($errors->has('day') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo app('translator')->getFromJson('Day'); ?></label>
                            <input type="text" class="form-control" id="day" name="day" value="<?php if(isset($blog)): ?><?php echo e($blog->day); ?><?php elseif(old('day')): ?><?php echo e(old('day')); ?><?php endif; ?>" placeholder="Day"> 
                            <?php echo $errors->first('day', '<small class="help-block">:message</small>'); ?>

                        </div>
                        <div class="form-group <?php echo e($errors->has('month') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo app('translator')->getFromJson('Month'); ?></label>
                            <input type="text" class="form-control" id="month" name="month" value="<?php if(isset($blog)): ?><?php echo e($blog->month); ?><?php elseif(old('month')): ?><?php echo e(old('month')); ?><?php endif; ?>" placeholder="Month"> 
                            <?php echo $errors->first('month', '<small class="help-block">:message</small>'); ?>

                        </div>
                        <div class="form-group <?php echo e($errors->has('year') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo app('translator')->getFromJson('Year'); ?></label>
                            <input type="text" class="form-control" id="year" name="year" value="<?php if(isset($blog)): ?><?php echo e($blog->year); ?><?php elseif(old('year')): ?><?php echo e(old('year')); ?><?php endif; ?>" placeholder="Year"> 
                            <?php echo $errors->first('year', '<small class="help-block">:message</small>'); ?>

                        </div>
                        <div class="form-group <?php echo e($errors->has('information') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo app('translator')->getFromJson('Information'); ?></label>
                            <input type="text" class="form-control" id="information" name="information" value="<?php if(isset($blog)): ?><?php echo e($blog->information); ?><?php elseif(old('information')): ?><?php echo e(old('information')); ?><?php endif; ?>" placeholder="information"> 
                            <?php echo $errors->first('information', '<small class="help-block">:message</small>'); ?>

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

<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/back/blogs/template.blade.php ENDPATH**/ ?>