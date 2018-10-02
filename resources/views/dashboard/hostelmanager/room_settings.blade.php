@extends('dashboard.hostelmanager.layout.master')

@section('page-header')
    Room(s) Settings
@endsection

@section('optional-desc')

@endsection

@section('main-content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Room Information</h3>

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
                            <th>Room Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>Number of beds</th>
                            <th><input type="submit" class="btn btn-flat bg-maroon-gradient" value="Add More"></th>

                        </tr>
                        @foreach($hostel->roomDescription as $roomDesc)
                        <tr>
                            <td><input type="text" class="form-control input-sm disabled" title="roomType" value="{{$roomDesc->room_type}}"></td>
                            <td><input type="number" class="form-control input-sm disabled" title="price" value="{{$roomDesc->price}}"></td>
                            <td><input type="number" class="form-control input-sm disabled" title="number of beds" value="{{$roomDesc->number_of_beds}}"></td>
                            <td><input type="submit" class="btn btn-info btn-flat btn-xs" value="Edit">
                            <input type="submit" class="btn btn-success btn-flat btn-xs" value="Save Changes"></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    {{--Edit Rooms--}}
    @foreach($hostel->blocks as $block)
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$block->name}}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    {{--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>--}}
                </div>
            </div>
            {{--Floors--}}
            @foreach($block->floors as $floor)
            <div class="box-body">
                <h4>{{$floor->name}}</h4>
                {{--Rooms--}}
                @foreach($floor->rooms as $room)
                    <div class="col-sm-2" style="border: 1px solid ;: ;border-color: peachpuff;" >
                        <input type="text" class="form-control" title="" value="{{$room->name??$room->number}}">
                        <select name="roomType" id="" title="" class="form-control">
                            <option value="">{{$room->roomDescription->room_type}}</option>
                            @foreach($hostel->roomDescription as $roomDesc)

                            <option value="{{$roomDesc->id}}">{{$roomDesc->room_type}}</option>
                            @endforeach
                        </select>
                        <select name="sexType" id="" title="" class="form-control">
                            <option value="">{{$room->sex_type}}</option>
                            <option value="">No Gender</option>
                            <option value="F">Female</option>
                            <option value="M">Male</option>
                        </select>
                        <div class="help-block center-block">
                            <input type="submit" class="btn btn-flat bg-purple" value="Update">
                        </div>
                    </div>
                @endforeach
                {{--.rooms--}}
            </div>
            @endforeach
            {{--.floors--}}
            <!-- /.box-body -->
            <div class="box-footer">
                {{$block->name}}
            </div>
            <!-- /.box-footer-->
        </div>
    @endforeach
    {{--.Edit Rooms--}}

@endsection

@section('custom-script')

@endsection
