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
					if(count($_GET)>0){

						$query_main=(int)$_GET['query'];
						$result="select uId,query from queries where qId='$query_main';";

						$runner=mysqli_query($con,$result);


						while ($row = $runner->fetch_assoc()) {
							$value=(int)$row['uId'];
							$querymessage=$row['query'];
						}


						$result2=mysqli_query($con,"select * from user where uId='$value';");

						while ($row2 = $result2->fetch_assoc()) {
							$name=$row2['uName'];
							$user=$row2['uUsername'];
							$phone=$row2['phone'];
							$time=$row2['uDate'];
							$id=$row2['uId'];

						}
}

					?>



					<div class="form-group row">
						<form action="query_replied_complete.php" method="post">

							<table  class="table">

								<tr class="">
									<th>Query Posted by:</th>
									<td><input type="text" class="form-control text-center" name="name" value="<?php echo $name; ?>" required readonly></td>
								</tr>

								<tr class="">
									<th>Username</th>
									<td><input type="text" class="form-control text-center" name="user" value="<?php echo $user; ?>" required readonly></td>
									<input type="hidden"  name="ouruid" value="<?php echo $id; ?>">
									<input type="hidden"  name="ourqid" value="<?php echo $query_main; ?>">
								</tr>



								<tr class="">
									<th>Phone number</th>
									<td><input type="text" class="form-control text-center"  value="<?php echo $phone; ?>" required readonly></td>
								</tr>

								<tr class="">
									<th>Time Posted</th>
									<td><input type="text" class="form-control text-center"  value="<?php echo $time; ?>" required readonly></td>
								</tr>


<tr class="">
									<th>Query Message</th>
									<td><input type="text" class="form-control text-center"  value="<?php echo $querymessage; ?>" required readonly></td>
									
								</tr>
								<tr >
									<th class="black">Reply</th>
									<td><input type="text" class="form-control text-center" name="reply" name="reply"  required> </td>
								</tr>






							</table> 

							<input type="submit" value="Submit" class="btn btn-block btn-info">
						</form>
					</div>

					<div>
						<a href="query_admin.php"><button class="btn btn-block btn-info">Click to go back to pending queries page</button></a>
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



				</body>
				</html>

