<!DOCTYPE html>
<html>
@include ('dashboard.hostelmanager._partials.hmdashboard_head')

<body class="hold-transition skin-yellow-light sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
@include ('dashboard.hostelmanager._partials.hmdashboard_header')
<!-- Left side column. contains the logo and sidebar -->
@include ('dashboard.hostelmanager._partials.hmdashboard_sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @include ('dashboard.hostelmanager._partials.hm_mainNav')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('page-header')
                <small>@yield('optional-desc')</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            @yield('main-content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
@include ('dashboard.hostelmanager._partials.hmdashboard_footer')

<!-- Control Sidebar -->
 @include ('dashboard.hostelmanager._partials.hmdashboard_rightSidepane')
<!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('/dist/js/pages/dashboard2.js')}}"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
