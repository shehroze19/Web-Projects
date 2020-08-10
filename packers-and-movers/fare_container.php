<?php include("connection.php");
 @include("session.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fare</title>

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
html {
	height: 100%
}
body {
	height: 100%;
	margin: 0px;
	padding: 0px;
	font-family:tahoma;
	font-size:8pt;
}
#total {
	font-size:large;
	text-align:center;
	font-family:Georgia, “Times New Roman”, Times, serif;
	color:#990000;
	margin:5px 0 10px 0;
	font-size:12px;
	width:374px;
}
input {
	margin:5px 0px;
	font-family:tahoma;
	font-size:8pt;
}
</style>

<body>

	<?php 
								if(count($_POST)>0){
									$distance=$_POST['distance'];
									
									
									$from=$_POST['from'];
									$to=$_POST['to'];
									$totalsize=$_POST['totalsize'];

print_r($_POST);

								}


								?>




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

</body>
</html>