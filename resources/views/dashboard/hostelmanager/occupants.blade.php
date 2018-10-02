@extends('dashboard.hostelmanager.layout.master')

@section('page-header')
    Occupants
@endsection

@section('optional-desc')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Occupants</h3>

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
                        <tr style="border-bottom: dashed; border-color: #3affff;">
                            <td>
                                <img class="profile-user-img img-responsive img-circle" src="../dist/img/user4-128x128.jpg" alt="User profile picture">
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
                                <button type="button" class="btn btn-block btn-warning btn-flat">Change Room</button>
                                <button type="button" class="btn btn-block btn-flickr btn-flat">Vacate Room</button>
                                <button type="button" class="btn btn-block btn-dropbox btn-flat">Print Payment</button>
                            </td>
                        </tr>
                        <tr style="border-bottom: dashed; border-color: #3affff;">
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
                                <button type="button" class="btn btn-block btn-warning btn-flat">Change Room</button>
                                <button type="button" class="btn btn-block btn-flickr btn-flat">Vacate Room</button>
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

@endsection

@section('custom-script')

@endsection
