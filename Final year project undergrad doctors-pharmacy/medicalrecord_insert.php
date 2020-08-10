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
							if(count($_POST)>0){
							
								$r_name=$_POST['r_name'];
								$description=$_POST['description'];
								$o_details=$_POST['o_details'];

							

							$user=$_SESSION['Username'];


									$key = 'SuperSecretKey12';

									$encryptedDescription = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $description, MCRYPT_MODE_ECB);
									$encryptedODetails = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $o_details, MCRYPT_MODE_ECB);


							


									$query="INSERT INTO `patient_medical_record`(`patient_uname`, `medical_name`, `medical_description`, `other_details`) VALUES 
									('$user','$r_name','$encryptedDescription','$encryptedODetails')";


									$runner=mysqli_query($con,$query);


									if($runner){
										echo "<div class='btn btn-block alert-success'>Medical Record Inserted</div>";
									}
									else{
										echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";
										echo "<a href='patient_medicalrecord.php'>'<div class='btn btn-block alert-info'>Click here to go back</div></a>";


									}

								
								
							}
							else{
									echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";

									echo "<a href='patient_account_details.php'>'<div class='btn btn-block alert-info'>Click here to go back</div></a>";

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
