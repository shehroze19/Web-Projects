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
								<li class="bg-success"><a style="color: black;" href="services.php">Services</a></li>
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
								<li class=""><a href="contact.php">Contact Us</a></li>


							</ul>
						</div>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
							<img src="img/service.png" style="height: 150px; width: 260px;" class="img-responsive">
						</div>
						<div class="banner-text text-center">
							<section id="service" class="section-padding">
								<div class="container">
									<div class="row">
										<div class="col-md-4 col-sm-4">
											<h2 class="white">Our Services</h2>
											<hr>
											<p>We provide the patients the service of booking an appointment with the nearby doctors. The doctor can give prescription and the patient can have the medicine home-delivered.</p>
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="service-info">
												<div class="icon">
													<i class="fa fa-stethoscope"></i>
												</div>
												<div class="icon-info">
													<h4 class="white">24 Hour Support</h4>
													<p>This application can find the doctors with 24/7 service anytime.</p>
												</div>
											</div>
											<div class="service-info">
												<div class="icon">
													<i class="fa fa-ambulance"></i>
												</div>
												<div class="icon-info">
													<h4 class="white">Emergency Services</h4>
													<p>Appointment system is made in such a way that it saves time of patients.</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="service-info">
												<div class="icon">
													<i class="fa fa-user-md"></i>
												</div>
												<div class="icon-info">
													<h4 class="white">Medical Counseling</h4>
													<p>The doctors listed on this platform can also provide the patients with medical counseling.</p>
												</div>
											</div>
											<div class="service-info">
												<div class="icon">
													<i class="fa fa-medkit"></i>
												</div>
												<div class="icon-info">
													<h4 class="white">Premium Healthcare</h4>
													<p>The doctors registered here provide the best healthcare possible.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="overlay-detail text-center">
							<a href="#service"><i class="fa fa-angle-down"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ banner-->
	<!-- slider start -->
	<div class="container"><img class="img-responsive" src="img/servicemain.png" alt=""></div><br><br><br>
	<!--/ slider end -->

	<!-- some points-->
	<div class="well">
		<h2 class="text-center">What we provide?</h2>
		<ul>
			<li>&#8227;Reduction / Elimination of duplicate work</li>
			<li>&#8227;Improved flow of information that enables faster decision making</li>
			<li>&#8227;Increasing productivity</li>
			<li>&#8227;Greater control over Patient Management</li>
			<li>&#8227;Advancement in services offered to patients</li>

		</ul>

	</div>
	<!--/ end -->

	





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
