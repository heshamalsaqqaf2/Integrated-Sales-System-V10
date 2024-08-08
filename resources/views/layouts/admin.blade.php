<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="keywords" content="System">
  <meta name="description" content="Sales System">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <title>@yield('title')</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/customStyle.min.css') }}">
  <!-- File Pond -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/filePondPluginImagePreview.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/filePond.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/Almarai/almaraiFont.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('admin.includes.navbar')
    @include('admin.includes.sidebar')
    @include('admin.includes.content')
    @include('admin.includes.footer')
  </div>
  <!-- jQuery -->
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- DataTables -->
  {{--  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script> --}}
  <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

  <!-- Data Table Customization -->
  {{-- <script>
    $(function() {
      $("#example2").DataTable();
      $('#example1').DataTable({
        "paging": false,
        "lengthChange": true,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": true,
      });
    });
  </script> --}}
</body>

</html>
