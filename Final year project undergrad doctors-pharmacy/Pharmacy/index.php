<?php 
include("../connection.php");






session_start();

print_r($_SESSION);

if(isset($_SESSION['pharmacist_username'])){

	$sessionuser=$_SESSION['pharmacist_username'];
	$query="SELECT username FROM pharmacist where Username='$sessionuser'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);
	if($count == 1) {
		
		header("location: pharmacist.php");
	}

}

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 


	$myusername = mysqli_real_escape_string($con,$_POST['username']);
	$mypass = mysqli_real_escape_string($con,$_POST['password']); 
	$mypassword=($mypass);

	$query="SELECT * FROM `pharmacist` WHERE username='$myusername' AND password='$mypass'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) {

$_SESSION['pharmacist_id']=$row['pharmacist_id'];
$_SESSION['pharmacist_username']=$row['username'];
$_SESSION['pharmacist_firstname']=$row['first_name'];
$_SESSION['pharmacist_lastname']=$row['last_name'];
$_SESSION['pharmacist_name']=$row['pharmacy_name'];


	


		header("location: pharmacist.php");
	}else {
		$error = "<div ><h3 class='alert-danger' >Your Login Name or Password is invalid</h3></div>";
	}
}








?>


<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link href="../css/mdb.min.css" rel="stylesheet">
	<link href="../css/googlestylesheet.css" rel="stylesheet">


	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="../css/style2.css">

	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">





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

	<nav class="navbar navbar-default alert-success navbar-fixed-top">
		<div class="container">
			<div class="col-md-12">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="../img/ezlogo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="../index.php">Home</a></li>
						<li class=""><a href="../services.php">Services</a></li>
						<li class=""><a href="../about.php">About</a></li>
						<li class=""><a href="../all_doctors.php">Doctors</a></li>




						<div class="dropdown navbar-left hidden-md hidden-lg">
							<div style="color: white;padding-top: 13px;" class="dropdown-toggle" type="button" data-toggle="dropdown">LOGIN / SIGN UP <br>
								<span class="caret"></span></div>
								<ul class="dropdown-menu">

									<li class="text-center alert-info well"><strong>Login as</strong></li>

									<li class="text-center btn btn-default btn-block"><a href="../login_patient.php" ><strong><i>Patient</i></strong></a></li>

									<li class="text-center btn btn-default btn-block"><a href="../login_doctor.php"><strong><i>Doctor</i></strong></a></li>

									<br>

									<li class="text-center alert-success well"><strong>Sign  up as</strong></li>

									<li class="text-center btn btn-default btn-block"><a href="../register_patient.php"><strong><i>Patient</i></strong></a></li>

									<li class="text-center btn btn-default btn-block"><a href="../register_doctor.php"><strong><i>Doctor</i></strong></a></li>

								</ul>
							</div>



							<div class="dropdown navbar-left hidden-xs hidden-sm">
								<li class="dropbtn">LOGIN / SIGN UP <b class="caret"></b></li>
								<div class="dropdown-content">

									<li class="text-center alert-info well"><strong>Login as</strong></li>

									<li class="text-center"><a href="../login_patient.php" ><strong><i>Patient</i></strong></a></li>
									<hr>
									<li class="text-center"><a href="../login_doctor.php"><strong><i>Doctor</i></strong></a></li>

									<br>

									<li class="text-center alert-success well"><strong>Sign  up as</strong></li>

									<li class="text-center"><a href="../register_patient.php"><strong><i>Patient</i></strong></a></li>
									<hr>
									<li class="text-center"><a href="../register_doctor.php"><strong><i>Doctor</i></strong></a></li>
									<br>
								</div>
							</div>




							<li class="active"><a href="../Pharmacy/index.php">Pharmacy</a></li>

							<li class=""><a href="../contact.php">Contact Us</a></li>


						</ul>
					</div>
				</div>
			</div>
		</nav>

		<div class="wrapper">
			<div class="container">
				<h1 class="animated fadeInUp" style="color: white; ">Pharmacy</h1>


				<form action="" method="post" class="form"  autocomplete="on">
					<input type="text" placeholder="Username" name="username" required>
					<input type="password" placeholder="Password" name="password"  required>
					
					<button name="submit" style="color: black;" type="submit">Login</button>
					<br>
					<?php echo @$error; ?>

					<div>


						<br>
						<br>
						<br>




					</form>


					<div class="text-right"><a href="../patient.php" class="btn btn-danger">Are you a User? Click here</a></div>

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
			<script src="../js/jquery.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script type="text/javascript" src="../js/mdb.min.js"></script>

	</body>
	</html>
