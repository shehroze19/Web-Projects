<?php
include('connection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze Aamer,Abbas Afzal" content="">


	<title>Logged in by <?php echo $_SESSION['Name']; ?></title>

	<!-- Bootstrap core CSS -->
	
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Custom styles for this template -->

	<link href="css/welcome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
								<li ><a  href="index.php">Home</a></li>
								<li class=""><a href="services.php">Services</a></li>
								<li class=""><a href="about.php">About</a></li>
								<li class=""><a href="all_doctors.php">Doctors</a></li>


								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged in <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="login_patient.php">Login</a></li>
										<li class="divider"></li>
										<li><a href="register_patient.php">Sign Up</a></li>
									</ul>
								</li>



								<li class=""><a href="comingsoon.php">Pharmacy</a></li>
								<li class=""><a href="contact.php">Contact Us</a></li>


							</ul>
						</div>
					</div>
				</div>
			</nav>
			

	
	<div class="container">







		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">


							<li><a href="accounts.php" target="iframe_go" ><span>Accounts</span></a></li>
							<li><a href="contact_view.php" target="iframe_go" ><span>Contact Messages</span></a></li>



							<li><a href="logout.php" ><span>Logout</span></a></li>



















						</ul>
					</div>
				</nav>



				<iframe name="iframe_go" src="slider2.php"   onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;"></iframe>




			</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>


</body>
</html>
