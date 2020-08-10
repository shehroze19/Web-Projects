<?php
include('../connection.php');
include('session_pharmacy.php');


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


	<title>Logged in by <?php echo $_SESSION['pharmacist_firstname']; echo " ".$_SESSION['pharmacist_lastname']; ?></title>

	<!-- Bootstrap core CSS -->
	
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<!-- Custom styles for this template -->

	<link href="../css/welcome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
					<a class="navbar-brand" href="#"><img src="../img/ezlogo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li ><div class="well-sm btn-info" style="color: white;">Welcome <strong> <?php echo $_SESSION['pharmacist_firstname']; ?></strong></div></li>
						<li><a href="../index.php">Home</a></li>
						<li class=""><a href="../services.php">Services</a></li>
						<li class=""><a href="../about.php">About</a></li>
						<li class=""><a href="../all_doctors.php">Doctors</a></li>






						<div class="dropdown navbar hidden-md hidden-lg">
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



							<div class="dropdown navbar hidden-xs hidden-sm">
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


							<li class="btn-danger"><a href="logout.php">Logout</a></li>

							<li class=""><a href="../contact.php">Contact Us</a></li>


						</ul>
					</div>
				</div>
			</div>
		</nav>
			

	
	<div class="container">







		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">

					<li><a href="pharmacy_account_details.php" target="iframe_go"><span>View Details</span></a></li>









						<li class='dropdown'>
							<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Inventory
								<span class='caret'></span></a>
								<ul class='dropdown-menu'>

									<li><a href='Inventory.php' target='iframe_go'>View Inventory</a></li>
									<li><a href='add_medicine.php' target='iframe_go'>Add Medicines</a></li>

								</ul>
							</li>


									<li><a  target='iframe_go'>Delivery</a></li>




						<li class='dropdown'>
							<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Check
								<span class='caret'></span></a>
								<ul class='dropdown-menu'>

									<li><a  target='iframe_go'>Invoice</a></li>
									<li><a target='iframe_go'>Prescriptions</a></li>

								</ul>
							</li>



							























						</ul>
					</div>
				</nav>



				<iframe name="iframe_go" src="../slider2.php"   onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;"></iframe>




			</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src='../js/bootstrap.min.js'></script>


</body>
</html>
