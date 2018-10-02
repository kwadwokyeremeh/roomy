
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>myRoommie | Lockscreen</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
        <a href="{{route('home')}}"><b>{{env('APP_NAME')}}</b>LLC</a>
    </div>
    <!-- User name -->
    <div class="lockscreen-name">{{auth('hosteller')->user()->fullName}}</div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
            <img src="../../dist/img/user1-128x128.jpg" alt="User Image">
        </div>
        <!-- /.lockscreen-image -->

        <!-- lockscreen credentials (contains the form) -->
        <form class="lockscreen-credentials disabled">
            <div class="input-group disabled">
                <input type="text" class="form-control disabled" value="{{auth('hosteller')->user()->fullName}}">

            </div>
        </form>
        <!-- /.lockscreen credentials -->

    </div>
    <form action="{{route('hosteller.logout')}}" method="post">
        @csrf
        <div class="help-block text-center">
            <button class="btn btn-secondary" type="submit">Logout</button>
        </div>
    </form>
    @if($hosteller->hostel->count()!==0)
    <div class="help-block text-center">
        Please select the hostel you want to want with today
    </div>
        @else
        <div class="help-block text-center">
            Please, you are seeing this page because your hostel management team is not done with the registration process.
            Please contact your hostel management team for more information
        </div>
    @endif

    <div class="help-block text-center">
    @foreach($hosteller->hostel as $hostel)

            <a href="hosteller/{{$hostel->slug}}"><h2>{{$hostel->name}}</h2></a>

    @endforeach
</div>
    {{--<!-- /.lockscreen-item -->
    <div class="help-block text-center">
        Enter your password to retrieve your session
    </div>
    <div class="text-center">
        <a href="login.html">Or sign in as a different user</a>
    </div>--}}
    <div class="lockscreen-footer text-center">
        Copyright &copy; {{now()->year}} <b><a href="{{route('home')}}" class="text-black">{{env('APP_NAME')}}</a></b><br>
        All rights reserved
    </div>
</div>
<!-- /.center -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
