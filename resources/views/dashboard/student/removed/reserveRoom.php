<!DOCTYPE html>
<html>

<head>
	<title>Roomie | Home - Welcome</title>

	<?php include('head.php'); ?>

		<!-- Main SmartWizard CSS -->

<link href="dist/css/smart_wizard.min.css" rel="stylesheet">

<!-- Optional SmartWizard themes -->

<link href="dist/css/smart_wizard_theme_circles.min.css" rel="stylesheet">

<link href="dist/css/smart_wizard_theme_arrows.min.css" rel="stylesheet">

<link href="dist/css/smart_wizard_theme_dots.min.css" rel="stylesheet">

</head>

<body>

	<?php include('mobileNav.php'); ?>

	<div id="wrapper-container" class="site-wrapper-container">


		<?php include('mainNav.php'); ?>

		<div id="main-content" class="site-main-content">
		    <div id="home-main-content" class="site-home-main-content">

		   <?php include('student_header.php'); ?>

		<div class="content">

			<div class="content">

		<div class="container-fluid roomie-container col-md-offset-1" style="margin-top: -80px;">
			
			<!-- side menu -->
		    <div class="flex-column">
		    	<div class="form-group col-md-3 col-lg-3 col-xs-12 col-sm-12">
		    		<div class="list-group">
						  <a href="home.php" class="list-group-item">Dashboard</a>
						  <a href="room_settings.php" class="list-group-item">Room Settings</a>
						  <a href="reserveRoom.php" class="list-group-item active">Reserve a room</a>
						  <a href="payment.php" class="list-group-item">Payments and Billing</a>
						  <a href="TermsOfService.php" class="list-group-item">Terms of Service</a>
						  <a href="conditions.php" class="list-group-item">Terms and Conditions</a>
					</div>
		    	</div>
		    </div>
			<!-- end of side menu -->

			<div class="flex-column">
			
				<div class="form-group col-md-8 col-lg-8 col-xs-12 col-sm-12">

					<!-- Room reservations starts here -->
					  <div class="panel-group">
							<div class="panel panel-primary">
							  <div class="panel-heading text-center">Reserve Room</div>
							  <div class="panel-body">

										   	<!-- Room reservation starts here -->
									<div id="smartwizard">
									  <ul>
									    <li><a href="#personalInfo">Personal Info</a></li>
									    <li><a href="#selectHostel">Hostel</a></li>
									    <li><a href="#chooseRoom">Choose a room</a></li>
									    <li><a href="#previewSelect">Preview</a></li>
									    <li><a href="#payment">Payments</a></li>
									    <li><a href="#confirmation">Confirmation</a></li>
									  </ul>
									  
									  <div>

									  	<!-- Start of pesonal information -->
									      <div id="personalInfo" class="">

									        <table class="table table-hover table-striped">
									 
									        	<tbody class="get-table">
									        		<tr>
									        			<th>Name:</th>
									        			<td>The name comes here</td>
									        		</tr>

									        		<tr>
									        			<th>Reference Number:</th>
									        			<td>The reference comes here</td>
									        		</tr>

									        		<tr>
									        			<th>Department/ Faculty:</th>
									        			<td>The dept. comes here</td>
									        		</tr>

									        		<tr>
									        			<th>Contact:</th>
									        			<td>The contact comes here</td>
									        		</tr>

									        		<tr>
									        			<th>Gender:</th>
									        			<td>The gender comes here</td>
									        		</tr>

									        		<tr>
									        			<th>Email:</th>
									        			<td>The email comes here</td>
									        		</tr>

									        	</tbody>
									        </table>
									      </div>
									      <!-- End of personal information -->

									      <!-- Start od hostel select -->
									      <div id="selectHostel" class="">
									       <label>Select Hostel</label>
									      <select name="hostel" class="form-control" required>
									      	<option value="" class="hidden">Select hostel choice here...</option>
									      	<option value="hostel A">Hostel A</option>
									      	<option value="hostel B">Hostel B</option>
									      	<option value="hostel C">Hostel C</option>
									      </select>

									      <br><br><span>NOTE: hostel selection should be required</span>
									      </div>
									      <!-- End of hostel select -->

									      <!-- Start of choose room -->
									      <div id="chooseRoom" class="">
									        
									      	<div class="flex-column">
									      		<div class="col-md-4">
									      			<ul class="list-group">

									      			  <li class="list-group-item active text-center">
													    Room Prices
													  </li>

													  <li class="list-group-item">
													    One in room: <strong class="">GHȼ4000</strong>
													  </li>

													  <li class="list-group-item">
													    Two in room: <strong class="">GHȼ3000</strong>
													  </li>

													</ul>
									      		</div>
									      	</div>

									      	<div class="flex-column">
									      		<div class="col-md-4">
									      			<ul class="list-group">
									      			  <li class="list-group-item active text-center">
													    Room Prices
													  </li>

													  <li class="list-group-item">
													    Three in room: <strong class="">GHȼ2000</strong>
													  </li>

													  <li class="list-group-item">
													    Four in room: <strong class="">GHȼ1000</strong>
													  </li>
													</ul>
									      		</div>
									      	</div>

									      	<!-- available rooms -->
									      	<div class="flex-column">
									      		<div class="col-md-4">
									      			<ul class="list-group">
													  <li class="list-group-item active text-center">
													   Rooms Available
													  </li>

													  <li class="list-group-item">
													    Males: <strong class="">100 rooms</strong>
													  </li>

													  <li class="list-group-item">
													    Females: <strong class="">130 rooms</strong>
													  </li>

													</ul>
									      		</div>
									      	</div><br>
									      	<!-- End of available rooms -->

									      	<!-- floor plans for room -->

									      	<div>
									      		<span>The sample floor plan comes here</span>
									      	</div>

									      	<!-- end of floor plans for rooms -->

									      </div>
									      <!-- End of choose room -->


									      <!-- Confirm all selection -->
									      <div id="previewSelect" class="">
									        <h5 style="padding: 10px;">Confirmation your selections</h5>

									        <div class="panel panel-success">
											  <!-- Table -->
											  <table class="table table-hover table-striped">
											    <tbody>
											    	<tr>
											    	   <th>Hostel Name:</th>
											    	   <td>The selected hostel name should show here</td>	
											    	</tr>

											    	<tr>
											    	   <th>Room Number:</th>
											    	   <td>The selected room number should show here</td>
											    	</tr>


											    	<tr>
											    	   <th>Room Gender:</th>
											    	   <td>Show male or female for the room selected</td>
											    	</tr>


											    	<tr>
											    	   <th>Room type:</th>
											    	   <td>Whether 4 in room, 2 in room etc</td>
											    	</tr>


											    	<tr>
											    	   <th>Room Status:</th>
											    	   <td>show no; of beds left. E.g 2 beds availbale</td>
											    	</tr>

											    </tbody>
											  </table>

												  <div style="padding: 10px;">
												  	<div class="alert alert-success" role="alert">
												  		<small style="font-size: 12px; color: black;">Your selections have successfully been recorded, click next to proceed or previous to make changes.</small>
												 	</div>
												  </div>
											</div>

									      </div>
									      <!-- End of confirm selection -->


									      <!-- Make payment -->
									      <div id="payment" class="">
									        <h5 style="padding: 10px;">Mode of payment</h5>

									        <select name="paymentType" class="form-control" required>
									        	<option value="" class="hidden">Select your convenient mode of payment..</option>
									        	<option value="bank">Bank Payment</option>
									        	<option value="mobileMoney">Mobile Money Payment</option>
									        </select>

									        <div class="modal-footer">

									        	<a href="#reserveRoom" data-toggle="modal" class="pull-right btn btn-success">Generate Payment Credentials</a>
									        	
									        </div>

									        <br><br><span>NOTE: Payment mode selection should be required</span>
									      </div>
									      <!-- End of make payment -->


									      <!-- start of confirmation of payment -->
									      <div id="confirmation" class="">
									        <h5 style="padding: 10px;">Confirmation Message</h5>
									        show a print out after the payment has been done and approval has been made <br>
									        Print out should include Personal information, Hostel information, Room information and any other relvant information.
									      </div>
									      <!-- end of confirmation of payment -->

									  </div>
									</div>


							  </div>
							</div>
    				  </div>
    				 <!-- Room reservations ends here -->

				</div>
			</div>

		</div>
	</div>


<div id="reserveRoom" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="text-primary">Payment Credentials</h5>
	      </div>
	      <div class="modal-body" style="padding: 20px;">
	      	Generate code and all other credentials for the payment
	      </div>
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



<script src="//code.jquery.com/jquery.min.js"></script> <!-- Tihis code has been downloaded -->
<script src="dist/js/jquery.smartWizard.min.js"></script>

<script src="js/reserveRoom.js"></script>


<script type="text/javascript">
	$('#smartwizard').smartWizard();

</script>
</body>

</html>