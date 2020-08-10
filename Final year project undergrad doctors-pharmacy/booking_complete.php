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
								<li class="bg-success"><a style="color: black;" href="all_doctors.php">Doctors</a></li>



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
									<li class=""><a href="contact.php">Contact Us</a></li>



								<div class="dropdown navbar-left">
									<li class="dropbtn">Search Doctor <i class="fa fa-search"></i></b></li>
									<div class="dropdown-content">

										<li>

											<form class="" action="all_doctors_search.php" action="get" role="search">
												<div class="input-group">
													<input type="text" class="form-control" name="symbol" placeholder="By Name">
													<span class="input-group-btn">
														<button class="btn btn-default" type="Submit"><span class="fa fa-search"></span></button>
													</span>
												</div>

											</form>


										</li>

										<li class=""><a href="advancedsearch.php">Advanced Search</a></li>


									</div>
								</div>








							</ul>
						</div>
					</div>
				</div>
			</nav>
			<div class="container-fluid">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">




						</div>
						<div class="banner-text text-center">
							

							<div class="container">

									
			<?php 
	if(isset($_POST['submit']))
	{

		$specilization=$_POST['specialization'];
		$doctor_uname=$_POST['doc_uname'];
		$patient_uname=$_POST['patient_uname'];
		$fees=$_POST['fees'];
		$appdate=$_POST['appdate'];
		$time=$_POST['apptime'];

		$query=mysqli_query($con,"INSERT INTO `appointment`(`doctorSpecialization`, `doctor_uname`, `patient_uname`, `Fees`, `appointmentDate`, `appointmentTime`) VALUES ('$specilization','$doctor_uname','$patient_uname','$fees','$appdate','$time')");



		if($query)
		{
			echo "<div class='btn btn-block btn-success'>Your appointment has been successfully booked</div>";

			$queryPatient=mysqli_query($con,"SELECT `fullName`,`contactno` FROM `patients` WHERE `username` like '$patient_uname'");

			$row = mysqli_fetch_assoc($queryPatient);

			$queryDoctor=mysqli_query($con,"SELECT `doctorName`,`contactno` FROM `doctors` WHERE `username` like '$doctor_uname'");

			$row1 = mysqli_fetch_assoc($queryDoctor);

			$username = "abbas.afzal20@gmail.com";
			$hash = "80485c89728c65cc1dd74589106496d3b534c3d7ad5a035adbe08fa6f023b833";

			// Config variables. Consult http://api.txtlocal.com/docs for more info.
			$test = "0";

			// Data for text message. This is the text message data.
			$sender = "Ezhealth"; // This is who the message appears to be from.
			$numbers = $row['contactno']; // A single number or a comma-seperated list of numbers
			$message = "Your appointment with ".$row1['doctorName'] ." has been successfully booked on ".$appdate." at " .$time. ".";
			// 612 chars or less
			// A single number or a comma-seperated list of numbers
			$message = urlencode($message);
			$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
			$ch = curl_init('http://api.txtlocal.com/send/?');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch); // This is the result from the API
			curl_close($ch);


			$numberDoctor = $row1['contactno']; // A single number or a comma-seperated list of numbers
			$messageDoctor = "Your appointment with ".$row['fullName'] ." has been booked on ".$appdate." at " .$time. ".";
			// 612 chars or less
			// A single number or a comma-seperated list of numbers
			$messageDoctor = urlencode($messageDoctor);
			$dataDoctor = "username=".$username."&hash=".$hash."&message=".$messageDoctor."&sender=".$sender."&numbers=".$numberDoctor."&test=".$test;
			$chDoctor = curl_init('http://api.txtlocal.com/send/?');
			curl_setopt($chDoctor, CURLOPT_POST, true);
			curl_setopt($chDoctor, CURLOPT_POSTFIELDS, $dataDoctor);
			curl_setopt($chDoctor, CURLOPT_RETURNTRANSFER, true);
			$resultDoctor = curl_exec($chDoctor); // This is the result from the API
			curl_close($chDoctor);

			echo "<meta http-equiv='refresh' content='4;url=doctors.php'>";


		}
		else{
			echo "<div class='btn btn-block btn-danger'>Error</div>";

		}

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
