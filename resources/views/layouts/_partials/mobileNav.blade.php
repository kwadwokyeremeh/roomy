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
            @guest
            <li class="sub"><a href="{{url('/register')}}">Register</a>

            </li>
            <li class="sub"><a href="{{url('/login')}}">Sign in</a></li>
            <li class="sub"><a href="{{url('/hosteller/login')}}">Sign in as manager</a>

            </li>
                @else
                <li> {{Auth::user()->firstName}}</li>
                <li> {{Auth::guard()->firstName}}</li>
@endguest

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
