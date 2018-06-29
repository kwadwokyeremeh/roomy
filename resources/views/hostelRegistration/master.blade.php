<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('hostelRegistration._partials.head')

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
    {{--<!--BENGIN CONTENT HEADER-->--}}
    @include($step::$view, compact('step', 'errors'))
    {{--<!--END CONTENT ABOUT-->--}}

    @include('layouts._partials.footer')
</div>

@include('hostelRegistration._partials.script')
{{----}}
<script>

    @yield('custom-script')
    {{--Hostel Details--}}
   {{-- @include('hostelRegistration._partials.hostelDetails')

    /*Add Media*/

    @include('hostelRegistration._partials.addMedia')
    /*Add Amenities*/
    @include('hostelRegistration._partials.amenities')
    /*Add Amenities*/--}}
</script>
</body>
</html>
