<?php 
include("connection.php");
@include("session_admin.php");


@session_start();



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

		
		 <!-- <li  class="active has-dropdown">
			<a  href="#">Login/Signup</a>
			<ul class="dropdown">
				<li><a href="login.php" >Login</a></li>
				<hr>
				<li><a href="register.php">Sign Up</a></li> -->




			</ul>
		</div>
	</div>
	
</div>
<br><br>
</nav>




<div id="here" class="container">



	<nav class="navbar navbar-default alert-info ">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li class="alert-danger"><a href="#"><span>Welcome <?php echo $_SESSION['admin_Username']."!"; ?></span></a></li>

				<li><a href="details_admin.php" target="iframe_go"><span>View Account Details</span></a></li>










				<li class='dropdown'>
					<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Queries
						<span class='caret'></span></a>
						<ul class='dropdown-menu'>

<?php 





$query="SELECT * FROM `queries`";
$result=mysqli_query($con,$query);


$count = mysqli_num_rows($result);




$query2="SELECT * FROM `queries` where `replied`=1 ";
$result2=mysqli_query($con,$query2);


$count2 = mysqli_num_rows($result2);




$query3="SELECT * FROM `queries` where `replied`=0 ";
$result3=mysqli_query($con,$query3);


$count3 = mysqli_num_rows($result3);




$query4="SELECT * FROM `booking` ";
$result4=mysqli_query($con,$query4);


$count4 = mysqli_num_rows($result4);



	




 ?>
							<li class="text-center"> <?php echo "<span class='badge'>".$count."</span>"; ?> All Queries</li>

							<li class="text-center"><a href='query_admin_repl.php' target='iframe_go'><?php echo "<span class='badge'>".$count2."</span>"; ?> Queries already replied</a></li>

							<li><a href='query_admin.php' target='iframe_go'><?php echo "<span class='badge'>".$count3."</span>"; ?> View Pending Queries</a></li>


						

						</ul>
					</li>









				<li class='dropdown'>
					<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Notifications
						<span class='caret'></span></a>
						<ul class='dropdown-menu'>

<?php 





$queryz="SELECT * FROM `notification`";
$resultz=mysqli_query($con,$queryz);


$countz = mysqli_num_rows($resultz);






	




 ?>
							<li class="text-center"> <?php echo "<span class='badge'>".$countz."</span>"; ?> All Notifications</li>

							<li class="text-center"><a href='notification_post.php' target='iframe_go'>Post a new Notification</a></li>

							<li><a href='notification.php' target='iframe_go'>View Notifications</a></li>


						

						</ul>
					</li>














	<li><a href='reporting.php' target='iframe_go'><?php echo "<span class='badge'>".$count4."</span>"; ?> Reporting</a></li>

	<li><a href='accounts.php' target='iframe_go'>View Accounts</a></li>

					<li><a href="logout.php" ><span>Logout</span></a></li>



















				</ul>
			</div>
		</nav>

	<iframe name="iframe_go"  onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;"></iframe>




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

