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
							
							<div class="form-group row">
								<div class="container">

									<table  class="table" border="2">
<tr>
											<th class='bg-primary text-center' >Time</th>
											<th class='bg-primary text-center' >Record Name</th>
											<th class='bg-primary text-center'>Record Description</th>
											<th class='bg-primary text-center'>Other Details</th>
											</tr>
										<?php 
										$Username=$_SESSION['Username'];

										$result=mysqli_query($con,"select * from patient_medical_record where patient_uname='$Username';");



										while($row=$data = mysqli_fetch_assoc($result)){

											$key = 'SuperSecretKey12';
											$description = $row['medical_description'];
											$other_details = $row['other_details'];
											$decryptedDescription = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $description, MCRYPT_MODE_ECB);
											$decryptedoDetails = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $other_details, MCRYPT_MODE_ECB);

											;
											echo "	
											<tr>
											<td class='text-center'> ".$row['postingDate']."</td>
											<td class='text-center'> ".$row['medical_name']."</td>
											<td class='text-center'> ".$decryptedDescription."</td>
											<td class='text-center'> ".$decryptedoDetails."</td>

											</tr>";

										}
										?>




									</table> 
								</div>


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
