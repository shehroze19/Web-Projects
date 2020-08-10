<?php 
include("connection.php");
@include("session.php");

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

</style>


</head>
<body>



	
	<h1>Query Message</h1>
		<div class="container">
			<form action="query_complete.php" method="post">
				

				<div class="form-group">
					<label class="text-center" for ="description"> Message</label>
					<textarea  class="form-control" maxlength="254" name="message" placeholder="Enter Your Message" required></textarea>
				</div>
				<div>

					<button type="submit" class="btn btn-info btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
				</div>
				<br>
				<p>
					<div class="table-bordered text-center">
						Contact Person: Mr. Anwar Ali<br>
						Tel:      +92-51-2275319<br>
						Fax:    +92-51-2276818<br>
						Cell:    +92-300-9505652<br>
						E-mail: <a href="mailto:info@primepackersandmovers.com">info@primepackersandmovers.com </a> <br>
						Web:   <a href="http://www.primepackersandmovers.com" target="_blank">www.primepackersandmovers.com </a><br>

					</div><br>

					<div class="table-bordered text-center">
						<div class="alert-info">Address:</div> 2nd Floor, Umer Building, 76 West, Jinnah Avenue, Blue Area, Islamabad 44000<br>
						<div class="alert-info">Phone:</div> 0300 9505652
					</div><br>




					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13276.154706695228!2d73.0526608!3d33.7079481!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6e606206b0c7ffb!2sPrime+Packers+%26+Movers!5e0!3m2!1sen!2s!4v1509451409205" frameborder="0" style="border:0" allowfullscreen></iframe>

				</p>

			</div>
		</form>






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


	</body>
	</html>

