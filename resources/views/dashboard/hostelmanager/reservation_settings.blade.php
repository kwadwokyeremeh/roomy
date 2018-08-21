
@extends('dashboard.hostelmanager.layout.master')
            @section('page-header')
                Reservation Settings
                @endsection
                @section('optional-desc')
                    Set your room reservation date range
                @endsection

@section('main-content')

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
@endsection
