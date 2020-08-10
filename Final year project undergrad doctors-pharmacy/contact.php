<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EzHealth</title>
	<meta name="description" content="Shehroze Aamer,Abbas Afzal">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">


</head>

<body class="bg-info" style="color:black;" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">

			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="col-md-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><img src="img/ezlogo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class=""><a  href="index.php">Home</a></li>
								<li class=""><a href="services.php">Services</a></li>
								<li class=""><a href="about.php">About</a></li>
								<li class=""><a href="all_doctors.php">Doctors</a></li>


								


<?php 
if (!isset($_SESSION['Username'])) {
  	echo "<div class='dropdown navbar-left hidden-md hidden-lg'>
  <div style='color: white;padding-top: 13px;' class='btn  dropdown-toggle' type='button' data-toggle='dropdown'>LOGIN / SIGN UP 
  <span class='caret'></span></div>
  <ul class='dropdown-menu'>
    
<li class='text-center alert-info well'><strong>Login as</strong></li>

										<li class='text-center btn btn-default btn-block'><a href='login_patient.php' ><strong><i>Patient</i></strong></a></li>

										<li class='text-center btn btn-default btn-block'><a href='login_doctor.php'><strong><i>Doctor</i></strong></a></li>

										<br>

										<li class='text-center alert-success well'><strong>Sign  up as</strong></li>

										<li class='text-center btn btn-default btn-block'><a href='register_patient.php'><strong><i>Patient</i></strong></a></li>

										<li class='text-center btn btn-default btn-block'><a href='register_doctor.php'><strong><i>Doctor</i></strong></a></li>

  </ul>
</div>";


echo "	<div class='dropdown navbar-left hidden-xs hidden-sm'>
									<li class='dropbtn'>LOGIN / SIGN UP <b class='caret'></b></li>
									<div class='dropdown-content'>

										<li class='text-center alert-info well'><strong>Login as</strong></li>

										<li class='text-center btn btn-default btn-block'><a href='login_patient.php' ><strong><i>Patient</i></strong></a></li>

										<li class='text-center btn btn-default btn-block'><a href='login_doctor.php'><strong><i>Doctor</i></strong></a></li>

										<br>

										<li class='text-center alert-success well'><strong>Sign  up as</strong></li>

										<li class='text-center btn btn-default btn-block'><a href='register_patient.php'><strong><i>Patient</i></strong></a></li>

										<li class='text-center btn btn-default btn-block'><a href='register_doctor.php'><strong><i>Doctor</i></strong></a></li>

									</div>
								</div>";

  }

  else{

echo "<div class='dropdown navbar-left hidden-md hidden-lg'>
  <div style='color: white;padding-top: 13px;' class='btn  dropdown-toggle' type='button' data-toggle='dropdown'>LOGGED IN 
  <span class='caret'></span></div>
  <ul class='dropdown-menu'>
    
										<li class='text-center btn btn-default btn-block'><a href='patient.php' ><strong><i>Profile</i></strong></a></li>
										<li class='text-center btn btn-danger btn-block'><a href='logout.php'><strong><i>Logout</i></strong></a></li>
  </ul>
</div>";

echo "	<div class='dropdown navbar-left hidden-xs hidden-sm'>
									<li class='dropbtn'>LOGGED IN <b class='caret'></b></li>
									<div class='dropdown-content'>

									<li class='text-center btn btn-default btn-block'><a href='patient.php' ><strong><i>Profile</i></strong></a></li>
										<li class='text-center btn btn-danger btn-block'><a href='logout.php'><strong><i>Logout</i></strong></a></li>

									</div>
								</div>";


  }


   ?>







								<li class=""><a href="Pharmacy/index.php">Pharmacy</a></li>
								
								<li class="bg-success"><a style="color: black;" href="contact.php">Contact Us</a></li>


							</ul>
						</div>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">




						</div>
						<div class="banner-text text-center">
							


							<section id="contact">
								<div class="section-content">
									<h1 class="section-header white">Contact Us</h1>
								</div>
								<div class="contact-section">
									<div class="container">
										<form action="contact_complete" method="post">
											<div class="row container">
												<div class="col-sm-6">
													<div class="form-group">
														<label for="exampleInputUsername">Your name</label>
														<input type="text" class="form-control" name="name" placeholder=" Enter Name" required>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail">Email Address</label>
														<input type="email" class="form-control" name="Email"  placeholder=" Enter Email id" required>
													</div>	
													<div class="form-group">
														<label for="telephone">Mobile No.</label>
														<input type="tel" maxlength="10" class="form-control" name="mobile" placeholder=" Enter 10-digit mobile no.">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for ="description"> Message</label>
														<textarea  class="form-control" name="message" placeholder="Enter Your Message"></textarea>
													</div>
													<div>

														<button type="submit" class="btn btn-block btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
													</div>
													<br>
													<br>
													<br>


													<div class="embed-responsive embed-responsive-4by3">

														<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13284.823618856048!2d73.1565933!3d33.6518263!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe6b55e05d462beb1!2sCOMSATS+Institute+of+Information+Technology!5e0!3m2!1sen!2s!4v1509882178031" style="height: 300px;width: 550px;" frameborder="0" style="border:0" allowfullscreen></iframe>
													</div>

												</div>
											</form>

										</div>

									</div>

									<div class="col-md-12">

										<div class="contact-info">
											<ul style="list-style: none;">
												<li><i class="fa fa-home fa"></i>Address: Park Road Islamabad 45550</li>
												<li><i class="fa fa-phone fa"></i> Phone: 03325104896</li>
											</ul>

										</div>
									</div>
								</section>



							</div>
							<div class="overlay-detail text-center">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ banner-->









		<!-- footer -->
		<div class="footer-line">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center alert-success">
						© Copyright Shehroze Aamer & Muhammad Abbas Afzal

					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/ footer-->

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>
