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
						  <a href="home.php" class="list-group-item">Dashboard</a>
						  <a href="room_settings.php" class="list-group-item active">Room Settings</a>
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
					
					<!-- room setting accordian starts here -->
			<div class="flex-column">
				<div class="form-group">
					<div class="panel-group" id="accordion">
					  <div class="panel panel-primary">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					        Change Room</a>
					      </h4>
					    </div>

					    <!-- body Change room tab -->
					    <div id="collapse1" class="panel-collapse collapse in"><br>
					    <a href="#changeRoom" data-toggle="modal" class="pull-right btn btn-primary">Change Room Here</a>
					      <div class="panel-body">

					      	<!-- Start of table for change room -->

							<table class="table table-hover table-responsive" style="border: none;">
								<tbody>
									<tr>
							  			<th class="col-xs-3 text-right">Current Hostel:</th>
							  				<td> No active reservations. <p>If any show "Active, Hostel Name here"</p></td>
							  			</tr>

							  			<tr>
							  				<th class="col-xs-3 text-right">Room Type:</th>
							  				<td> show room type. <p> E.g. 4 in a room, 2 in a room etc"</p></td>
							  			</tr>

							  			<tr>
							  				<th class="col-xs-3 text-right">Room Number:</th>
							  				<td> No room reserved. <p> If reserved show "Room No here."</p></td>
							  			</tr>
								</tbody>
							</table>

							<!-- End of table for change room -->
					  	 </div>
					    </div>
					    <!-- End of change room tab body -->

					  </div>
					  <div class="panel panel-primary">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					        Vacate Room</a>
					      </h4>
					    </div>
					    <div id="collapse2" class="panel-collapse collapse">
					      <div class="panel-body">

					      		<!-- Vacate room form start -->
							     <form class="form-horizontal" action="#" method="#">
					              <div class="box-body">
					                <div class="form-group">
					                  <label for="inputEmail3" class="col-sm-3 control-label">Hostel Name:</label>

					                  <div class="col-sm-9">
					                    <input type="text" class="form-control" value="Name of the Hostel here" placeholder="Email" readonly>
					                  </div>
					                </div>


					                <div class="form-group">
					                  <label for="inputPassword3" class="col-sm-3 control-label">Why Vacate Room:</label>
					                  <div class="col-sm-9">
					                  	<textarea name="description" class="form-control" style="resize: none;" rows="4" required placeholder="Please state why you would want to vacate room here..."></textarea>
					                  </div>
					                </div>


					              </div>
					              <!-- /.box-body -->
					              <div class="modal-footer">
					                <button type="submit" class="btn btn-success pull-right">Send vacate room request</button>
					              </div>
					              <!-- /.box-footer -->
					            </form>
					            
						      	<!-- End of vacate room form -->

					  		</div>
					    </div>
					  </div>
					</div>
					
				</div>
				
			</div>
			<!-- End of room setting accordian -->
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