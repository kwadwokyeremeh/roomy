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
                    <form action="#" method="post">
                        @csrf
                        <div class="input-group margin">
                            <input type="file" class="form-control">
                            <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Change Image</button>
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
                    <form action="#" method="post">
                        @csrf
                        <div class="input-group margin">
                            <input type="file" class="form-control">
                            <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Change Image</button>
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
                    <form action="#" method="post">
                        @csrf
                        <div class="input-group margin">
                            <input type="file" class="form-control">
                            <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Change Image</button>
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

                <div class="box-body">
                    <img class="img-responsive pad" src="{{asset($roomDesc->getFirstMediaUrl('roomType','room_type'))}}" alt="Photo">


                    {{--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="pull-right text-muted"><i class="fa fa-download"></i></span>--}}
                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->
                <div class="box-footer">
                    <form action="#" method="post">
                        @csrf
                        <div class="input-group margin">
                            <input type="file" class="form-control">
                            <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Change Image</button>
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

@endsection

@section('custom-script')

@endsection
