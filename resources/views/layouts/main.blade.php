<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name','Zaman') }}</title>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    {{-- <!-- Custom fonts for this template--> --}}
    <link href="{{ asset('core/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> --}}

    <!-- Custom styles for this template-->
    <link href="{{ asset('core/css/sb-admin-2.min.css') }}" rel="stylesheet">
    @livewireStyles

</head>
<body id="page-top">

    {{ $slot }}
    <!-- Bootstrap core JavaScript-->
    {{-- <script src="{{ asset('core/vendor/jquery/jquery.js') }}"></script> --}}
    {{-- <script src="{{ asset('core/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script> --}}

    <!-- Core plugin JavaScript-->
    {{-- <script src="{{ asset('core/vendor/jquery-easing/jquery.easing.js') }}"></script> --}}

    <!-- Custom scripts for all pages-->
    {{-- <script src="{{ asset('core/js/sb-admin-2.js') }}"></script> --}}

    <!-- Page level plugins -->
    @livewireScripts

</body>

</html>
