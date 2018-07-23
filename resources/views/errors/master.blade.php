<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>@yield('title'){{ config('app.name', 'myRoommie') }}</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-theme.min.css')}}">

    <link href="{{url('fonts/raleway/raleway.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('fonts/font-awesome/css/font-awesome.css')}}">
    <link href="{{url('fonts/playfair-display/playfair-display.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{url('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('css/lightgallery.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('css/nice-select.css')}}">
    <link href="{{url('css/lightgallery.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/semantic.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>
<body>
<!--load page-->
<div class="load-page">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

@include('layouts._partials.mobileNav')

<div id="wrapper-container" class="clearfix site-wrapper-container">

    @include('layouts._partials.mainNav')

    @yield('main-content')


    @include('layouts._partials.footer')
</div>








<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/semantic.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
