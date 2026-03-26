<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>PAKJP | @yield('page_title')</title>
    <!-- GLOBAL MAINLY STYLES-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ url('admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ url('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ url('admin/assets/vendors/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ url('admin/assets/vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('admin/assets/vendors/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ url('admin/assets/vendors/toastr/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ url('admin/assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/vendors/dataTables/datatables.min.css') }}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="{{ url('admin/assets/css/main.min.css') }}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>