<!DOCTYPE html>
<html lang="en">
  <head>
    <title>68-МТТ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

    @yield('css')

  </head>
  <body>

    <div class="wrapper">
        @include('front.navbar')
    </div>

  @yield('js')

  <script src="{{ asset('public/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('public/js/popper.min.js') }}"></script>
  <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('public/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('public/js/aos.js') }}"></script>
  <script src="{{ asset('public/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('public/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('public/js/google-map.js') }}"></script>
  <script src="{{ asset('public/js/main.js') }}"></script>

  </body>
</html>
