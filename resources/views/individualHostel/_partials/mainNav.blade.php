<header class="site-header header-default header-sticky">
    <nav class="main-navigation">
        <div class="vk-main-menu animated uni-sticky">
            <div class="container">
                <div class="uni-transparent-1-menu">
                    <!--./vk-navbar-header-->

                    <div class="row">
                        <div class="collapse navbar-collapse vk-navbar-collapse" id="menu">
                            <nav class="main-navigation">
                                <div class="inner-navigation">
                                    <ul class="vk-navbar-nav vk-navbar-left nav-bar">

                                        <li><a href="{{url($hostel->id)}}">{{$hostel->name}}</a>

                                        </li>

                                    </ul>
                                    <ul class="vk-navbar-nav vk-navbar-right">

                                        <li><a href="{{url($hostel->id)}}#overview">Overview</a>

                                        </li>
                                        <li><a href="{{url($hostel->id)}}#room">Room Type</a>

                                        </li>
                                        <li><a href="{{url($hostel->id)}}#amenities">Amenities</a>
                                        </li>
                                        <li><a href="{{url($hostel->id)}}#location">Location</a>
                                        </li>
                                        <li><a href="{{url($hostel->id)}}/comments">Reviews and Comments</a>
                                        </li>

                                        <li class="vk-icon-search"><i class="fa fa-search" aria-hidden="true"></i></li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!--./vk-navbar-collapse-->

                    <!--search-->
                    <div class="col-md-12">
                        <div class="box-search-header collapse in" id="box-search-header">
                            <div class="vk-input-group">
                                <div class="input-group stylish-input-group">
                                    @include('layouts._partials.search')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="vk-header-top hidden-xs hidden-sm">
        <div class="container">
            <div class="content">
                <ul class="quick-address">
                    @if(Auth::guard('hosteller')->check())

                        <li class="has-sub vk-iconbox-item-icon"><a href="{{route('dashboard.hostel')}}">{{ Auth::guard('hosteller')->user()->firstName}}</a>
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

                            <li class="has-sub vk-iconbox-item-icon"><a href="{{route('student')}}">{{ Auth::user()->firstName}}</a>
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
                <div class="quick-address vk-navbar-left">


                    <nav class="main-navigation">
                        <div class="inner-navigation">
                            <ul class="nav-bar">
                                <li><a href="{{route('home')}}">Home</a>

                                </li>
                                <li><a href="{{route('allHostels')}}">Hostels</a>
                                </li>
                                <li><a href="{{route('home')}}">Blog</a>
                                </li>
                               {{-- <!--                                <li><a href="#">Halls</a>-->
                                <!--                                </li>-->--}}
                                @if(Auth::guard('hosteller')->check())
                                    {{--Display nothing--}}
                                    @else
                                <li><a href="{{route('hosteller.register')}}">Add your hostel</a>
                                </li>
                                @endif
                                <li><a href="#">Help</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
