<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(<?php echo e(asset('public/images/menu1.jpg')); ?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4"><span></span></h1>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(<?php echo e(asset('public/images/menu2.jpg')); ?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4"><span> </span></h1>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
            <div class="text px-4 ftco-animate">
              <h2 class="mb-4">Jajjilar Saltanati bog'chasiga xush kelibsiz !</h2>
              <p>Bizning bog'chamizga bolalaringizni bersangiz xato qilmagan bo'lasiz, aksincha juda tog'ri qaror qabul qilgan bo'lasizlar hurmatli ota-onalar.</p>
              <p>Hurmatli ota-onalar sizning bolaringiz bog'chadan boshlab yozish, chizish, sanash va chet-tillarini birgalikda o'rganadi.</p>
            </div>
          </div>
          <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Biz sizga nimani taklif qilamiz</h2>
            <p></p>
            <div class="row mt-5">
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                  <div class="text">
                    <h3>Birinchi navbatda bolalar uchun xavfsiz va ishonchli !</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                  <div class="text">
                    <h3>Bolalar uchun muntazam mashg'ulotlar !</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                  <div class="text">
                    <h3>O'qituvchilarimiz oliy ta'limni bitirishgan !</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                  <div class="text">
                    <h3>Bog'chaning hamma sharoitlari mavjud !</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                  <div class="text">
                    <h3>Bolalar uchun darslar o'tiladi !</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                  <div class="text">
                    <h3>Bolalar uchun sport maydonlari va oyin maydonchalar mavjud !</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Bog'chamizning </span>Hodimlari</h2>
            <p>Bog'chamizga yillar davomida o'z mehnatini ayamayotkan hodimlarimiz</p>
          </div>
        </div>
        <div class="row">

          <?php echo $__env->make('front.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Bizning</span> Kurslarimiz</h2>
          </div>
        </div>
        <div class="row">

          <?php echo $__env->make('front.brick-course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo e(asset('public/images/bg_4.jpg')); ?>);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>20 Yillik</span> Tajriba</h2>
            <p>Ushbu bino 1986-yilda qurilgan, hozirgi holati juda zamonaviy.</p>
          </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
          <div class="col-lg-10">
            <div class="row d-md-flex align-items-center">
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="16">0</strong>
                    <span>Tarbiyachilar soni</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="3">0</strong>
                    <span>Musiqa ustozlari</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="150">0</strong>
                    <span>Bolalarimiz</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="300">0</strong>
                    <span>Baxtli ota-onalar</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--  -->

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>So'ngi</span> Yangiliklar</h2>
          </div>
        </div>
        <div class="row">

          <?php echo $__env->make('front.brick-blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
      </div>
    </section>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\OpenServer\domains\laravel-compare\resources\views/front/index.blade.php ENDPATH**/ ?>