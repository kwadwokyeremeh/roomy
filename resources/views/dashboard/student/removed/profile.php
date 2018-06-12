<!DOCTYPE html>
<html>

<head>
	<title>Roomie | Home - Welcome</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet">

	<!-- Roomie css style sheet -->
	<link href="../css/roomie.css" rel="stylesheet">

	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<div class="header" id="home">

		<div class="top_menu_w3layouts">
			<div class="container">
			<div class="header_left">
				<ul>
					<li>
						HOSTELS AND HOMESTEL MANAGEMENT PORTAL FOR STUDENTS OF KNUST - RESERVE A ROOM
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>


		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container" style="">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="../../index.php">
							<h1><span class="fa fa-home" aria-hidden="true"></span>Roomie </h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="home.php">Welcome Kwame K. Akwesi</a></li>
								
								<!-- <li><a href="#">Help</a></li> -->

								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<img src="../images/membericon.png" class="img-circle" height="40" width="40" alt="">
										<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="../../index.php"> <i class="fa fa-sign-out"></i>Sign out</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
										<li class="divider"></li>
										
									</ul>
								</li>

							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>


	<!-- main content -->
	<div class="content">
		<div class="container roomie-container">
		    <div class="row">
		        <div class="col-md-8 col-md-offset-2">
		        	<!-- Panel content -->
		            <div class="panel panel-info">
					  <div class="panel-heading text-center">Current Credentials</div>
					  <div class="panel-body">

					  	<!-- nav bar tabs -->
						<ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#personal_info">Personal Info</a></li>
						  <li><a data-toggle="tab" href="#change_password">Change Password</a></li>
						</ul>
						<!-- end of nav bar tabs -->

						<!-- tab content -->
						<div class="tab-content">
							<!-- personal info tab content -->
						  <div id="personal_info" class="tab-pane fade in active">
						    <table class="table table-responsive table-striped table-hover">
						  		<tbody class="roomie-table">
						  			<tr>
						  				<th class="col-xs-3 text-right">Name:</th>
						  				<td> KWAME K. AKWESI</td>
						  			</tr>

						  			<tr>
						  				<th class="col-xs-3 text-right">E-mail Address:</th>
						  				<td> admin@admin.com</td>
						  			</tr>

						  			<tr>
						  				<th class="col-xs-3 text-right">Hostel Status:</th>
						  				<td> admin@admin.com</td>
						  			</tr>

						  		</tbody>
					  		</table>
						  </div>
						  <!-- End of personal info tab content -->

						  <!-- password change tab content -->
						  <div id="change_password" class="tab-pane fade">
						    
								<div class="panel-body">
				                    <form class="form-horizontal" method="post" action="#">

				                        <div class="form-group">
				                            <label for="old_password" class="col-md-4 control-label">Old Password</label>

				                            <div class="col-md-6">
				                                <input id="old_password" type="password" class="form-control" name="old_password" required autofocus>
				                            </div>
				                        </div>

				                        <div class="form-group">
				                            <label for="password" class="col-md-4 control-label">New Password</label>

				                            <div class="col-md-6">
				                                <input id="password" type="password" class="form-control" name="password" required>
				                            </div>
				                        </div>

				                        <div class="form-group">
				                            <label for="password-confirm" class="col-md-4 control-label">Confirm New Password</label>
				                            <div class="col-md-6">
				                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				                            </div>
				                        </div>

				                        <div class="form-group">
				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" class="btn btn-primary">
				                                    Reset Password
				                                </button>
				                            </div>
				                        </div>
				                    </form>
				                </div>
						  	</div>
						  	<!-- End of password change tab content -->
						</div>
						<!-- End of tab content -->
					  </div>
					</div>
					<!-- end of panel content -->
		        </div>
		    </div>
		</div>
	</div>
	<!-- end of main content -->


	<!-- footer -->
	<div class="footer_top_agile_w3ls">
		<div class="container">
			<div class="col-md-4 footer_grid">
				<h3>About Us</h3>
				<p>
					A brief description of what we do to should wriiten here
				</p>
				
			</div>

			<div class="col-md-4 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>Location<span>Town or City.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">E-mail Address</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>Contact</li>
				</ul>
			</div>
			<div class="col-md-4 footer_grid ">
				<h3>Send us a message</h3>
				<div class="footer_grid_right">
					<form action="#" method="post">
						<textarea name="message" class="form-control" rows="5" placeholder="Type your message here..."></textarea> <p></p>
						<input type="email" name="Email" placeholder="Email Address..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>

		</div>
	</div>
	<div class="footer_wthree_agile">
		<p>Name of the company should be here. Check more baout us on <a href="#">website link</a></p>
	</div>
	<!-- //footer -->
	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					New Clinic
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 

	<!-- js -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
</body>

</html>