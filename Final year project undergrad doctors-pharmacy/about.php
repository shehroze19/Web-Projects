<?php 
session_start(); ?>

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
								<li class=""><a  href="services.php">Services</a></li>
								<li class="bg-success"><a  style="color: black;" href="about.php">About</a></li>
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
							
							<div class="well alert-danger">In Pakistan most of the documentation in the hospitals is done manually. We as humans are not perfect and can make mistakes, but in the field of medicine, perfection is required because even the slightest mistake or errors can cause grave consequences. Medical history cannot be maintained easily because the data is usually stored manually in papers and registers which become difficult to retrieve. At times these records are lost or become unavailable over the period. It is very important for the treating doctor to properly document the management of a patient under his care. This is basically because of the weakness of the existing system which includes over reliance on paper based work. Paper files consume a lot of the office space, slow recording, processing and retrieval of patient details. In a given survey, bad handwriting of doctor’s resulted in mortality and morbidity annually. Many such errors result from unclear abbreviations and dosage indications and illegible writing. On the other hand medical Stores are busy places, with a pharmacist filling up to 20+ prescriptions in a single hour.</div><br><br>

							<div class="well alert-success">We are a team of two who will be making an automated system will not only facilitate huge burden of patients but will also be optimized for time efficiency. This automated system will maintain digital records from which you can easily get complete information about the patient, past illness, past disease etc. in a matter of seconds. We can also get to know each and every detail about the patient for future reference i.e. blood group, in case of emergency contact number and other required requisite information. Doctors can easily give appointments to the patient’s click of a button whereas the patients can also confirm their timely appointments through the system. The medical prescription will be assigned on the base of the given information which will be accurate. This system will be providing accurate, up-to-date, and complete information about patients at the point of care.</div>

						</div>
						<div class="banner-text text-center">
							<section id="service" class="section-padding">

								<section id="doctor-team" class="section-padding">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<h2 class="ser-title white">Project Members</h2>
												<hr class="botm-line">
											</div>
											
											<div class="col-md-3 col-sm-3 col-xs-6 hidden-xs hidden-sm">
											</div>



											<div class="col-md-3 col-sm-3 col-xs-6">
												<div class="thumbnail">
													<img src="img/shehroze.jpg" alt="..." class="team-img">
													<div class="caption">
														<h3>Shehroze Aamer</h3>
														<p>Project Developer</p>
														<ul class="list-inline">
															<li><a href="https://www.facebook.com/shehroze19" target="_blank"><i class="fa fa-facebook"></i></a></li>
															<li><a href="https://twitter.com/Shehroze1995" target="_blank"><i class="fa fa-twitter"></i></a></li>
															<li><a href="https://plus.google.com/105139669982505511545" target="_blank"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-6">
												<div class="thumbnail">
													<img src="img/abbass.jpg" alt="..." class="team-img">
													<div class="caption">
														<h3>M.Abbas Afzal</h3>
														<p>Project Developer</p>
														<ul class="list-inline">
															<li><a href="https://www.facebook.com/abbas.afzal01" target="_blank"><i class="fa fa-facebook"></i></a></li>
															<li><a href="https://twitter.com/abbas_afzal2610" target="_blank"><i class="fa fa-twitter"></i></a></li>
															<li><a href="https://plus.google.com/+AbbasAfzal10" target="_blank"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
								</section>
								<!--/ doctor team-->



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
