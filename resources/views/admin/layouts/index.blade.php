<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema de Ventas - Panel Administrativo</title>
  <!-- Icons -->
  <link rel="icon" href="{{ asset('img\favicon.png') }}">

  <link rel="stylesheet" href="{{ asset('vendor\nucleo\css\nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor\@fortawesome\fontawesome-free\css\all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}"> 
  <link rel="stylesheet" href="{{ asset('vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" type="text/css">
  
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('css/argon.css') }}" type="text/css">

  <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />

  <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet" />
  
</head>
<body>

  @include('admin.layouts.sidenav')
  
  <div class="main-content" id="panel">
    @include('admin.layouts.topnav')
    
    @yield('content')
    
  </div>
  
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('vendor\chart.js\dist\Chart.min.js') }}"></script>
  <script src="{{ asset('vendor\chart.js\dist\Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('js\argon.js') }}"></script>
  
  <script src="{{ asset('vendor\datatables\jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor\datatables\dataTables.bootstrap4.min.js') }}"></script> 

  <script src="{{ asset('js\select2.min.js') }}"></script>

  <script src="{{ asset('js\jquery.inputmask.js') }}"></script>
  
  <script src="{{ asset('js\dropzone.min.js') }}"></script>
  <!-- Page level custom scripts -->
  @yield('scripts')
</body>

</html>