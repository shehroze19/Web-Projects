<?php
@include('session.php');
if($_SESSION['user_type']!=="manager"){
	header("location:login.php");
}

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




</head>

<body class="jumbotron">





	
		<div class="container-fluid">
			<?php 

			$Electricity=$_POST['Electricity'];
			$by=$_POST['by'];
			$to=$_POST['to'];
			$date_set=$_POST['date_set'];
			$time_from=$_POST['time_from'];
			$time_to=$_POST['time_to'];
			$original_date=$_POST['original_date'];
			$user=$_POST['user'];
			$original_time=$_POST['original_time'];
			$id=(int)$_POST['id'];
			$comment=$_POST['comment'];










			$query="UPDATE `electricity_reports` SET `State`='$Electricity', `Username`='$user', `reported_by`='$by', 
			`reported_to`='$to', `original_time_from`='$original_time', `time_from`='$time_from', `time_to`='$time_to',
			 `original_date`='$original_date', `date`='$date_set', `comments`='$comment'  WHERE '$id'=id ";
			$runner=mysqli_query($con,$query);


			if($runner){
				echo "<div class='btn btn-block alert-success'>Record Successfully Update</div>";
			}
			else{
				echo "<div class='btn btn-block alert-danger'>Error While Updating Record</div>";


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
