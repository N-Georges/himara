@extends('layouts.index')
@section('title')
    Hotel Himara - Room-list
@endsection
@section('main')
    <!-- ========== PAGE TITLE ========== -->
    @include('templates.components.page-title')
    <!-- ========== MAIN ========== -->
    @include('templates.components.room.main-list')
@endsection
