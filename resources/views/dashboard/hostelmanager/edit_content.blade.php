@extends('dashboard.hostelmanager.layout.master')

@section('page-header')
    Edit Your SPA
@endsection

@section('optional-desc')
 use Gutenburg
@endsection

@section('main-content')
    <div class="row">

        <div class="col-md-4">
            <!-- Box Comment -->
            <div class="box box-widget">
                <div class="box-header with-border">
                    <span>Front View</span>
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>

                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <img class="img-responsive pad" src="{{asset($hostel->getFirstMediaUrl('frontViews','front-thumb'))}}" alt="Photo">


                    {{--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="pull-right text-muted"><i class="fa fa-download"></i></span>--}}
                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->
                <div class="box-footer">
                    @if(session()->has('success.front'))
                        <span class="text text-success">
                            <strong>File Upload Successfully</strong>
                        </span>
                        <span class="text text-info">
                            Processing image
                        </span>
                    @endif
                    @if($errors->has('front'))
                        <span class="text text-danger">
                            <strong>{{$errors->first('front')}}</strong>
                        </span>
                    @endif
                    <form action="{{url('hosteller/'.$hostel->slug.'/updateContent')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group margin">
                            <input type="file" class="form-control" name="front" accept="image/*" required>
                            <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Change Image</button>
                    </span>
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
            <!-- Box Comment -->
            <div class="box box-widget">
                <div class="box-header with-border">
                    <span>Right View</span>
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>

                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <img class="img-responsive pad" src="{{asset($hostel->getFirstMediaUrl('rightViews','right-thumb'))}}" alt="Photo">


                    {{--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="pull-right text-muted"><i class="fa fa-download"></i></span>--}}
                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->
                <div class="box-footer">
                    @if(session()->has('success.right'))
                        <span class="text text-success">
                            <strong>File Upload Successfully</strong>
                        </span>
                        <span class="text text-info">
                            Processing image
                        </span>
                    @endif
                    @if($errors->has('right'))
                        <span class="text text-danger">
                            <strong>{{$errors->first('right')}}</strong>
                        </span>
                    @endif
                    <form action="{{url('hosteller/'.$hostel->slug.'/updateContent')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group margin">
                            <input type="file" class="form-control" name="right" accept="image/*" required>
                            <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Change Image</button>
                    </span>
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
            <!-- Box Comment -->
            <div class="box box-widget">
                <div class="box-header with-border">
                    <span>Left View</span>
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>

                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <img class="img-responsive pad" src="{{asset($hostel->getFirstMediaUrl('leftViews','left-thumb'))}}" alt="Photo">


                    {{--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="pull-right text-muted"><i class="fa fa-download"></i></span>--}}
                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->
                <div class="box-footer">
                    @if(session()->has('success.left'))
                        <span class="text text-success">
                            <strong>File Upload Successfully</strong>
                        </span>
                        <span class="text text-info">
                            Processing image
                        </span>
                    @endif
                    @if($errors->has('left'))
                        <span class="text text-danger">
                            <strong>{{$errors->first('left')}}</strong>
                        </span>
                    @endif
                    <form action="{{url('hosteller/'.$hostel->slug.'/updateContent')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group margin">
                            <input type="file" class="form-control" name="left" accept="image/*" required>
                            <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Change Image</button>
                    </span>
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

    </div>
    @foreach($hostel->roomDescription as $roomDesc)
    <div class="row">
        <div class="col-md-12">
            <!-- Box Comment -->
            <div class="box box-widget">
                <div class="box-header with-border">
                    <span>{{$roomDesc->room_type}}</span>
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>

                    </div>

                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->

                <div class="box-body"   id="rm{{$roomDesc->room_token}}">
                    @if($roomDesc->getMedia('roomType')->count()==0)
                        <h3 class="text text-danger">Please upload at least one image</h3>
                    @endif

                    @foreach($roomDesc->getMedia('roomType') as $media)
                    <div class="col-md-3">
                        <img class="img-responsive" src="{{asset($media->getUrl('room_type'))}}" alt="Photo">
                        <form action="{{url('hosteller/'.$hostel->slug.'/deleteRoomDescMedia')}}" method="post">
                            @csrf
                            <input type="hidden" name="roomTypeDel" value="{{$media->id}}">
                            <input type="hidden" name="roomType" value="{{$roomDesc->room_token}}">
                            <button type="submit" class="pull-right btn btn-flat btn-sm"><i class="fa fa-2x fa-trash-o"></i></button>
                        </form>

                        {{--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>--}}
                    </div>
                    @endforeach
                </div>

                <!-- /.box-body -->
                <br>
                <!-- /.box-footer -->
                <div class="box-footer">
                    @if(session()->has('delete.success'))
                        <span class="text text-success">
                            <strong>File Deleted Successfully</strong>
                        </span>
                    @endif
                    @if(session()->has('success.roomType'))
                        <span class="text text-success">
                            <strong>File Uploaded Successfully</strong>
                        </span>
                        <span>Processing image</span>
                    @endif
                    @if($errors->has('roomType'))
                        <span class="text text-danger">
                            <strong>{{$errors->first('roomType')}}</strong>
                        </span>

                    @endif
                    <form action="{{url('hosteller/'.$hostel->slug.'/updateRoomDescMedia')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group margin">
                            <input type="file" class="form-control" name="roomType" required accept="image/*">
                            <input type="hidden" name="roomDesc" value="{{$roomDesc->room_token}}">
                            <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Upload Image</button>
                    </span>
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <!-- Box Comment -->
            <div class="box box-widget">
                <div class="box-header with-border">
                    <span>Miscellaneous Images</span>
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>

                    </div>

                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    @php
                        $urls =$hostel->getMedia('misc')->map(function (\Spatie\MediaLibrary\Models\Media $media){
                        return $media->getUrl('misc-thumb');
                        });
                    @endphp
                    @foreach($hostel->getMedia('misc') as $misc)
                        <div class="col-md-3">

                            <img class="img-responsive" src="{{asset($misc->getUrl('misc-thumb'))}}" alt="Photo">

                            <form action="{{url('hosteller/'.$hostel->slug.'/deleteMisc')}}" method="post">
                                @csrf
                                <input type="hidden" name="miscDel" value="{{$misc->id}}">
                                <button type="submit" class="pull-right btn btn-flat btn-sm"><i class="fa fa-2x fa-trash-o"></i></button>
                            </form>
                            {{--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>--}}

                        </div>
                    @endforeach
                </div>

                <!-- /.box-body -->
                <br>
                <!-- /.box-footer -->
                <div class="box-footer">
                    @if(session()->has('delete.misc.success'))
                        <span class="text text-success">
                            <strong>File Deleted Successfully</strong>
                        </span>
                    @endif
                    @if(session()->has('success.misc'))
                        <span class="text text-success">
                            <strong>File Uploaded Successfully</strong>
                        </span>
                        <span>Processing image</span>
                    @endif
                    @if($errors->has('misc'))
                        <span class="text text-danger">
                            <strong>{{$errors->first('misc')}}</strong>
                        </span>

                    @endif
                    <form action="{{url('hosteller/'.$hostel->slug.'/updateMisc')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group margin">
                            <input type="file" class="form-control" name="misc" required accept="image/*">
                            <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Upload Image</button>
                    </span>
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('custom-script')

@endsection
