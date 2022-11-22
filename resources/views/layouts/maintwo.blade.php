<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
  <title>G-Tag | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->

  <!-- Font Awesome Icons -->

    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.min.css')}}"> --}}
	{{-- <link href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet"> --}}

  <!-- CSS -->

    

  <!-- Calendar -->

  <!-- Data Tables -->

    {{-- <link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet"> --}}

  <!-- front -->

    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    {{-- <link href="{{asset('css/style.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
  

</head>
<body>

  <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="sk-three-bounce">
          <div class="sk-child sk-bounce1"></div>
          <div class="sk-child sk-bounce2"></div>
          <div class="sk-child sk-bounce3"></div>
      </div>
  </div>
  <!--*******************
      Preloader end
  ********************-->

@if (Auth::check())

<div id="main-wrapper">

  <!-- Navbar -->
    @include('layouts.navbar')
  <!-- /.navbar -->

  

  <!-- Main Sidebar Container -->
    @include('layouts.sidebar')

    <!-- Main content -->
    <div class="content-body">
        @yield('content')
    </div>
    <!-- /.content -->


  <!--**********************************
            Footer start
  ***********************************-->
  <div class="footer">
      <div class="copyright">
            <p>G-Tag-2022</p>
      </div>
  </div>
  <!--**********************************
          Footer end
  ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

@else

<div class="container mt-5">
  <div class="row">
      <div class="col-4">
        <h3>You're not login yet</h3>
        <a href="/login" class="btn btn-warning">login</a>
      </div>
  </div>
</div>

@endif

<!-- REQUIRED SCRIPTS -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('vendor/global/global.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/deznav-init.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>

<!-- Datatable -->
<script src="{{asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>

</body>
</html>
