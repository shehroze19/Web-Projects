<?php include("connection.php"); ?>
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
								<li class=""><a  href="index.php">Home</a></li>
								<li class=""><a href="services.php">Services</a></li>
								<li class=""><a href="about.php">About</a></li>
								<li class=""><a href="all_doctors.php">Doctors</a></li>


								


<div class="dropdown navbar-left hidden-md hidden-lg">
  <div style="color: white;padding-top: 13px;" class="btn  dropdown-toggle" type="button" data-toggle="dropdown">LOGIN / SIGN UP 
  <span class="caret"></span></div>
  <ul class="dropdown-menu">
    
<li class="text-center alert-info well"><strong>Login as</strong></li>

										<li class="text-center btn btn-default btn-block"><a href="login_patient.php" ><strong><i>Patient</i></strong></a></li>

										<li class="text-center btn btn-default btn-block"><a href="login_doctor.php"><strong><i>Doctor</i></strong></a></li>

										<br>

										<li class="text-center alert-success well"><strong>Sign  up as</strong></li>

										<li class="text-center btn btn-default btn-block"><a href="register_patient.php"><strong><i>Patient</i></strong></a></li>

										<li class="text-center btn btn-default btn-block"><a href="register_doctor.php"><strong><i>Doctor</i></strong></a></li>

  </ul>
</div>



	<div class="dropdown navbar-left hidden-xs hidden-sm">
									<li class="dropbtn">LOGIN / SIGN UP <b class="caret"></b></li>
									<div class="dropdown-content">

										<li class="text-center alert-info well"><strong>Login as</strong></li>

										<li class="text-center btn btn-default btn-block"><a href="login_patient.php" ><strong><i>Patient</i></strong></a></li>

										<li class="text-center btn btn-default btn-block"><a href="login_doctor.php"><strong><i>Doctor</i></strong></a></li>

										<br>

										<li class="text-center alert-success well"><strong>Sign  up as</strong></li>

										<li class="text-center btn btn-default btn-block"><a href="register_patient.php"><strong><i>Patient</i></strong></a></li>

										<li class="text-center btn btn-default btn-block"><a href="register_doctor.php"><strong><i>Doctor</i></strong></a></li>

									</div>
								</div>








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
							

							<div class="container">

								<?php 
								if(count($_POST)>0){
									$name=$_POST['name'];
									$email=$_POST['Email'];
									$mobile=$_POST['mobile'];
									$message=$_POST['message'];

									$key = 'SuperSecretKey12';

									$encrypted = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $message, MCRYPT_MODE_ECB);

									$decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $encrypted, MCRYPT_MODE_ECB);


									$query="INSERT INTO `contact_form`(`Name`, `Email`, `Mobile`, `Message`) VALUES ('$name','$email','$mobile','$decrypted');";


									$runner=mysqli_query($con,$query);


									if($runner){
										echo "<div class='btn btn-block alert-success'>Thank you! We will contact you in due time.</div>";
									}
									else{
										echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";
										echo "<a href='contact.php'>'<div class='btn btn-block alert-info'>Click here to go back</div></a>";


									}

								}
								else{
									echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";
									echo "<a href='contact.php'>'<div class='btn btn-block alert-info'>Click here to go back</div></a>";


								}

								?>

							</div>


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
