<!doctype html>
<html lang="en" class="light-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('admin-assets/assets/images/favicon-32x32.png') }}" type="image/png" />
  <link href="{{ asset('admin-assets/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/css/icons.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('admin-assets/assets/css/pace.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/css/dark-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/css/light-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/css/semi-dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/css/header-colors.css') }}" rel="stylesheet" />
  @yield('styles')
  <title>Snacked - Bootstrap 5 Admin Template</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
     @include('admin.layouts.header')
     @include('admin.layouts.sidebar')

     @yield('content')

     @include('admin.layouts.tools')

       <!--end top header-->


       <!--end sidebar -->

       <!--start content-->
          
       <!--end page main-->


  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
 <script src="{{ asset('admin-assets/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/js/pace.min.js') }}"></script>
  @yield('plugin-scripts')
  <script src="{{ asset('admin-assets/assets/js/app.js') }}"></script>
  @yield('scripts')


</body>

</html>