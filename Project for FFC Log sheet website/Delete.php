<?php
include("connection.php");
include("session.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Shehroze" content="">


	<title>Lab Task</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	



</head>

<body class="jumbotron">
<?php  
if($_SESSION['user_type']!="manager"){
      header("location:login.php");
   }

?>

	

<div class="container">
	
<?php
$id=$_GET['id'];

$query2="DELETE FROM electricity_reports WHERE '$id'=id  ";
$result=mysqli_query($con,$query2);

if($result){
	echo "<div class='btn btn-success form-control'>Record Deleted</div>";
}
else{
	echo "Error";
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
