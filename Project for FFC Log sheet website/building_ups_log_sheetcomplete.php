<?php
@include('session.php');
include('connection.php');

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

	<link href="css/logsheets.css" rel="stylesheet">




</head>

<body>





	
	<div class="container-fluid">
		<?php 
		$report_by=$_POST['report_by'];
		$temp=$_POST['temp'];
		$temp_other=$_POST['temp_other'];
		$humid=$_POST['humid'];
		$ups=$_POST['ups'];
		$fcu=$_POST['fcu'];

		$date=$_POST['date'];
		$time=$_POST['time'];
		$split_ac=$_POST['split_ac'];
		$breaker=$_POST['breaker'];
		$battery=$_POST['battery'];
		$signature=$_POST['signature'];
		$observe=$_POST['observe'];
		$to=$_POST['to'];
		$Username=$_POST['Username'];


		$original_date=$_POST['original_date'];
		$original_time=$_POST['original_time'];
		$pending=1;
		$comments="";










		$query="INSERT INTO `building_ups_log_sheet`(`Username`, `report_by`,`date`, `time`, `temp_epi_device`, `temp_other_device`, `humidity`, `Ups_status`, `fcu`, `split_ac_unit_status`, `main_breaker`, `battery_status`, `signature`, `observation_issues`, `reported_to`,`original_date`, `original_time`, `comments`, `pending`) VALUES ('$Username','$report_by'
,'$date','$time','$temp','$temp_other','$humid','$ups','$fcu','$split_ac','$breaker','$battery','$signature','$observe','$to','$original_date','$original_time','$comments','$pending')";


		$runner=mysqli_query($con,$query);


		if($runner){
			echo "<div class='btn btn-block alert-success'>Record Successfully Inserted</div>";
		}
		else{
			echo "<div class='btn btn-block alert-danger'>Error While Inserting Record</div>";


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
