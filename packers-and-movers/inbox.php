<?php include("connection.php");
@include("session.php"); ?>
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



	
	<h1>Inbox Messages</h1>
	<div class="container">

		<div class="form-group row">
			<div class="container">

				<table  class="table" border="2">
					<tr>
						<th class='bg-primary text-center'>Time Posted:</th>

						<th class='bg-primary text-center'>Query Description:</th>
						<th class='bg-primary text-center'>Reply</th>
					</tr>
					<?php 
					$id=$_SESSION['id'];
					$result=mysqli_query($con,"select * from queries WHERE uId='$id' ORDER BY qdate ASC");





					while($row=$data = mysqli_fetch_assoc($result)){
						;
						echo "	
						<tr>
						<td class='text-center'> ".$row['qdate']."</td>
						<td class='text-center'> ".$row['query']."</td>";

						$ourqid=$row['qId'];
						$result2=mysqli_query($con,"select message from inbox WHERE qId='$ourqid'");

						while($row2 = mysqli_fetch_assoc($result2)){
							
							
							echo "<td class='text-center'>".$row2['message']."</td>";
							
						}	

						echo "</tr>";

					}
					?>




				</table> 
			</div>


		</div>






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

