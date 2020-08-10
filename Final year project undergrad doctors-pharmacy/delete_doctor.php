<?php 
include('connection.php');


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
$id=$_GET['id'];


$query4="SELECT `username` FROM `doctors` WHERE `id` = '$id' ";
$result2=mysqli_query($con,$query4);

$array = mysqli_fetch_assoc($result2);

$doctorUsername = $array['username'];


$query2="DELETE FROM `doctors` WHERE `id`='$id'  ";
$result=mysqli_query($con,$query2);

$query3="DELETE FROM `doctors_qualification` WHERE `doctor_uname` = '$doctorUsername' ";
$result1=mysqli_query($con,$query3);

if($result && $result1){
	echo "<div class='btn btn-info btn-block text-center'>Deleted</div>";
}
else{
	echo "Error";
}

?>

						</div></div></div></div></div>
								</section>




								<script src="js/jquery.min.js"></script>
								<script src="js/bootstrap.min.js"></script>
								<script src="js/custom.js"></script>

							</body>

							</html>
