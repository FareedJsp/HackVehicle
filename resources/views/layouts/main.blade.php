<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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

  <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">

  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.min.css')}}">
	<link href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css')}}">

</head>
<body>

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
            <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignZone</a> 2021</p>
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
<script data-cfasync="false" src="{{asset('../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('vendor/global/global.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('vendor/lightgallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/deznav-init.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>
<script src="{{asset('js/styleSwitcher.js')}}"></script>

</body>
</html>
