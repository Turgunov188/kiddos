<?php $__env->startSection('css'); ?>
<style>
  .joined{
  text-align: center;
}

.content{
  width: 30%
}
.back-pannel img {
width: 120px;
}

</style>
<?php
//print_r($courses);
?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

       <!-- yield('main') -->
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                    	<?php if(session('course-updated')): ?>
                          <?php $__env->startComponent('back.components.alert'); ?>
                              <?php $__env->slot('type'); ?>
                                  success
                              <?php $__env->endSlot(); ?>
                              <?php echo session('course-updated'); ?>

                          <?php echo $__env->renderComponent(); ?>
                       <?php endif; ?>
                      <table>
                         <thead>
                          <tr>
                            <td>Image</td>
                            <td>Lesson</td>
                            <td>Time</td>
                            <td>Title</td>
                            <td class="widthbutton">&nbsp;</td>
                            <td class="widthbutton">&nbsp;</td>
                          </tr>
                          </thead>
                          <tbody id="pannel" class="back-pannel">
                            <?php echo $__env->make('back.brick-standard-course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         </tbody>
                       </table>
                     </div>
                     <hr>
                   </div>
                 </div>
              </div>
           </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('public/js/course.js')); ?>"></script>
<script>
   $(document).ready(function(){
          $('.listbuttonremove').click(function(){
             BaseRecord.destroy($(this).attr('id'));
             alert('Deleted')
             return false;
          });
   });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/back/indexcourse.blade.php ENDPATH**/ ?>