<?php 
include("connection.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze" content="">


	<title>FFc</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	<!-- Custom styles for this template -->

<style>
	body{
		padding-top: 60px;
	}
</style>


</head>

<body>


<?php  include("navbar.php");  ?>

	<div class="container-fluid">


		<?php  

 $Name=$_POST['Name'];
 $Username=$_POST['Username'];
 $type=$_POST['type1'];
 $password=$_POST['Password'];
 $Email=$_POST['Email'];

 $pass=md5($password);





$query="INSERT INTO `accounts`(`Name`, `Username`, `password`, `email`,`Type`) VALUES ('$Name','$Username','$pass','$Email','$type')";

$runner=mysqli_query($con,$query);

if($runner){
	echo "Registeration Complete<br>";

	echo "Click ";
	echo "<a href='login.php'>Here to Log In</a> ";
}


		?>
	



	</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
