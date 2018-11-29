<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>@yield('title') | HairTrip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noindex,nofollow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">
    @yield('custom.css')
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<!--loader-->
<div class="loader-wrap">
    <div class="custom-pin">
        <img src="{{ asset('images/marker.png') }}" alt="">
    </div>
    <div class="pulse"></div>
</div>
<!--loader end-->
<!-- Main  -->
<div id="main">
    @include('frontend.partials.navbar')
    <!-- wrapper -->
    <div id="wrapper">
        <!-- Content-->
        <div class="content">
            @yield('content')
        </div>
        <!-- Content end -->
    </div>
    <!-- wrapper end -->
    <!--footer -->
    @include('frontend.partials.footer')
    <!--footer end  -->

    <a class="to-top"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOURAPIKEYHERE&libraries=places&callback=initAutocomplete"></script>
@yield('footer.scripts')
</body>
</html>