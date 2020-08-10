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
								
								$fname=$_POST['fname'];
								$age=$_POST['age'];
								$gender=$_POST['gender'];
								$address=$_POST['address'];
								$city=$_POST['city'];

							$Username=$_SESSION['Username'];

	


									$user = $_SESSION['Username'];

									$query="UPDATE `patients` SET 
`fullName`='$fname',`age`='$age',`address`='$address',`city`='$city',`gender`='$gender'
									 where `username`='$user';";


									$runner=mysqli_query($con,$query);


									if($runner){
										echo "<div class='btn btn-block alert-success'>Personal Details Changed</div>";


if (isset($_POST['upload'])) {
	$target = "patient_images/".basename($_FILES['image']['name']);



	$image = $_FILES['image']['name'];



	$sql = "UPDATE  `patients` set `picture`='$image' where `username`='$user';";
	if($image!=null){
	mysqli_query($con, $sql);
}

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target) ) {
		echo "successfull";
		echo "<div class='btn-primary text-center'>Image Added</div><br><br><br>";
	}else{
		echo "Failed to upload image";
	}
}




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
