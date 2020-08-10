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


		$date=$_POST['date'];
		$time=$_POST['time'];
		$reported_by=$_POST['reported_by'];
		$reported_to=$_POST['reported_to'];
		$service_type=$_POST['service_type'];
		$reason=$_POST['reason'];
		$action=$_POST['action'];
		$out_time=$_POST['out_time'];
		
		
		$Username=$_POST['Username'];

		$original_date=$_POST['original_date'];
		$original_time=$_POST['original_time'];
		$pending=1;
		$comments="";
		









		$query="INSERT INTO `web_log_sheet`(`Username`, `DATE`, `TIME`, `reported_by`, `reported_to`, `service_type`, `reason`, `action_taken`, `outage_time`, `original_date`, `original_time`, `comments`, `pending`) VALUES ('$Username','$date','$time','$reported_by','$reported_to','$service_type','$reason','$action','$out_time','$original_date','$original_time','$comments','$pending');";
		


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
