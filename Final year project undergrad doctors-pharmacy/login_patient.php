<?php 
include("connection.php");


session_start();

if(isset($_SESSION['Username'])){

	$sessionuser=$_SESSION['Username'];
	$query="SELECT username FROM patients where Username='$sessionuser'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);
	if($count == 1) {
		
		header("location: patient.php");
	}

}

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

	$myusername = mysqli_real_escape_string($con,$_POST['username']);
	$mypass = mysqli_real_escape_string($con,$_POST['password']); 
	$mypassword=md5($mypass);

	$query="SELECT * FROM `patients` where Username='$myusername' AND Password='$mypassword'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) {




		$_SESSION['Username'] = $myusername;
		$_SESSION['Name']=$row['fullName'];

		$name=$row['Name'];
		
$ip=$_SERVER['REMOTE_ADDR'];
mysqli_query($con,"insert into patientslogstats(username,userip) values('$myusername','$ip')");





		header("location: patient.php");
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
						<li><a href="index.php">Home</a></li>
						<li class=""><a href="services.php">Services</a></li>
						<li class=""><a href="about.php">About</a></li>
						<li class=""><a href="all_doctors.php">Doctors</a></li>


						<li class="dropdown  btn-info">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Login / Sign up <b class="caret"></b></a>
							<ul class="text-center dropdown-menu">
								<li class="btn-block active"><a href="login_patient.php" style="color: black;">Login</a></li>

								<li class="btn-block"><a href="login_admin.php" style="color: black;">Login as Admin</a></li>

								<li class="btn-block" ><a href="register_patient.php" style="color: black;">Sign Up</a></li>
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
			<h1>Login as Patient</h1>

			<form action="" method="post" class="form"  autocomplete="on">
				<input type="text" placeholder="Username" name="username" required>
				<input type="password" placeholder="Password" name="password"  required>
				<button type="submit">Login</button>
				<br>
				<?php echo @$error; ?>

				<div>


					<br>
					<br>
					<br>

					


				</form>

				
				<div class="text-right"><a href="login_doctor.php" class="btn btn-danger">Log in as Doctor</a></div>

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
