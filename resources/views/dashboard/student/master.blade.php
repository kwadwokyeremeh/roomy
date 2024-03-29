<!DOCTYPE html>
<html>
@include('dashboard.student._partials.st_head')

<body class="hold-transition skin-yellow-light sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    @include('dashboard.student._partials.st_header')
<!-- Left side column. contains the logo and sidebar -->
@include('dashboard.student._partials.st_sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @include('dashboard.student._partials.st_mainNav')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard Summary
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
@include('dashboard.student._partials.st_footer')

<!-- Control Sidebar -->
    @include('dashboard.student._partials.st_sidepane')
<!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
