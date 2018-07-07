<div class="vk-top-header" style="background-color: #9c6f04">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="vk-top-header-left">

                    <span>Call Manager (+233) 123 456789</span>
                </div>
            </div>
            <div class="col-md-4 vk-top-header-right">
                <div class="vk-top-header-right">
                    <ul>
                        <li><a href="{{route('home')}}"> myRoommie </a></li>
                        <li> </li>
                        <li><a href="tel:{{$hostel->hostel_phone}}7"> Call Manager </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="visible-sm visible-xs mobile-menu-container mobile-nav vk-menu-mobile-nav">
    <div class="menu-mobile-nav navbar-toggle">
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
        <span class="icon-search"><i class="fa fa-search" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu" class="animated">
        <div class="uni-icon-close">
            <span class="ti-close"></span>
        </div>
        <ul class="nav navbar-nav">

            <li><a href="#">Pages</a>
                <ul class="sub-menu1 animated fadeIn">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('allHostels')}}">Hostels</a></li>
                    {{--<li><a href="{{route('home')}}">Homestels</a></li>
                    <li><a href="">Halls</a></li>--}}
                    <li><a href="">Blog</a></li>
                    <li><a href="">Help</a></li>
                </ul>
            </li>
            <li class="sub"><a href="{{url($hostel->id)}}#overview">Overview</a>

            </li>

            <li class="sub"><a href="{{url($hostel->id)}}#room">Room Type</a>
            </li>

            <li class="sub"><a href="{{url($hostel->id)}}#amenities">Amenities</a>
            </li>
            <li class="sub"><a href="{{url($hostel->id)}}#location">Location</a>

            </li>
            <li class="sub"><a href="{{url($hostel->id)}}/comments">Reviews and Comments</a>

            </li>
            @if(Auth::guard('hosteller')->check())

                <li class="sub"><a href="{{route('dashboard.hostel')}}"><i class="fa fa-user" aria-hidden="true"></i>{{ Auth::guard('hosteller')->user()->firstName}}</a>
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

                    <li><a href="{{url('/register')}}">Register</a></li>
                    <li><a href="{{url('/login')}}">Sign in</a></li>
                    <li><a href="{{url('/hosteller/login')}}">Sign in as manager</a></li>

                @else

                    <li class="sub"><a href="{{route('student')}}"><i class="fa fa-user" aria-hidden="true"></i>{{ Auth::user()->firstName}}</a>
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

        </ul>


        <div class="uni-nav-mobile-bottom">
            <div class="form-search-wrapper-mobile">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="I am here to help">
                    <span class="input-group-addon success"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</nav>
