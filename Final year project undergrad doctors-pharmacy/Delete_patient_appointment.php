<?php
include('connection.php');

@include('session.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Shehroze" content="">



	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	



</head>

<body style="background-color: black;">

	

<div  class="container">
	
<?php
$id=$_GET['id'];

$query2="DELETE FROM `appointment` WHERE `id`='$id'  ";
$result=mysqli_query($con,$query2);

if($result){
	echo "<div class='btn btn-info btn-block text-center'>Deleted</div>";
}
else{
	echo "Error";
}

?>


<div class="btn btn-block btn-success"><a href="patient_all_appointments.php">Go Back</a></div>

</div>

    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
