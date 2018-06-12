<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar hostel panel (optional) hostel image and name-->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <h4>Hostel Name</h4>
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
            <li class="active"><a href="index.php"><i class="fa fa-link"></i> <span>Summary</span></a></li>

            <li><a href="occupants.php"><i class="fa fa-link"></i> <span>Occupants</span></a></li>
            <li class="treeview active">
                <a href="mailbox/mailbox.php">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="mailbox/mailbox.php">Inbox
                            <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
                        </a>
                    </li>
                    <li><a href="mailbox/compose.php">Compose</a></li>
                    <li><a href="mailbox/read-mail.php">Read</a></li>
                </ul>
            </li>
            <li><a href="notice.php"><i class="fa fa-link"></i> <span>Notice</span></a></li>
            <li><a href="uploads.php"><i class="fa fa-link"></i> <span>Uploads</span></a></li>
            <li><a href="hostelportal.php"><i class="fa fa-link"></i> <span>User Settings</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Training</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="docs.php">Documentation</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Our Policies</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="room_cancellation.php">Room Cancellation Policy</a></li>
                    <li><a href="hostel_policy.php">Hostel Policies</a></li>
                </ul>
            </li>
            <li><a href="terms_of_service.php"><i class="fa fa-link"></i> <span>Terms of Services</span></a></li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>