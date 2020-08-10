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


						<li class="dropdown bg-info">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login / Sign up <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="login_patient.php">Login</a></li>
								<li class="divider"></li>
								<li class="active"><a href="register_patient.php">Sign Up</a></li>
							</ul>
						</li>



						<li class=""><a href="pharmacy.php">Pharmacy</a></li>
						<li class=""><a href="contact.php">Contact Us</a></li>


					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="wrapper">
		<div class="container">
			<h1>Registeration Complete</h1>

			
		<?php  


		if(count($_POST)>0){

			$Name=$_POST['Name'];
			$Username=$_POST['Username'];
			$password=$_POST['Password'];
			$email=$_POST['Email'];
			$pass=md5($password);






			$query="INSERT INTO `patients`(`fullName`, `email`, `username`, `password`) VALUES ('$Name','$email','$Username','$pass')";


			$runner=mysqli_query($con,$query);

			if($runner){
				echo "<br>";
				echo "<div class='text-center btn-success'>Patient Registeration Complete</div>";

				echo "<a href='contact.php'>Contact Us</a>";

				echo "<meta http-equiv='refresh' content='2;url=login_patient'>";
				
						}
			else{
				echo "<div class='text-center btn-danger'>Error! An account with the same user name already exists</div>";
			}


		}
		else{
			echo "<div class='text-center btn-danger'>Wrong Code</div>";
		}

		?>
		
			
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
