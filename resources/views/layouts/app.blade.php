<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UAS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
	============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('base/img/favicon.ico')}}">
  <!-- Google Fonts
	============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
  <!-- Bootstrap CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/css/bootstrap.min.css')}}">
  <!-- Bootstrap CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/css/font-awesome.min.css')}}">
  <!-- adminpro icon CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/css/adminpro-custon-icon.css')}}">
  <!-- meanmenu icon CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/css/meanmenu.min.css')}}">
  <!-- mCustomScrollbar CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/css/jquery.mCustomScrollbar.min.css')}}">
  <!-- animate CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/css/animate.css')}}">
  <!-- normalize CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/css/normalize.css')}}">
  <!-- form CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/css/form.css')}}">
  <!-- style CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/style.css')}}">
  <!-- responsive CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('base/css/responsive.css')}}">
  <!-- modernizr JS
	============================================ -->
  <script src="{{asset('base/js/vendor/modernizr-2.8.3.min.js')}}"></script>    <script src="{{asset('base/js/vendor/jquery-1.11.3.min.js')}}"></script>
  <!-- bootstrap JS
	============================================ -->
  <script src="{{asset('base/js/bootstrap.min.js')}}"></script>
  <!-- meanmenu JS
	============================================ -->
  <script src="{{asset('base/js/jquery.meanmenu.js')}}"></script>
  <!-- mCustomScrollbar JS
	============================================ -->
  <script src="{{asset('base/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <!-- sticky JS
	============================================ -->
  <script src="{{asset('base/js/jquery.sticky.js')}}"></script>
  <!-- scrollUp JS
	============================================ -->
  <script src="{{asset('base/js/jquery.scrollUp.min.js')}}"></script>
  <!-- form validate JS
	============================================ -->
  <script src="{{asset('base/js/jquery.form.min.js')}}"></script>
  <script src="{{asset('base/js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('base/js/form-active.js')}}"></script>
  <!-- main JS
	============================================ -->
  <script src="{{asset('base/js/main.js')}}"></script>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/select2.css')}}">
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css')}}">
  @section('css')

  @show
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
</head>
<body>
    <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html" style="color: #2d2d2d">
          PERPUSKU
        </a>
           <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
          <i class="fa fa-align-justify" style="color: #fff;"></i>
        </button>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item dropdown d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{Auth::user()->name}} !</span>
                @if(Auth::user()->gambar == '')
                  <img class="img-xs rounded-circle"  src="{{asset('images/user/default.png')}}" alt="profile image">
                @else
                <img class="img-xs rounded-circle"  src="{{asset('images/user/'.Auth::user()->gambar)}}" alt="profile image">
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                 
                </div>
              </a>
              <a class="dropdown-item" style="margin-top: 20px;" href="{{route('user.edit', Auth::user()->id)}}">
               Edit Profile
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 Sign Out

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </a>
            </div>
          </li>
        </ul>
     
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      @section('sidebar')
          @include('layouts.sidebar',['user' => Auth::User()])
      @show
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')

        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{date('Y')}}
            <a href="https://gilacoding.com/" target="_blank">Gilacoding</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('js/sweetalert2.all.js')}}"></script>
  <script src="{{asset('js/select2.min.js')}}"></script>
  @include('sweetalert::alert')
  @section('js')

  @show
</body>

</html>
                         
   