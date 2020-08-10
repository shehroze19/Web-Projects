<?php 
include('connection.php');

@include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EzHealth</title>
	<meta name="description" content="Shehroze Aamer,Abbas Afzal">




	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body class="bg-info" style="color:black" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
						</div>
						<div class="banner-text text-center">


							<?php 

							$id = $_POST["id"];

							$query = "SELECT * FROM `appointment` WHERE `id`= '$id' ";
							mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

							$runner = mysqli_query($con,$query);
									
									$row=mysqli_fetch_assoc($runner);
									$doctor_uname = $row['doctor_uname'];

									$user=$_SESSION['Username'];
									$rating=$_POST['rating'];
									$review=$_POST['review'];

						

								$query1 = "INSERT INTO `feedback`(`doc_uname`, `patient_uname`, `rating`, `review`) VALUES ('$doctor_uname','$user','$rating','$review')";

								$runner1 = mysqli_query($con,$query1);
								mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

								if($runner1){

										echo "<div class='btn btn-block alert-success'>Feedback Completed</div>";
										echo "<meta http-equiv='refresh' content='4;url=patient_appointment'>";
								}

								else{

									echo "<div class='btn btn-block alert-success'>Error</div>";
								}
								
								



							?>




						</div>


						<div class="overlay-detail text-center">
							<a href="#"><i class="fa fa-angle-up"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>
