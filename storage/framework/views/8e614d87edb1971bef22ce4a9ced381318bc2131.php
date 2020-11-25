<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset('public/images/bg_2.jpg')); ?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Bizning Kurslarimiz</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo e(route('home')); ?>">Bosh Sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>Kurslarimiz <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<?php echo $__env->make('front.brick-course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
			</div>
		</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/front/courses.blade.php ENDPATH**/ ?>