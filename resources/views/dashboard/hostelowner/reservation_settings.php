<!DOCTYPE html>
<html>
<?php include ('_partials/hmdashboard_head.php');?>
<!-- daterange picker -->
<link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">

<body class="hold-transition skin-yellow-light sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
   <?php include ('_partials/hmdashboard_header.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include "_partials/hmdashboard_sidebar.php";?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php include "_partials/hm_mainNav.php";?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Reservation Settings
                <small>Set your room reservation date range</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

           <p>Set the duration for which a bed can be reserved</p>
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Date picker</h3>
                </div>
                <div class="box-body">

            <!-- Date and time range -->
            <div class="form-group">
                <label>Date range:</label>

                <div class="input-group pull-right">
                    <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Date range picker
                    </span>
                        <i class="fa fa-caret-down"></i>
                    </button>
                </div>
            </div>
            <!-- /.form group -->
                    <p>Date format should be like 7 days from reservation date</p>
                    <p>Date format should be like a month from reservation date</p>
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include "_partials/hmdashboard_footer.php";?>

    <!-- Control Sidebar -->
    <?php include "_partials/hmdashboard_rightSidepane.php";?>
    <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<!-- date-range-picker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script>
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
            ranges   : {
                'Today'       : [moment(), moment()],
                '3 Days'   : [moment(), moment().add(3, 'days')],
                '7 Days' : [moment(), moment().add(7, 'days')],
                'Two Weeks'  : [moment(), moment().add(14,'days')],
                'One month': [moment(), moment().add(30, 'days')],
                'Two Month'  : [moment(), moment().add(2,'month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
        },
        function (start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
    )
</script>
</body>
</html>