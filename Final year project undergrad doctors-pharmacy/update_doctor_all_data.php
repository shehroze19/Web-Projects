<?php 
include('connection.php');

@include('session_doctor.php');

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
							if(count($_POST)>0){
								
						

										$address=$_POST['address'];
								$docFees=$_POST['fees'];
								$contactno=$_POST['number'];
								$docEmail=$_POST['email'];
								$area=$_POST['city'];
								$timeFrom=$_POST['timefrom'];
								$timeTo=$_POST['timeto'];
								$workingDays=$_POST['days'];
								$clinic=$_POST['clinic'];
				
				$days="";	

foreach ($workingDays as $item) {
    $days=$days." ".$item;
}


							$user=$_SESSION['username'];


$query="UPDATE `doctors` SET `address`='$address',`docFees`='$docFees',`contactno`='$contactno',`docEmail`='$docEmail',`area`='$area',`timeFrom`='$timeFrom',`timeTo`='$timeTo',`workingDays`='$days',`updatedInfo`='yes',`clinic`='$clinic' WHERE  `username`='$user'";


									$runner=mysqli_query($con,$query);

									if($runner){

										echo "<div class='text-center btn btn-success btn-block'>Succcesfully Updated the values</div>";
										echo "<a href='doctor_all_details.php'><div class='text-center btn btn-info btn-block'>Click Here to go back</div></a>";
									}else{

										echo "<div class='text-center btn btn-danger'>Error while updating values please try again</div>";
										echo "<a href='doctor_all_details.php'><div class='text-center btn btn-info btn-block'>Click Here to go back</div></a>";
										

									}

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
