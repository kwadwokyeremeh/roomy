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
                    @if(session()->has('success.roomDesc'))
                        <span class="text text-success">
                            <strong>Room Description updated successfully</strong>
                        </span>
                    @endif
                        @if(session()->has('delete.roomDesc.success'))
                            <span class="text text-success">
                            <strong>Room Description deleted successfully</strong>
                        </span>
                        @endif
                    @if($errors->any())
                        @foreach($errors->all() as $e)
                        <span class="text text-danger">
                            <strong>{{$e}}</strong>
                        </span>
                        @endforeach
                    @endif
                    <form class="table-responsive" action="{{url('hosteller/'.$hostel->slug.'/updateRoomDesc')}}" method="post">
                        @csrf
                        <table class="table table-hover">

                            <tr>
                                <th>Room Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>Number of beds</th>
                                <th><input type="button" class="btn btn-info btn-flat btn-xs edit" value="Edit">
                                    <input type="submit" class="btn btn-success btn-flat disabled" disabled value="Save Changes">
                                </th>

                            </tr>
                            @foreach($hostel->roomDescription as $roomDesc)

                                <tr>
                                    <td><input type="hidden" name="roomDesc[token][]"  value="{{$roomDesc->room_token}}">
                                        <input type="text" class="form-control input-sm "  name="roomDesc[roomType][]" disabled title="roomType" value="{{$roomDesc->room_type}}"></td>
                                    <td><input type="number" class="form-control input-sm " name="roomDesc[price][]" disabled title="price" value="{{$roomDesc->price}}"></td>
                                    <td><input type="number" class="form-control input-sm " name="roomDesc[beds][]" disabled title="number of beds" value="{{$roomDesc->number_of_beds}}"></td>
                                    <td><button type="button" class="btn btn-danger delete btn-flat btn-xs"  id="rm{{$roomDesc->room_token}}" disabled data-toggle="modal" data-target="#modal-danger"> Delete </button></td>
                                </tr>

                            @endforeach
                        </table>
                    </form>
                    <form class="table-responsive" action="{{url('hosteller/'.$hostel->slug.'/createRoomDesc')}}" method="post">
                        @csrf
                        <table class="table table-hover" id="dynamic_field">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><input type="button" class="btn btn-flat bg-maroon-gradient" id="add" value="Add More"></th>
                            </tr>
                        </table>
                    </form>

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
                @if(session()->has('room.update.success'))
                    <span class="text text-success">
                            <strong>Room updated successfully</strong>
                        </span>
                @endif
                <h4>{{$floor->name}}</h4>
                {{--Rooms--}}
                @foreach($floor->rooms as $room)
                    <div class="updateRoom">
                        <form action="{{url('hosteller/'.$hostel->slug.'/updateRoom')}}" method="post"  class="col-xs-4 col-sm-2" style="padding:2px;" >
                            @csrf

                            <input type="hidden" name="room" value="{{$room->id}}">
                            <input type="text" class="form-control" title="" name="roomName" value="{{$room->name??$room->number}}">
                            <select name="roomType" id="" title="" class="form-control">
                                <option value="{{$room->roomDescription->id}}">{{$room->roomDescription->room_type}}</option>
                                @foreach($hostel->roomDescription as $roomDesc)

                                    <option value="{{$roomDesc->id}}">{{$roomDesc->room_type}}</option>
                                @endforeach
                            </select>
                            <select name="sexType" id="" title="" class="form-control">
                                <option value="{{$room->sex_type}}">{{$room->sex_type}}</option>
                                <option value="">No Gender</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                            <div class="help-block center-block">
                                <input type="button" class="btn btn-flat bg-purple update" data-toggle="modal" id="{{$room->id}}" data-target="#modal-default" value="Update">
                            </div>
                        </form>
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
    <div class="modal modal-danger fade in" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('hosteller/'.$hostel->slug.'/deleteRoomDesc')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Are you sure?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Deleting this would delete all the rooms associated with this room type description. This action is irreversible.</p>
                        <p><strong>Best Practice</strong></p>
                        <p> The best practice is to associate all the rooms associated with this room type description with <b>another one</b> before proceeding</p>
                        <div class="help-block center-block">
                            <em>Please enter your password to continue</em>
                            <input type="hidden" name="token" id="tokenRM" value="">
                            <input type="password" class="form-control" name="password" title="password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-outline">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal modal-info fade in" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('hosteller/'.$hostel->slug.'/updateRoom')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Are you sure?</h4>
                    </div>
                    <div class="modal-body">
                        <p>All the occupants associated with this room would be unassociated</p>
                        <input type="hidden" name="room" id="room">
                        <input type="hidden" name="roomType" id="roomType">
                        <input type="hidden" name="sexType" id="sexType">
                        <input type="hidden" name="roomName" id="roomName">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-outline">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


@endsection

@section('custom-script')
    <script>


        {{--//Dynamically Add or Remove input fields in PHP with JQuery--}}
        $(document).ready(function(){
            var i=1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'">' +
                    '                            <td><input type="text" class="form-control input-sm" name="roomType[]" required title="roomType"  placeholder="Room Type"></td>' +
                    '                            <td><input type="number" class="form-control input-sm" name="price[]" required title="price" placeholder="Price" ></td>' +
                    '                            <td><input type="number" class="form-control input-sm" name="beds[]" required title="number of beds" placeholder="Number of beds" ></td>' +
                    '                            <td><input type="submit" class="btn btn-danger btn-flat btn-xs btn_remove" id="'+i+'" value="Delete">' +
                    '                            <input type="submit" class="btn btn-success btn-flat btn-xs" value="Save"></td>' +
                    '                        </tr>');
            });


            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

            $(document).on('click', '.update', function () {
               var room =$(this).closest("div.updateRoom").find("input[name='room']").val();
               var roomType =$(this).closest("div.updateRoom").find("select[name='roomType']").val();
               var roomName =$(this).closest("div.updateRoom").find("input[name='roomName']").val();
               var sexType =$(this).closest("div.updateRoom").find("select[name='sexType']").val();
               $('#room').val(room);
               $('#roomType').val(roomType);
               $('#roomName').val(roomName);
               $('#sexType').val(sexType);
            });

            $(document).on('click','.edit',function () {
                $("input").prop('disabled', false);
                $("input[type=submit]").removeClass('disabled').prop('disabled', false);
                $("button[type=button]").prop('disabled',false);
                /*$("a[href]").attr('disabled', false);*/

            });

            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            });

            @foreach($hostel->roomDescription as $rm)
            $(document).on('click','#rm{{$rm->room_token}}',function () {
                $('#tokenRM').val('{{$rm->room_token}}');

            });
            @endforeach
        });
    </script>
@endsection
