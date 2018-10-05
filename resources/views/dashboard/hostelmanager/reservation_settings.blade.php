
@extends('dashboard.hostelmanager.layout.master')
@section('custom-css')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

@endsection
            @section('page-header')
                Reservation Settings
                @endsection
                @section('optional-desc')
                    Set your room reservation date range
                @endsection

@section('main-content')

        <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Date picker</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <p>Set the date-time period for which you want students to reserve a bed in your hostel in an academic year</p>
                        <p>The default date range is between mid February to mid September</p>
                        <label>Date range:</label>
                        <br>
                        @if($errors->any())
                            @foreach($errors as $error)
                                {{$error}}
                            @endforeach
                        @endif
                        @if(session()->has('date.success'))
                            <span class="text text-success">
                            <strong>Reservation date updated Successfully</strong>
                        </span><br>
                        @endif
                        @if(isset($hostel->reservationDate->reservation_start_date))
                        <span class="text text-info">
                            <label for="" class="label label-info">Start Date:</label> {{\Carbon\Carbon::parse($hostel->reservationDate->reservation_start_date)->toDayDateTimeString()??''}}
                        </span><br>
                        <span class="text text-info">
                            <label for="" class="label label-info">End Date:</label> {{\Carbon\Carbon::parse($hostel->reservationDate->reservation_end_date)->toDayDateTimeString()??''}}
                        </span>
                        @endif
                        <form action="{{url('hosteller/'.$hostel->slug.'/updateDate')}}" method="post">
                            @csrf
                            <div class="input-group margin">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="reservation" name="date" required>
                                <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Update</button>
                    </span>
                            </div>
                        </form>
                        <!-- /.input group -->
                    </div>
            <!-- /.form group -->
                    <p>Set the duration for which a reserved bed can last or expire. The default is 3 days</p>

                    @if(session()->has('duration.success'))
                        <span class="text text-success">
                            <strong>Duration updated Successfully</strong>
                        </span>
                    @endif
                    <form action="{{url('hosteller/'.$hostel->slug.'/updateDuration')}}" method="post">
                        @csrf
                        <div class="input-group margin">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="number" min="1" class="form-control" placeholder="3 days" name="duration" value="{{$hostel->reservationDate->reservation_duration ?? ''}}" required>
                            <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Update</button>
                    </span>
                        </div>
                    </form>

                </div>
        </div>
@endsection
@section('custom-script')
<script src="{{asset('/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script>
    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
            ranges   : {
                'Today'       : [moment(), moment()],
                'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
        },
        function (start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    );

    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    })
</script>
@endsection
