@extends('front.layout')

@section('css')

@endsection

@section('main')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('public/images/bg_2.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Bizning Kurslarimiz</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Bosh Sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>Kurslarimiz <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
			<div class="container">
				<div class="row">
					@include('front.brick-course')
				</div>
			</div>
		</section>

@endsection

@section('js')

@endsection
