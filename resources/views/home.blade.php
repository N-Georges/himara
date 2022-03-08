@extends('layouts.index')
@section('title')
    Hotel Himara - Home
@endsection
@section('main')
    <!-- ========== PRELOADER ========== -->
    @include('templates.components.preloader')
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
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
@endsection
