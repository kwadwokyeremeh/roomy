<!DOCTYPE html>
<html>
<?php include ('_partials/hmdashboard_head.php');?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
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
                Paid List
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Paid list</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>User</th>
                                    <th>Occupant details</th>
                                    <th>Room Details</th>
                                    <th>Payment Details</th>
                                    <th></th>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Adwoa Kyeremaa</p>
                                        <p><span class="label label-info">Reference Number</span> 20304043</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6972</p>
                                        <p><span class="label label-info">Sex</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 033</p>
                                        <p><span class="label label-info">Room Type</span> Two in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 1800</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../dist/img/user8-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Kwadwo Kyeremeh</p>
                                        <p><span class="label label-info">Reference Number</span> 20304045</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6970</p>
                                        <p><span class="label label-info">Sex</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 034</p>
                                        <p><span class="label label-info">Room Type</span> One in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 2500</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Adwoa Kyeremaa</p>
                                        <p><span class="label label-info">Reference Number</span> 20304043</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6972</p>
                                        <p><span class="label label-info">Sex</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 033</p>
                                        <p><span class="label label-info">Room Type</span> Two in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 1800</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../dist/img/user8-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Kwadwo Kyeremeh</p>
                                        <p><span class="label label-info">Reference Number</span> 20304045</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6970</p>
                                        <p><span class="label label-info">Sex</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 034</p>
                                        <p><span class="label label-info">Room Type</span> One in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 2500</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Adwoa Kyeremaa</p>
                                        <p><span class="label label-info">Reference Number</span> 20304043</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6972</p>
                                        <p><span class="label label-info">Sex</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 033</p>
                                        <p><span class="label label-info">Room Type</span> Two in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 1800</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../dist/img/user8-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Kwadwo Kyeremeh</p>
                                        <p><span class="label label-info">Reference Number</span> 20304045</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6970</p>
                                        <p><span class="label label-info">Sex</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 034</p>
                                        <p><span class="label label-info">Room Type</span> One in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 2500</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Adwoa Kyeremaa</p>
                                        <p><span class="label label-info">Reference Number</span> 20304043</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6972</p>
                                        <p><span class="label label-info">Sex</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 033</p>
                                        <p><span class="label label-info">Room Type</span> Two in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 1800</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../dist/img/user8-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Kwadwo Kyeremeh</p>
                                        <p><span class="label label-info">Reference Number</span> 20304045</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6970</p>
                                        <p><span class="label label-info">Sex</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 034</p>
                                        <p><span class="label label-info">Room Type</span> One in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 2500</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Adwoa Kyeremaa</p>
                                        <p><span class="label label-info">Reference Number</span> 20304043</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6972</p>
                                        <p><span class="label label-info">Sex</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 033</p>
                                        <p><span class="label label-info">Room Type</span> Two in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Female</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 1800</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>
                                <tr style="border-style: dashed; border-color: #3affff;">
                                    <td>
                                        <img class="profile-user-img img-responsive img-circle" src="../dist/img/user8-128x128.jpg" alt="User profile picture">
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Name</span> Kwadwo Kyeremeh</p>
                                        <p><span class="label label-info">Reference Number</span> 20304045</p>
                                        <p><span class="label label-info">Department/College</span> College of Engineering</p>
                                        <p><span class="label label-info">Phone Number</span> 020-459-6970</p>
                                        <p><span class="label label-info">Sex</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info">Room Number</span> 034</p>
                                        <p><span class="label label-info">Room Type</span> One in a room</p>
                                        <p><span class="label label-info">Room Gender</span> Male</p>
                                    </td>
                                    <td>
                                        <p><span class="label label-info"><span>&cent; :</span>Amount Paid</span> &cent; 2500</p>
                                        <p><span class="label label-info">Balance left</span> &cent; 0</p>
                                        <p><span class="label label-info">Bank Name</span> Fidelity Bank</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                                    </td>
                                </tr>


                            </table>
                            <!--Pagination-->
                            <div class="box-footer clearfix">
                                <ul class="pagination pagination-sm no-margin pull-right">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div><!--.Pagination-->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
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
</body>
</html>