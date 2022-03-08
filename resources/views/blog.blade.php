@extends('layouts.index')
@section('title')
    Hotel Himara - Blog
@endsection
@section('main')
    <!-- ========== PAGE TITLE ========== -->
    @include('templates.components.page-title')
    <!-- ========== MAIN ========== -->
    @include('templates.components.blog.main')
@endsection