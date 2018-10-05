<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar hostel panel (optional) hostel image and name-->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset($hostel->getFirstMediaUrl('frontViews','front-tiny'))}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <h4>{{$hostel->name}}</h4>
            </div>
        </div>


        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">DASHBOARD</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{'/hosteller/'.$hostel->slug.'/'}}"><i class="fa fa-link"></i> <span>Summary</span></a></li>
            @cannot('isPortal')
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Hostel Page</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/editContent'}}">Edit Content</a></li>
                    {{--<li><a href="{{'/hosteller/'.$hostel->slug.'/color'}}">Color Picker</a></li>--}}
                </ul>
            </li>

                <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Hostel Settings</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/roomSettings'}}">Room Settings</a></li>
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/paymentSettings'}}">Payment Settings</a></li>
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/reservationDate'}}">Reservation Settings</a></li>
                </ul>
            </li>
            @endcannot
            <li><a href="{{'/hosteller/'.$hostel->slug.'/occupants'}}"><i class="fa fa-link"></i> <span>Occupants</span></a></li>
            @cannot('isPortal')
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Room Allotment</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/allotABed'}}">Allot a bed</a></li>
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/vacateAnOccupant'}}">Vacate an occupant</a></li>
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/changeOccupantRoom'}}">Change occupant room</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Payment</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/paidList'}}">Paid list</a></li>
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/reservedBedList'}}">Reserved bed list</a></li>
                </ul>
            </li>
            <li><a href="{{'/hosteller/'.$hostel->slug.'/r&c'}}"><i class="fa fa-link"></i> <span>Reviews and Comments</span></a></li>
            @endcannot
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="{{'/hosteller/'.$hostel->slug.'/inbox'}}">Inbox
                            <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
                        </a>
                    </li>
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/compose'}}">Compose</a></li>
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/read'}}">Read</a></li>
                </ul>
            </li>
            <li><a href="{{'/hosteller/'.$hostel->slug.'/notice'}}"><i class="fa fa-link"></i> <span>Notice</span></a></li>
            <li><a href="{{'/hosteller/'.$hostel->slug.'/uploads'}}"><i class="fa fa-link"></i> <span>Uploads</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>User Settings</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    @can('isOwner')
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/owner'}}">Hostel Owner</a></li>
                    @endcan
                      @cannot('isPortal')
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/manager'}}">Hostel Manager</a></li>
                    @endcannot

                    <li><a href="{{'/hosteller/'.$hostel->slug.'/portal'}}">Hostel Portal</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Training</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/docs'}}">Documentation</a></li>
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/faqs'}}">FAQs</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Our Policies</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/roomCancellationPolicy'}}">Room Cancellation Policy</a></li>
                    <li><a href="{{'/hosteller/'.$hostel->slug.'/policy'}}">Hostel Policies</a></li>
                </ul>
            </li>
            <li><a href="{{'/hosteller/'.$hostel->slug.'/termsOfService'}}"><i class="fa fa-link"></i> <span>Terms of Services</span></a></li>
            @cannot('isPortal')
            <li><a href="{{'/hosteller/'.$hostel->slug.'/archives'}}"><i class="fa fa-link"></i> <span>Archives</span></a></li>

            <li class="header">Extra</li>
            <li><a href="{{'/hosteller/'.$hostel->slug.'/addHostel'}}"><i class="fa fa-link"></i> <span>Add hostel</span></a></li>
            @endcannot
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
