<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>@yield('title')</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/@fortawesome/fontawesome-free/css/brands.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/@fortawesome/fontawesome-free/css/regular.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/@fortawesome/fontawesome-free/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/@fortawesome/fontawesome-free/css/fontawesome.css')}}">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/animate.css/animate.css')}}">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/whirl/dist/whirl.css')}}">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/css/bootstrap.css')}}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/css/app.css')}}" id="maincss">
    @yield('css')
</head>

<body>
<div class="wrapper">
    <!-- top navbar-->
    @include('dashboard.layouts.header')
    <!-- sidebar-->
    @include('dashboard.layouts.sidebar')

    <!-- Main section-->
    @yield('main')
    <!-- Page footer-->
    <footer class="footer-container">
        <span>&copy; 2018 - Angle</span>
    </footer>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
<script src="{{asset('dashboard_assets/vendor/modernizr/modernizr.custom.js')}}"></script>
<!-- STORAGE API-->
<script src="{{asset('dashboard_assets/vendor/js-storage/js.storage.js')}}"></script>
<!-- SCREENFULL-->
<script src="{{asset('dashboard_assets/vendor/screenfull/dist/screenfull.js')}}"></script>
<!-- i18next-->
<script src="{{asset('dashboard_assets/vendor/i18next/i18next.js')}}"></script>
<script src="{{asset('dashboard_assets/vendor/i18next-xhr-backend/i18nextXHRBackend.js')}}"></script>
<script src="{{asset('dashboard_assets/vendor/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('dashboard_assets/vendor/popper.js/dist/umd/popper.js')}}"></script>
<script src="{{asset('dashboard_assets/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->
<!-- =============== APP SCRIPTS ===============-->
<script src="{{asset('dashboard_assets/js/app.js')}}"></script>
@yield('script')
</body>

</html>
