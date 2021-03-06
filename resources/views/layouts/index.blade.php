<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ========== SEO ========== -->
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="{{ asset('himara/images/favicon.png') }}">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="{{ asset('himara/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('himara/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('himara/css/jquery.mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('himara/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('himara/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('himara/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('himara/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('himara/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('himara/css/responsive.css') }}">
    <!-- ========== ICON FONTS ========== -->
    <link href="{{ asset('himara/fonts/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('himara/fonts/flaticon.css') }}" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.9.1/cdn.js"></script>
    <link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>

</head>

<body>
    <!-- ========== MOBILE MENU ========== -->
    @include('templates.components.mobile-menu')
    <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        @include('templates.components.top-menu')
        <!-- ========== HEADER ========== -->
        @include('templates.components.header')
        @include('layouts.flash-boostrap')
        @yield('main')
        <!-- ========== FOOTER ========== -->
        @include('templates.components.footer')
        <!-- ========== BACK TO TOP ========== -->
        @include('templates.components.back-to-top')
    </div>

<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
    <script>
        
        L.mapbox.accessToken =
            'pk.eyJ1IjoibW9wZXNvbm9odSIsImEiOiJjbDEyNmo1bzIzMTZ5M2Rxb2R2aHhpcGxqIn0.tI2eAdR1pJLmnh8wRfyefw';
            
        var map = L.mapbox.map('map-canvas')
            .setView([50.85616864124496, 4.34138976137574], 15)
            .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));
        // L.marker is a low-level marker constructor in Leaflet.
        L.marker([50.85616864124496, 4.34138976137574]).addTo(map);
    </script>
    <!-- ========== JAVASCRIPT ========== -->
    <script src="{{ asset('himara/js/jquery.min.js') }}"></script>
    <script src="{{ asset('himara/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('himara/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('himara/js/jquery.mmenu.js') }}"></script>
    <script src="{{ asset('himara/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('himara/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('himara/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('himara/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('himara/js/owl.carousel.thumbs.min.js') }}"></script>
    <script src="{{ asset('himara/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('himara/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('himara/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('himara/js/wow.min.js') }}"></script>
    <script src="{{ asset('himara/js/countup.min.js') }}"></script>
    <script src="{{ asset('himara/js/moment.min.js') }}"></script>
    <script src="{{ asset('himara/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('himara/js/parallax.min.js') }}"></script>
    <script src="{{ asset('himara/js/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('himara/js/instafeed.min.js') }}"></script>
    <script src="{{ asset('himara/js/main.js') }}"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js ') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

</body>

</html>
