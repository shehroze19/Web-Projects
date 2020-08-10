<?php 
include("connection.php");


session_start();

if(isset($_SESSION['admin_Username'])){

	$sessionuser=$_SESSION['admin_Username'];
	$query="SELECT aUsername FROM admin where aUsername='$sessionuser'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);
	if($count == 1) {
		
		header("location: welcome_admin.php#here");
	}

}

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

	$myusername = mysqli_real_escape_string($con,$_POST['username']);
	$mypass = mysqli_real_escape_string($con,$_POST['password']); 
	$mypassword=$mypass;

	$query="SELECT * FROM `admin` where aUsername='$myusername' AND aPassword='$mypassword'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) {




		$_SESSION['admin_Username'] = $myusername;
		$_SESSION['admin_id']=$row['uId'];
		$_SESSION['admin_Name']=$row['uName'];

		




		header("location: welcome_admin.php");
	}else {
		$msg = "<br><br><div class='btn-danger'>Your Login Name or Password is invalid</div>";

	}
}


?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prime Packers & Movers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Prime Packers and Movers" />
	<meta name="keywords" content="prime,packers,movers,transportation" />

	

	<link href="fonts/mainfont.css" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->

<style type="text/css">

@media (max-width: 401px) {
	#news{
		height: 100px !important;
		color: green;
		font-size: 12px;

	}

	#intro{
		font-size: 15px;
	}

	#details{
		display: none;
	}

}

body.modal-open div.modal-backdrop { 
	z-index: 10; 
}
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: 	#508879; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, ##5EBEDB, #8DC26F);
  background: -moz-linear-gradient(right, ##5EBEDB, #8DC26F);
  background: -o-linear-gradient(right, ##5EBEDB, #8DC26F);
  background: linear-gradient(to left, ##5EBEDB, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

</style>


</head>
<body>



	
	<div id="page">


		<nav class="gtco-nav" role="navigation">
			<div>
				
				<div class="row">
					<div class="col-sm-12 col-xs-12">

						<div class="row">
							
							<div class="col-sm-12">
								
								<div class="text-center"><a href="index.php"><img src="images/logo1.jpg" ></a></div>

							</div>
				
						</div>




					</div>
					<div>
					</div>
					<br><br><br><br><br>

																	<div class="col-lg-12 text-center  menu-1">

						<ul>
							<li ><a href="index.php">Home  |</a></li>

						</li>

						<li><a href="aboutus.php">About Us  |</a></li>

					</li>

					<li ><a href="mission.php">Mission  |</a></li>

				</li>

				<li><a href="services.php">Services  |</a></li>

			</li>

			
			<li ><a href="custom.php">Custom Guide  |</a></li>

		</li>

		<li  class="active has-dropdown">
			<a  href="#">Login/Signup</a>
			<ul class="dropdown">
				<li><a href="login.php" >Login</a></li>
				<hr>
				<li><a href="register.php">Sign Up</a></li>




			</ul>
		</div>
	</div>
<br>
<div class="text-center"><?php include("contactus.php"); ?></div>
</div>
</nav>




<div id="here"  class="login-page">
  <div class="form">
    
    <h2>Admin Login</h2>
    <form action="#here"   method="post" class="login-form">
      <input type="text" class="text-center" placeholder="username" name="username" required />
      <input type="password" class="text-center" placeholder="password" name="password" required />
      <button type="submit">login</button>
      <?php echo @$msg; ?>
      <p class="message">Not registered as a user? <a href="register.php">Create an account</a></p>
      <p class="message">Not an Admin? <a href="register.php">Login as a User</a></p>
    </form>
  </div>
</div>

														

															<br><hr class="btn-info">




																<div class="gototop js-top">
																	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
																</div>

																<!-- jQuery -->
																<script src="js/jquery.min.js"></script>
																<!-- jQuery Easing -->
																<script src="js/jquery.easing.1.3.js"></script>
																<!-- Bootstrap -->
																<script src="js/bootstrap.min.js"></script>
																<!-- Waypoints -->
																<script src="js/jquery.waypoints.min.js"></script>
																<!-- Carousel -->
																<script src="js/owl.carousel.min.js"></script>
																<!-- Magnific Popup -->
																<script src="js/jquery.magnific-popup.min.js"></script>
																<script src="js/magnific-popup-options.js"></script>
																<!-- Main -->
																<script src="js/main.js"></script>


																<div id="footer">
																	<div class="container">
																		<p class="text-center alert-info">Copyright © by Prime Packers & Movers.	All rights reserved.
																		</p>
																	</div>
																</div>
															</body>
															</html>

