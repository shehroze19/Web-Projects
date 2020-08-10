<?php include("connection.php");
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



	
	<h1>All Bookings</h1>


	<a data-toggle="collapse" data-parent="#accordion" href="#collapse0">
		<div class="panel-heading btn btn-info btn-block">
			<h4 class="panel-title">
				
				<h3>Ordered</h3>
			</h4>
		</div>
		<div id="collapse0" class="panel-collapse"></a>
			<div class="panel-body">



				<div class="container-fluid">

					<table  class="table" border="2">
						<tr>
							<th class='bg-primary text-center' >Name</th>
							<th class='bg-primary text-center' >Address</th>
							<th class='bg-primary text-center'>Order Status:</th>
							<th class='bg-primary text-center'>Assessment</th>
							<th class='bg-primary text-center'>Date</th>
							<th class='bg-primary text-center'>To</th>
							<th class='bg-primary text-center'>From</th>
							<th class='bg-primary text-center'>Total Cost in RPS</th>
							<th class='bg-primary text-center'>truck26's used"</th>
							<th class='bg-primary text-center'>truck22's used"</th>
							<th class='bg-primary text-center'>truck16's used"</th>
							<th class='bg-primary text-center'>truck12 used"</th>
							<th class='bg-primary text-center'>Track Order</th>

							
						</tr>
						<?php 


						$id=$_SESSION['id'];

						$result="select * from booking where uId='$id' and orderStatus!='complete' order by `date` ASC";

						$runner=mysqli_query($con,$result);



						while($row= mysqli_fetch_assoc($runner)){

							$ouruid=$row['uId'];
							$result2=mysqli_query($con,"select * from user WHERE uId='$ouruid'");

							while($row2 = mysqli_fetch_assoc($result2)){

								echo "<tr><td class='text-center'> ".$row2['uName']."</td>";
								echo "<td class='text-center'> ".$row2['uAddress']."</td>";


							}	

							echo "	
							<td class='text-center'> ".$row['orderStatus']."</td>
							<td class='text-center'> ".$row['assessment']."</td>
							<td class='text-center'> ".$row['date']."</td>
							<td class='text-center'> ".$row['area']."</td>
							<td class='text-center'> ".$row['deliverTo']."</td>
							<td class='text-center'> ".$row['cost']."</td>
							
							<td class='text-center'> ".$row['truck26']."</td>
							<td class='text-center'> ".$row['truck22']."</td>
							<td class='text-center'> ".$row['truck16']."</td>
							<td class='text-center'> ".$row['truck12']."</td>
							<td class='text-center'><a href=''>track</a></td>"
							;

							echo "</tr>";

						}
						?>




					</table> 
				</div>




			</div>





		</div>









		<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
			<div class="panel-heading btn btn-info btn-block">
				<h4 class="panel-title">

					<h3>Completed</h3>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse"></a>
				<div class="panel-body">




						<table  class="table" border="2">
							<tr>
								<th class='bg-primary text-center' >Name</th>
								<th class='bg-primary text-center' >Address</th>
								<th class='bg-primary text-center'>Order Status:</th>
								<th class='bg-primary text-center'>Assessment</th>
								<th class='bg-primary text-center'>Date</th>
								<th class='bg-primary text-center'>To</th>
								<th class='bg-primary text-center'>From</th>
								<th class='bg-primary text-center'>Total Cost in RPS</th>
								<th class='bg-primary text-center'>truck26's used"</th>
								<th class='bg-primary text-center'>truck22's used"</th>
								<th class='bg-primary text-center'>truck16's used"</th>
								<th class='bg-primary text-center'>truck12 used"</th>

							</tr>
							<?php 




							$result="select * from booking where uId='$id' and orderStatus='complete' order by `date` ASC";

							$runner=mysqli_query($con,$result);



							while($row= mysqli_fetch_assoc($runner)){

								$ouruid=$row['uId'];
								$result2=mysqli_query($con,"select * from user WHERE uId='$ouruid'");

								while($row2 = mysqli_fetch_assoc($result2)){

									echo "<tr><td class='text-center'> ".$row2['uName']."</td>";
									echo "<td class='text-center'> ".$row2['uAddress']."</td>";


								}	

								echo "	
								<td class='text-center'> ".$row['orderStatus']."</td>
								<td class='text-center'> ".$row['assessment']."</td>
								<td class='text-center'> ".$row['date']."</td>
								<td class='text-center'> ".$row['area']."</td>
								<td class='text-center'> ".$row['deliverTo']."</td>
								<td class='text-center'> ".$row['cost']."</td>

								<td class='text-center'> ".$row['truck26']."</td>
								<td class='text-center'> ".$row['truck22']."</td>
								<td class='text-center'> ".$row['truck16']."</td>
								<td class='text-center'> ".$row['truck12']."</td>"
								;

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

