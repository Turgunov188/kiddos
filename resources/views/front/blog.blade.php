@extends('front.layout')

@section('css')

@endsection

@section('main')
    @php
     //print_r($blogs);
    @endphp
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('public/images/bg_2.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Bizning Yangiliklarimiz</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Bosh sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>Yangiliklar <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">

          @include('front.brick-blog')

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


@endsection

@section('js')

@endsection
