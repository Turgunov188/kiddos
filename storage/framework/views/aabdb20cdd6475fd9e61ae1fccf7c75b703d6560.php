<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <?php
     //print_r($blogs);
    ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset('public/images/bg_2.jpg')); ?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Bizning Yangiliklarimiz</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(route('home')); ?>">Bosh sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>Yangiliklar <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">

          <?php echo $__env->make('front.brick-blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <!-- <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
              </ul>
            </div>
          </div>
        </div> -->
			</div>
		</section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/front/blog.blade.php ENDPATH**/ ?>