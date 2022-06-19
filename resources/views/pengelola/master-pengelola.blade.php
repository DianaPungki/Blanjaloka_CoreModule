<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengelola | {{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/admin/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.css') }}">
  {{-- logo --}}
  <link rel="shortcut icon" href="http://accounting.com.my/wp-content/uploads/2016/08/buy_logo1.png" type="image/x-icon">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
   <!-- Ekko Lightbox -->
   <link rel="stylesheet" href="{{ asset('template/admin/plugins/ekko-lightbox/ekko-lightbox.css') }}">
   {{-- sweet alert --}}
   <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
</head>
<body>

   <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <!-- jQuery -->
{{-- <script src="{{ asset('template/admin/plugins/jquery/jquery.min.js') }}"></script> --}}
 <!-- jQuery UI 1.11.4 -->
 <script src="{{ asset('template/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <!-- ChartJS -->
 <script src="{{ asset('template/admin/plugins/chart.js/Chart.min.js') }}"></script>
 <!-- Sparkline -->
 <script src="{{ asset('template/admin/plugins/sparklines/sparkline.js') }}"></script>
 <!-- jQuery Knob Chart -->
 <script src="{{ asset('template/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
 <!-- daterangepicker -->
 <script src="{{ asset('template/admin/plugins/moment/moment.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="{{ asset('template/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
 <!-- Summernote -->
 <script src="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
 <!-- overlayScrollbars -->
 <script src="{{ asset('template/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('template/admin/js/adminlte.js') }}"></script>
 <!-- JQVMap -->
 <script src="{{ asset('template/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
 <!-- AdminLTE for demo purposes -->
 {{-- <script src="{{ asset('template/admin/js/demo.js') }}"></script> --}}
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 {{-- <script src="{{ asset('template/admin/js/pages/dashboard.js') }}"></script> --}}
 
 {{-- datatables --}}
 <script src="{{ asset('template/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('template/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
 {{-- sweetaler --}}
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <script src="{{asset('template/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Ekko Lightbox -->
  <script src="{{asset('template/admin/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('assets/admin/img/blanjaloka.png') }}" alt="AdminLTELogo" height="60" width="180">
  </div>
  {{-- sweet alert --}}
  @include('sweetalert::alert')
  
  @include('pengelola.layouts.navbar')

  @include('pengelola.layouts.sidebar')

 @yield('content')
 
 @include('pengelola.layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

 </body>
</html>
