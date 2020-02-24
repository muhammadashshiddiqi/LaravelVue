<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <link href=" {{ asset('theme/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    

    <script src="{{ asset('theme/vendor/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('theme/vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>
    <script src="{{ asset('theme/js/sb-admin-2.min.js') }}" defer></script>
    <script src="{{ asset('theme/vendor/chart.js/Chart.min.js') }}" defer></script>
    <script src="{{ asset('theme/js/demo/chart-area-demo.js') }}" defer></script>
    <script src="{{ asset('theme/js/demo/chart-pie-demo.js') }}" defer></script>
    <script src="{{ asset('theme/vendor/datatables/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.js') }}" defer></script>
    <script src="{{ asset('theme/js/demo/datatables-demo.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
