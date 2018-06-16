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
            <li class="sub"><a href="{{url('/')}}">Home</a>

            </li>

            <li class="sub"><a href="{{ url('/knust/hostels') }}">Hostels</a>

            </li>

            <li class="sub"><a href="../general_hostels.php">Homestels</a>

            </li>
           <!-- <li class="sub"><a href="#" target="_blank">Halls</a>

            </li>-->
            <li class="sub"><a href="#">Help</a>
            <li><a href="{{url('hosteller/register')}}">Add your hostel</a>
            </li>

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
                    <button><span class="input-group-addon success"><i class="fa fa-search"></i></span></button>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</nav>
