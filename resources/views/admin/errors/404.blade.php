@extends('layouts.master')
@section('style')
    <!--- Internal Fontawesome css-->
    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <!---Ionicons css-->
    <link href="{{URL::asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <!---Internal Typicons css-->
    <link href="{{URL::asset('assets/plugins/typicons.font/typicons.css')}}" rel="stylesheet">
    <!---Internal Feather css-->
    <link href="{{URL::asset('assets/plugins/feather/feather.css')}}" rel="stylesheet">
    <!---Internal Falg-icons css-->
    <link href="{{URL::asset('assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- Main-error-wrapper -->
    <div class="main-error-wrapper  page page-h col-12">
        <img src="{{URL::asset('assets/images/404.png')}}" class="error-page" alt="error">
        <h2>{{trans('dashboard.error_page')}}</h2>
        <h6>{{trans('dashboard.error_address')}}</h6>

        <a class="btn btn-outline-danger" href="{{ route('admin.home') }}"> {{trans('dashboard.go_home')}} </a>
    </div><br>
    <!-- /Main-error-wrapper -->
@endsection
@section('js')
@endsection
