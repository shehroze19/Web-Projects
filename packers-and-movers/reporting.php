<?php include("connection.php");
@include("session_admin.php"); ?>
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



	
	<h1>Reporting</h1>
	<div class="container">

		<div class="form-group row">
			<div class="container">

				<table  class="table" border="2">
					<tr>
						<th class='bg-primary text-center' >User</th>
						<th class='bg-primary text-center'>Delivery id</th>
						<th class='bg-primary text-center'>Order Status:</th>
						<th class='bg-primary text-center'>Assessment</th>
						<th class='bg-primary text-center'>Date</th>
						<th class='bg-primary text-center'>truck26"</th>
						<th class='bg-primary text-center'>truck22"</th>
						<th class='bg-primary text-center'>truck16"</th>
						<th class='bg-primary text-center'>truck12"</th>
						
					</tr>
					<?php 




					$result="select * from booking";

					$runner=mysqli_query($con,$result);



					while($row=$data = mysqli_fetch_assoc($runner)){
						

						$ouruid=$row['uId'];
						$result2=mysqli_query($con,"select * from user WHERE uId='$ouruid'");

						while($row2=$data2 = mysqli_fetch_assoc($result2)){

							echo "<tr><td class='text-center'> ".$row2['uName']."</td>";
						}	

						echo "	
						
						<td class='text-center'> ".$row['dId']."</td>
						<td class='text-center'> ".$row['orderStatus']."</td>
						<td class='text-center'> ".$row['assessment']."</td>
						<td class='text-center'> ".$row['date']."</td>
						<td class='text-center'> ".$row['truck40']."</td>
						<td class='text-center'> ".$row['truck20']."</td>
						<td class='text-center'> ".$row['truckMazda']."</td>
						<td class='text-center'> ".$row['truckShezore']."</td>"
						;

						echo "</tr>";

					}
					?>




				</table> 
			</div>


		<div class="btn btn-block btn-success text-center">Most used driver :


<?php 
$query4="SELECT dId FROM `booking` GROUP BY `dId` ORDER BY COUNT(*) DESC
    LIMIT    1; ";


$result4=mysqli_query($con,$query4);


while ($row = $result4->fetch_assoc()) {
							$value=(int)$row['dId'];
							
						}




						$query5="SELECT * from deliverer where dId='$value'; ";


$result5=mysqli_query($con,$query5);


while ($row = $result5->fetch_assoc()) {
							echo $row['dName'];
							
						}




 ?>



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

