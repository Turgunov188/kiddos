
<div class="py-2 bg-primary">
  <div class="container">
	<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
		<div class="col-lg-12 d-block">
    		<div class="row d-flex">
	    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
	    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
				    <span class="text">Olmazor tumani Shifokorlar ko'chasi</span>
			    </div>
			    <div class="col-md pr-4 d-flex topper align-items-center">
			    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
				    <span class="text">jajjisaltanat@gmail.com</span>
			    </div>
			    <div class="col-md pr-4 d-flex topper align-items-center">
			    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
				    <span class="text">(71) 214-38-40</span>
			    </div>
		    </div>
	    </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
<div class="container d-flex align-items-center">
	<a class="navbar-brand" href="">Jajjilar Saltanati</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
  </button>
  <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
    	<li class="nav-item"><a href="{{ route('home') }}" class="nav-link pl-0">Bosh sahifa</a></li>
      <li class="nav-item"><a href="{{ route('course') }}" class="nav-link">Bizning kurslarimiz</a></li>
      <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Yangiliklar</a></li>
    	<li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Biz haqimizda</a></li>
        <!-- <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li> -->
	    @guest
	     <li class="nav-item">
	         <a class="nav-link" style="visibility: hidden" href="{{ route('login') }}"></a>
	     </li>
	     <li class="nav-item">
	         <a class="nav-link" style="visibility: hidden" href="{{ route('register') }}"></a>
	     </li>
	   @else
	   <li class="nav-item dropdown">
	       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	           {{ Auth::user()->name }} <span class="caret"></span>
	       </a>

	       <div class="dropdown-menu dropdown-menu-right size" aria-labelledby="navbarDropdown">
	            @admin
	              <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
	            @endadmin
	           <a class="dropdown-item" href="{{ route('logout') }}"
	              onclick="event.preventDefault();
	                            document.getElementById('logout-form').submit();">
	               {{ __('Logout') }}
	           </a>
	           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	               @csrf
	           </form>
	       </div>
	   </li>
	   @endguest

    </ul>
  </div>
</div>
</nav>
<!-- END nav -->

<div class="content-wrapper">
            @yield('main')
        </div>

<!-- footer -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 col-lg-4">
        <div class="ftco-footer-widget mb-5">
        	<h2 class="ftco-heading-2">Savolingiz Bormi?</h2>
        	<div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Olmazor tumani Shifokorlar ko'chasi</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(71) 214-38-40</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">jajjisaltanat@gmail.com</span></a></li>
              </ul>
            </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <div class="ftco-footer-widget mb-5 ml-md-4">
          <h2 class="ftco-heading-2">Havolalar</h2>
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Bosh sahifa</a></li>
            <li><a href="{{ route('course') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Bizning kurslarimiz</a></li>
            <li><a href="{{ route('blog') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Yangiliklar</a></li>
            <li><a href="{{ route('about') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Biz haqimizda</a></li>
            <!-- <li><a href="{{ route('contact') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <div class="ftco-footer-widget mb-5">
        	<h2 class="ftco-heading-2 mb-0">Biz Bilan Bog'laning</h2>
        	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://example.napa.uz/" target="_blank">NapaTeam</a>
        </p>
      </div>
    </div>
  </div>
</footer>
  <!-- End footer -->

  <!-- loader -->
<div id="ftco-loader" class="show fullscreen">
	<svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
	</svg>
</div>
