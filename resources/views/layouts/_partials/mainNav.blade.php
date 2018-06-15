<header class="site-header header-default header-sticky">

    <div class="vk-main-menu animated uni-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-9">
                    <div class="wrapper-logo">
                        <a href="{{url('/')}}" class="logo-default"><img src="../../images/64X64.gif" alt="" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-10">
                    <nav class="main-navigation">
                        <div class="inner-navigation">
                            <ul class="nav-bar">
                                <li><a href="{{ url('/') }}">Home</a>

                                </li>
                                <li><a href="{{ url('/knust/hostels') }}">Hostels</a>
                                </li>
                                <li><a href="{{url('knust/blog')}}">Blog</a>
                                </li>
                                <!--<li><a href="" target="_blank">Halls</a>
                                </li>-->
                                <li><a href="#">Help</a>
                                </li>
                                <li><a href="{{url('hosteller/register')}}">Add your hostel</a>
                                </li>
                                @guest
                                <li class="has-sub vk-iconbox-item-icon"><i class="fa fa-user" aria-hidden="true"></i>
                                    <ul class="sub-menu1 animated fadeIn">
                                        <li><a href="{{url('/register')}}">Register</a></li>
                                        <li><a href="{{url('/login')}}">Sign in</a></li>
                                        <li><a href="{{url('/hosteller/login')}}">Sign in as manager</a></li>
                                    </ul>
                                </li>
                                    @else
                                    <li class="has-sub vk-iconbox-item-icon"><i class="fa fa-user" aria-hidden="true"></i>
                                        <ul class="sub-menu1 animated fadeIn">
                                            <li><a href="{{url('/student')}}">{{ Auth::user()->firstName}}</a></li>
                                            <li><a href="{{url('/dashboard.hostel')}}">{{Auth::guard()->firstName}}</a></li>
                                        </ul>
                                    </li>
                                @endguest

                                <li class="vk-icon-search"><i class="fa fa-search" aria-hidden="true"></i></li>

                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-md-12">
                    <div class="box-search-header collapse in" id="box-search-header">
                        <div class="vk-input-group">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control"  placeholder="I am here to help" >
                                <span class="input-group-addon">
                                        <button type="submit">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
