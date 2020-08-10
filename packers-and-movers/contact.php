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
								<li ><a href="index.php">Home</a></li>
								<li ><a href="services.php">Services</a></li>
								<li ><a href="about.php">About</a></li>
								<li class=""><a href="comingsoon.php">Doctors</a></li>


							
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login / Sign up   <b class="caret"></b></a>
									<ul class="dropdown-menu">

										<li class="text-center well"><strong>Login as</strong></li>
										<li class="text-center btn-success"><a href="login_patient.php">Patient</a></li>
										<li class="divider"></li>

										<li class="text-center btn-warning"><a href="login_doctor.php">Doctor</a></li>
										<li class="divider"></li>

										<li class="text-center"><a href="login_admin.php">Admin</a></li>

										<li class="text-center well"><strong>Sign Up as</strong></li>
										<li class="text-center btn-success"><a href="register_patient.php">Patient</a></li>
										<li class="divider"></li>

										<li class="text-center btn-warning"><a href="register_doctor.php">Doctor</a></li>
										<li class="divider"></li>

										<li class="text-center"><a href="register_admin.php">Admin</a></li>
										




									</ul>
								</li>




								<li class=""><a href="comingsoon.php">Pharmacy</a></li>
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
								<input type="tel" class="form-control" name="mobile" placeholder=" Enter 10-digit mobile no.">
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



						</div>
					</form>

				</div>

			</div>

			<div class="col-md-12">

				<div class="contact-info">
					<ul>
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
