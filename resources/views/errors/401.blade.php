@extends('dashboard.hostelmanager.layout.master')

@section('page-header')
    Unauthorized Action
@endsection

@section('optional-desc')

@endsection

@section('main-content')

    <div class="error-page">
        <h2 class="headline text-yellow"> 401</h2>

        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> Oops! Unauthorized action.</h3>

            <p>
                Sorry, you are not authorized to take this action
                Meanwhile, you may <a href="/hosteller/{{$hostel->slug}}">return to dashboard</a> or try using the search form.
            </p>

            <form class="search-form">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- /.input-group -->
            </form>
        </div>
        <!-- /.error-content -->
    </div>
@endsection

@section('custom-script')

@endsection

