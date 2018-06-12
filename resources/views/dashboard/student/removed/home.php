<!DOCTYPE html>
<html>

<head>
	<title>Roomie | Home - Welcome</title>

	<?php include('head.php'); ?>

</head>

<body>

	<?php include('mobileNav.php'); ?>

	<div id="wrapper-container" class="site-wrapper-container">


		<?php include('mainNav.php'); ?>

		<div id="main-content" class="site-main-content">
		    <div id="home-main-content" class="site-home-main-content">

		    	<?php include('student_header.php'); ?>

		<div class="content">

		<div class="container-fluid roomie-container col-md-offset-1" style="margin-top: -80px;">
			
			<!-- side menu -->
		    <div class="flex-column">
		    	<div class="form-group col-md-3 col-lg-3 col-xs-12 col-sm-12">
		    		<div class="list-group">
						  <a href="home.php" class="list-group-item active">Dashboard</a>
						  <a href="room_settings.php" class="list-group-item">Room Settings</a>
						  <a href="reserveRoom.php" class="list-group-item">Reserve a room</a>
						  <a href="payment.php" class="list-group-item">Payments and Billing</a>
						  <a href="TermsOfService.php" class="list-group-item">Terms of Service</a>
						  <a href="conditions.php" class="list-group-item">Terms and Conditions</a>
					</div>
		    	</div>
		    </div>
			<!-- end of side menu -->

			<div class="flex-column">
				<div class="form-group col-md-8 col-lg-8 col-xs-12 col-sm-12">
					<!-- Panel content -->
		            <div class="panel panel-primary">
					  <div class="panel-heading text-center">General Details</div>
					  <div class="panel-body">

					  	<!-- nav bar tabs -->
						<ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#room_details">Room Details</a></li>
						  <li><a data-toggle="tab" href="#notices">Notices <span class="badge">3</span></a></li>
						  <li><a data-toggle="tab" href="#profile">Profile Details</a></li>
						</ul>
						<!-- end of nav bar tabs -->


						<!-- Current profile -->
						<div class="tab-content">

							<!-- personal info tab content -->
						  <div id="room_details" class="tab-pane fade in active">
						  	<div class="panel-body table-responsive">
							    <table class="table table-striped table-hover">
							  		<tbody class="roomie-table">
							  			<tr>
							  				<th class="col-xs-3 text-right">Hostel Status:</th>
							  				<td> No active reservations. <p>If any show "Active, Hostel Name here"</p></td>
							  			</tr>

							  			<tr>
							  				<th class="col-xs-3 text-right">Room Status:</th>
							  				<td> No room reserved. <p> If reserved show "Room No here."</p></td>
							  			</tr>

							  			<tr>
							  				<th class="col-xs-3 text-right">Room Type:</th>
							  				<td> Show room type here. eg. 2 in a room, 3 in a room etc..</td>
							  			</tr>

							  			<tr>
							  				<th class="col-xs-3 text-right">Amount (GHȼ):</th>
							  				<td> 1200.00</td>
							  			</tr>

							  			<tr>
							  				<th class="col-xs-3 text-right">Amount Paid (GHȼ):</th>
							  				<td> 1200.00</td>
							  			</tr>


							  		</tbody>
						  		</table>
						  	</div>
						  </div>
						  <!-- End of current profile tab content -->

						  <!-- Notices tab content -->
						  	<div id="notices" class="tab-pane fade">
								<div class="panel-body table-responsive">
									<table class="table table-hover">
										<tbody>
											<tr>
												<td>1</td>
												<td>Hostel</td>
												<td>
													Payment Notice for reserved room
												</td>
												<td class="pull-right">
													<a href="#" class="btn btn-primary btn-sm" title="read"><i class="fa fa-folder-open"></i></a>
													<a href="#" class="btn btn-danger btn-sm" title="delete"><i class="fa fa-trash"></i></a>
												</td>
											</tr>


											<tr>
												<td>2</td>
												<td>Hostel Manager</td>
												<td>
													Payment Notice - reminding of part payment
												</td>
												<td class="pull-right">
													<a href="#" class="btn btn-primary btn-sm" title="read"><i class="fa fa-folder-open"></i></a>
													<a href="#" class="btn btn-danger btn-sm" title="delete"><i class="fa fa-trash"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
				                </div>
						  	</div>
						  	<!-- End of Notices tab content -->


						  	<!-- Person profile tab content -->
						  	<div id="profile" class="tab-pane fade">
						  		<div class="panel-body table-responsive">
									<table class="table table-striped table-hover">
								  		<tbody class="roomie-table">
								  			<tr>
								  				<th class="col-xs-3 text-right">Full Name:</th>
								  				<td> KWAME K. AKWESI</td>
								  			</tr>

								  			<tr>
								  				<th class="col-xs-3 text-right">E-mail Address:</th>
								  				<td> admin@admin.com</td>
								  			</tr>

								  			<tr>
								  				<th class="col-xs-3 text-right">Contact:</th>
								  				<td> 0501421422</td>
								  			</tr>

								  			<tr>
								  				<th class="col-xs-3 text-right">Programme:</th>
								  				<td> BSC. MECHANICAL ENGINEERING</td>
								  			</tr>

								  			
								  		</tbody>
							  		</table>
				                </div>
						  	</div>
						  	<!-- End of personal profile content -->

						</div>
						<!-- End of tab content -->
					  </div>
					</div>
					<!-- end of panel content -->
				</div>
			</div>

		</div>

		
		</div>

		    </div>
		</div>

	</div>


<!-- Latest compiled and minified JavaScript -->
<script src="../../js/jquery.min.js"></script>
<script src="../../js/jquery1.min.js"></script>
<script src="../../plugin/dist/owl.carousel.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/number-count/jquery.counterup.min.js"></script>
<script src="../../js/isotope.pkgd.min.js"></script>
<script src="../../js/jquery-ui.min.js"></script>
<script src="../../js/bootstrap-datepicker.min.js"></script>
<script src="../../js/bootstrap-datepicker.tr.min.js"></script>
<script src="../../js/moment.min.js"></script>
<script src="../../js/wow.min.js"></script>
<script src="../../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script src="../../js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script src="../../js/picturefill.min.js"></script>
<script src="../../js/lightgallery.js"></script>
<script src="../../js/lg-pager.js"></script>
<script src="../../js/lg-autoplay.js"></script>
<script src="../../js/lg-fullscreen.js"></script>
<script src="../../js/lg-zoom.js"></script>
<script src="../../js/lg-hash.js"></script>
<script src="../../js/lg-share.js"></script>
<script src="../../js/jquery.nice-select.js"></script>
<script src="../../js/semantic.js"></script>
<script src="../../js/parallax.min.js"></script>
<script src="../../js/jquery.nicescroll.min.js"></script>
<script src="../../js/jquery.sticky.js"></script>
<script src="../../js/main.js"></script>
</body>

</html>