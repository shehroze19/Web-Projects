<?php 
include("connection.php");

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
								<li><a href="login_patient.php">Login</a></li>
								<li class="divider"></li>
								<li class="active"><a href="register_patient.php">Sign Up</a></li>
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
			<h1>Sign Up as Patient</h1>

			<form action="register_patient_complete.php" method="post" class="form">
				<input type="text" placeholder="Name" name="Name" required>
				<input type="text" placeholder="Username" name="Username"  required>
				<input type="password" placeholder="Password" name="Password"  required>
				<input type="email" placeholder="Email" name="Email">


				<div>


					<button type="submit">Sign Up</button>
					<br>
					<br>
					<br>

					


				</form>
<div class="text-right"><a href="register_doctor.php" class="btn btn-danger">Sign up as a Doctor</a></div>
			
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
