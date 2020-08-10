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

	<div class="container">
		<div class="row">
			<div class="banner-info">

				<div class="banner-text text-center">
					<?php 
					if(count($_POST)>0){

						$name=$_POST['name'];
						$phone=$_POST['phone'];
						$username = $_POST['username'];
						$password = $_POST['password'];





						$user = $_SESSION['admin_Username'];

						$query="INSERT INTO `deliverer`(`dName`,`dUsername`,`dPassword`,`phone`) VALUES ('$name','$username','$password','$phone')";


						$runner=mysqli_query($con,$query);

						if($runner){
							echo "<div class='btn btn-block alert-success'>Deliverer added</div>";
							echo "<a href='addDeliverer.php'><div class='btn btn-block alert-info'>Click here to go back</div></a>";


						}









				else{
					echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";


				}

				}




				?>






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

