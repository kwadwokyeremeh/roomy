@extends('dashboard.hostelmanager.layout.master')
@section('custom-css')
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection
@section('page-header')
    Reserved Room List
@endsection

@section('optional-desc')
    Details of Prospective Occupants
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Prospective Occupants</h3>

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
                            <th>Prospective</th>
                            <th>Occupant details</th>
                            <th>Room Details</th>
                            <th>Amount to pay</th>
                            <th></th>
                        </tr>
                        @foreach($hostel->reservations as $reservation)
                        <tr style="border-bottom: dashed; border-color: #3affff;">
                            <td>
                                <img class="profile-user-img img-responsive img-circle" src="../dist/img/user4-128x128.jpg" alt="User profile picture">
                            </td>
                            <td>
                                <p><span class="label label-info">Name</span> {{$reservation->user->fullName}}</p>
                                {{--<p><span class="label label-info">Reference Number</span> 20304043</p>
                                <p><span class="label label-info">Department/College</span> College of Engineering</p>--}}
                                <p><span class="label label-info">Phone Number</span> {{$reservation->user->phone}}</p>
                                <p><span class="label label-info">Sex</span> {{$reservation->user->sex}}</p>
                            </td>
                            <td>
                                <p><span class="label label-info">Room Number</span> {{$reservation->room->name ?? $reservation->room->number}}</p>
                                <p><span class="label label-info">Room Type</span>{{$reservation->room->roomDescription->room_type}}</p>
                                <p><span class="label label-info">Room Gender</span>{{$reservation->room->sex_type}}</p>
                            </td>
                            <td>
                                <p><span class="label label-info"><span>&cent; :</span>Amount to pay</span> &cent; {{$reservation->amount_to_be_paid}}</p>
                            </td>
                            <td>
                                <!-- Expiry Date -->
                                <div class="form-group">
                                    <label for="datepicker">Expiry Date:</label>

                                    <div class="input-group date">
                                        <input type="text" class="form-control pull-right" id="datepicker" value="{{$reservation->end_date}}">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <p>&nbsp;</p>
                                <button type="button" class="btn btn-block btn-dropbox btn-flat">Unreserve Room</button>
                            </td>
                        </tr>
                        @endforeach



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
    <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        //Date picker
        $('.date').datepicker({
            autoclose: true
        })
    </script>
@endsection
