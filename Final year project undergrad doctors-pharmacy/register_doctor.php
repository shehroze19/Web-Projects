<?php 


?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Register</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/style2.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">



<style type="text/css">
	   .navbar-default {
   background: rgba(28,74,90, 1);
    border: 0px;

    height: 80px;
}

@media only screen and (max-width: 766px) {
.collapsing, .in {background-color:rgba(28,74,90, 1) ;}

}

</style>

</head>

<body>
	
	<nav class="navbar navbar-default alert-success navbar-fixed-top">
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
						<li ><a href="index.php">Home</a></li>
						<li class=""><a href="services.php">Services</a></li>
						<li class=""><a href="about.php">About</a></li>
						<li class=""><a href="doctors.php">Doctors</a></li>


						<li class="dropdown btn-success">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login / Sign up <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="login_doctor.php">Login</a></li>
								<li class="divider"></li>
								<li class="active"><a href="register_doctor.php">Sign Up</a></li>
							</ul>
						</li>



								<li class=""><a href="Pharmacy/index.php">Pharmacy</a></li>
						
						<li class=""><a href="contact.php">Contact Us</a></li>


					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="wrapper">
		<div class="container">
			<h1>Sign Up as Doctor</h1>

			<form action="register_doctor_complete.php" method="post" class="form">
				<input type="text" placeholder="PMDC#" name="pmdcNo" required>	
				<input type="text" placeholder="Name" name="Name" required>
				<input type="text" placeholder="Username" name="Username"  required>

				<input type="email" placeholder="Email" name="Email"  required>

				<input type="password" placeholder="Password" name="Password"  required>
				<select class="btn btn-default" name="Speciality">
					<option value="" disabled selected>Select Speciality</option>
					<option value="Allergology">Allergology</option>
					<option value="General practice">General practice</option>
					<option value="Internal medicine">Internal medicine</option>
					<option value="Anesthesia">Anesthesia</option>
					<option value="Pulmonology">Pulmonology</option>
					<option value="Occupational medicine">Occupational medicine</option>
					<option value="Ophthalmology">Ophthalmology</option>
					<option value="Urology">Urology</option>
					<option value="Hematology">Hematology</option>
					<option value="Surgery">Surgery</option>
					<option value="Gynecology">Gynecology</option>
					<option value="Angiology">Angiology</option>
					<option value="Hand surgery">Hand surgery</option>
					<option value="Dermatology">Dermatology</option>
					<option value="Cardiology">Cardiology</option>
					<option value="Endocrinology">Endocrinology</option>
					<option value="Infectiology">Infectiology</option>
					<option value="Pediatrics">Pediatrics</option>
					<option value="Child psychiatry">Child psychiatry</option>
					<option value="Gastroenterology">Gastroenterology</option>
					<option value="Oral surgery">Oral surgery</option>
					<option value="Maxillo surgery">Maxillo surgery</option>
					<option value="Neurology">Neurology</option>
					<option value="Nephrology">Nephrology</option>
					<option value="Otolaryngology">Otolaryngology</option>
					<option value="Pathology">Pathology</option>
					<option value="Plastic surgery">Plastic surgery</option>
					<option value="Psychiatry">Psychiatry</option>
					<option value="Radiology">Radiology</option>
					<option value="Forensic medicine">Forensic medicine</option>
					<option value="Rheumatology">Rheumatology</option>
					<option value="Tropical medicine">Tropical medicine</option>
					<option value="Oncology">Oncology</option>
					<option value="Dentistry">Dentistry</option>
					<option value="Acupuncture">Acupuncture</option>
					<option value="Geriatric medicine">Geriatric medicine</option>
					<option value="Homeopathy">Homeopathy</option>
					<option value="Orthodontics">Orthodontics</option>
					<option value="Orthopedics">Orthopedics</option>
					<option value="Manual medicine">Manual medicine</option>
					<option value="Sports medicine">Sports medicine</option>
				

				</select>
				

				<div>

<br>
					<button type="submit">Sign Up</button>
					<br>
					<br>
					<br>

					


				</form>

				
<div class="text-right"><a href="register_patient.php" class="btn btn-danger">Sign up as a Patient</a></div>
			
			</div>


			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>


	</body>
	</html>
