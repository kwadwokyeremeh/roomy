<!doctype html>
@include('individualHostel._partials.head')
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

<div class="vk-sparta-transparents-1">
    <!-- Mobile nav -->
@include('individualHostel._partials.mobileNav')
<!-- End mobile menu -->

    <div id="wrapper-container" class="site-wrapper-container">
        <!-- Main navigation -->
   @include('individualHostel._partials.mainNav')
    <!-- end of Main navigation -->

        @yield('main-content')


        @include('layouts._partials.footer')
    </div>
    @include('individualHostel._partials.script')
</div>
</body>
</html>
