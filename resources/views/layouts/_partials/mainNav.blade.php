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
                                @if(Auth::guard('hosteller')->check())

                                    <li class="has-sub vk-iconbox-item-icon"><a href="{{route('dashboard.hostel')}}">{{ Auth::guard('hosteller')->user()->firstName}}</a><i class="fa fa-user" aria-hidden="true"></i>
                                        <ul class="sub-menu1 animated fadeIn">
                                            <li>
                                                <form id="logout-form" action="{{ route('dashboard.hostel') }}" method="POST">
                                                    @csrf
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    @else
                                        @guest
                                            <li class="has-sub vk-iconbox-item-icon"><i class="fa fa-user" aria-hidden="true"></i>
                                                <ul class="sub-menu1 animated fadeIn">
                                                    <li><a href="{{url('/register')}}">Register</a></li>
                                                    <li><a href="{{url('/login')}}">Sign in</a></li>
                                                    <li><a href="{{url('/hosteller/login')}}">Sign in as manager</a></li>
                                                </ul>
                                            </li>
                                        @else

                                            <li class="has-sub vk-iconbox-item-icon"><a href="{{route('student')}}">{{ Auth::user()->firstName}}</a><i class="fa fa-user" aria-hidden="true"></i>
                                                <ul class="sub-menu1 animated fadeIn">
                                                    <li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                            <a href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                    @endguest

                                @endif




                                <li class="vk-icon-search"><i class="fa fa-search" aria-hidden="true"></i></li>

                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-md-12">
                    <div class="box-search-header collapse in" id="box-search-header">
                        <div class="vk-input-group">
                            <div class="input-group stylish-input-group">
                                {{--<input type="text" class="form-control"  placeholder="I am here to help" >
                                <span class="input-group-addon">
                                        <button type="submit">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </span>--}}

                                <div class="vk-booking-center-logo hidden-xs">
                                    <div class="container">
                                        <form action="searchResults.blade.php" class="form-horizontal  booking-hotel-all">
                                            @csrf
                                            <ul>
                                                <li>
                                                    <h4>Hostel</h4>
                                                    <div class="input-group">
                                                        <input name="hostelName" class="form-control" type="text">
                                                        <span class="input-group-addon btn"><span class="fa fa-building"></span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h4>Location</h4>
                                                    <div class="input-group">
                                                        <input name="location" class="form-control" type="text">
                                                        <span class="input-group-addon btn"><span class="fa fa-map-pin"></span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h4>Price Filter</h4>
                                                    <div class="wrap-select">
                                                        <div class="slider">
                                                            <div id="slider-range" class="ui-slider-range">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h4>Amount</h4>
                                                    <div class="wrap-select" style="margin-bottom: auto">
                                                        <div id="dda">
                                                    <span style="margin-right: 0; padding-right: 0">
                                                        <label class="label-filter-price-1" style="">
                                                            <input type="text" id="amount" style="">
                                                        </label>
                                                   </span>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="vk-btn-check">
                                                        <button type="submit" class="btn vk-btn-primary btn-block btn-check">Advanced Search</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>


