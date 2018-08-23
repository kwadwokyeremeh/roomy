
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
                        <p>Set the date-time period for which you want students to reserve a bed in your hostel</p>
                        <p>The default date range is between mid February to mid September</p>
                        <label>Date range:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="reservation">
                        </div>
                        <!-- /.input group -->
                    </div>
            <!-- /.form group -->
                    <p>Set the duration for which a reserved bed can last or expire. The default is 3 days</p>
                    <input type="number" min="1" placeholder="3 days">
                </div>
        </div>
@endsection
@section('custom-script')
<script src="{{asset('/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
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
    )

    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    })
</script>
@endsection
