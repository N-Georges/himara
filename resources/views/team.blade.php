@extends('layouts.index')
@section('content')
    <!-- ========== MOBILE MENU ========== -->
    @include('templates.components.mobile-menu')
    <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        @include('templates.components.top-menu')
        <!-- ========== HEADER ========== -->
        @include('templates.components.header')
        <!-- ========== PAGE TITLE ========== -->
        @include('templates.components.page-title')
        <!-- ========== MAIN ========== -->
        @include('templates.components.team.main')
        <!-- ========== FOOTER ========== -->
        @include('templates.components.footer')
        <!-- ========== BACK TO TOP ========== -->
        @include('templates.components.back-to-top')
    </div>
@endsection