<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>KinderGarden | Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- AdminLTE -->
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/css/bootstrap.min.css') }}">
        <link type="text/css" href="{{ asset('public/AdminLTE/js/jquery-ui-1.9.2.custom/development-bundle/themes/base/jquery-ui.css') }}" rel="stylesheet" />

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->

        <link rel="stylesheet" href="{{ asset('public/AdminLTE/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/css/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/css/main_v2.1.9.css') }}">

        <!-- sort icon -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->

        <!-- my customer.css -->
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/css/back.css') }}">

        <!-- awesome -->
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">


        @yield('css')
    </head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">

<div class="wrapper">

    <header class="main-header">
        <a href="" class="logo">
             <span class="logo-mini"><b>C</b></span>
            <span class="logo-lg">Kids</span>
        </a>

        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-user fa-fw"></i>
                          <!-- Auth-user -->
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                      <div class="add_funct_top">
                                      <a class="btn btn-default btn-xs btn-block page_content" href="#" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><div class="dropdown-menu-div">Logout</div></a>
                                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                      </form>
                                    </div>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

     <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header bolder" style="color: white;">MENU</li>
                <li>
                    <a href="">
                        <i class="fa fa-folder-o"></i> <span>HOME</span>
                    </a>
                </li>
                <li class="header" style="font-size: 15px;">Kindergarden</li>
                <li>
                    <a href="{{url('/dashboard')}}">
                        <i class="fa fa-folder-o"></i> <span>List of Teachers</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('teachers.create') }}">
                        <i class="fa fa-folder-o"></i> <span>Add new Teachers</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/blogsdashboard')}}">
                        <i class="fa fa-folder-o"></i> <span>List of Blogs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blogs.create') }}">
                        <i class="fa fa-folder-o"></i> <span>Add new Blogs</span>
                    </a>
                </li>
                <li>
                        <a href="{{url('/coursedashboard')}}">
                        <i class="fa fa-folder-o"></i> <span>List of Courses</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('courses.create') }}">
                        <i class="fa fa-folder-o"></i> <span>Add new Course</span>
                    </a>
                </li>
            </ul>
        </section>

    </aside>

    <div class="content-wrapper">

@yield('main')

        </div>

    <footer class="main-footer">
        <div id="arrowup"><i class="fa fa-angle-double-up"></i></div>
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2019 <a href="#">"25one"</a>.</strong> All rights reserved.
    </footer>


</div>

<!-- AdminLTE -->
<script src="{{ asset('public/AdminLTE/js/jQuery-2.2.0.min.js') }}"></script>
<script src="{{ asset('public/AdminLTE/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/AdminLTE/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/AdminLTE/js/app.min.js') }}"></script>

<!-- Sweet Alert -->
<!-- <script src="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.js"></script> -->


@yield('js')
</body>

</html>
