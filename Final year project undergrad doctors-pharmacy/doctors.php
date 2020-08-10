<?php
include('connection.php');

include('session_doctor.php');

?>
<!DOCTYPE html>

<?php

$sessionuser=$_SESSION['username'];  
$query="SELECT * FROM `doctors` where username='$sessionuser' ";
					$result=mysqli_query($con,$query);

	$row = mysqli_fetch_array($result);
	$ourvalue=$row['updatedInfo'];
	 ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze Aamer,Abbas Afzal" content="">


	<title>Welcome  <?php echo $_SESSION['docName']; ?></title>

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
								<li ><div class="well-sm btn-info" style="color: white;">Welcome <strong> <?php echo $_SESSION['username']; ?></strong><div></li>
								<li ><a  href="index.php">Home</a></li>
								<li class=""><a href="services.php">Services</a></li>
								<li class=""><a href="about.php">About</a></li>
								<li class=""><a href="all_doctors.php">Doctors</a></li>

<li><a class="well-sm btn-danger" href="logout_doctor" ><span>Logout</span></a></li>


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

					<li><a href="doctor_account_details.php" target="iframe_go"><span>View Details</span></a></li>





								<li><a href='doctor_all_appointments.php' target='iframe_go'>Appointments</a></li>





						<li class='dropdown'>
							<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Check
								<span class='caret'></span></a>
								<ul class='dropdown-menu'>

									<li><a href='doctor_all_medicalrecords.php' target='iframe_go'>Medical Records</a></li>
									<li><a href='doctor_login_activity.php' target='iframe_go'>Login Activity</a></li>
									
 
								</ul>
							</li>


<li><a href='doctor_all_details.php' class='<?php if($ourvalue=='' || $ourvalue==null ){echo "btn btn-danger";} ?>' target='iframe_go' style='color:white;'>Complete Details</a></li>
							























						</ul>
					</div>
				</nav>



				<iframe name="iframe_go"  <?php 



				 if($ourvalue=='' || $ourvalue==null ){echo " src=\"doctor_all_details.php\" ";} ?> 



				 onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;"></iframe>




			</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>


</body>
</html>
