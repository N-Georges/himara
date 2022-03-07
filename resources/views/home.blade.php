@extends('layouts.index')
@section('content')
    <!-- ========== PRELOADER ========== -->
    @include('templates.components.preloader')
    <!-- ========== MOBILE MENU ========== -->
    @include('templates.components.mobile-menu')
    <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        @include('templates.components.top-menu')
        <!-- ========== HEADER ========== -->
        @include('templates.components.header')
        <!-- ========== REVOLUTION SLIDER ========== -->
        @include('templates.components.home.revolution-slider')
        <!-- ========== ABOUT ========== -->
        @include('templates.components.home.about')
        <!-- ========== ROOMS ========== -->
        @include('templates.components.home.rooms')
        <!-- ========== SERVICES ========== -->
        @include('templates.components.home.services')
        <!-- ========== GALLERY ========== -->
        @include('templates.components.home.gallery')
        <!-- ========== TESTIMONIALS ========== -->
        @include('templates.components.home.testimonials')
        <!-- ========== RESTAURANT ========== -->
        @include('templates.components.home.restaurant')
        <!-- ========== NEWS ==========-->
        @include('templates.components.home.news')
        <!-- ========== VIDEO ========== -->
        @include('templates.components.home.video')
        <!-- ========== CONTACT V2 ========== -->
        @include('templates.components.home.contact-v2')
        <!-- ========== FOOTER ========== -->
        @include('templates.components.footer')
        <!-- ========== CONTACT NOTIFICATION ========== -->
        <div id="contact-notification" class="notification fixed"></div>
        <!-- ========== BACK TO TOP ========== -->
        @include('templates.components.back-to-top')
    </div>
@endsection
