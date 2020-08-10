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
		$reported_by=$_POST['reported_by'];
		$location=$_POST['location'];
		$reason=$_POST['reason'];
		$action_taken=$_POST['action_taken'];
		$Username=$_POST['Username'];
		$reported_to=$_POST['reported_to'];
		$date=$_POST['date'];
		$time_in=$_POST['time_in'];
		$time_outage=$_POST['time_outage'];
		$equipment_type=$_POST['equipment_type'];

		$original_date=$_POST['original_date'];
		$original_time=$_POST['original_time'];
		$pending=1;
		$comments="";










		$query="INSERT INTO `incidental_log_sheet_noc_dc_pr`(`Username`, `report_by`,`date`, `time`, `reported_by`, `reported_to`, `equipment_type`, `reason`, `action_taken`, `outage_time`, `location`,`original_date`, `original_time`, `comments`, `pending`) VALUES  ('$Username','$report_by','$date','$time_in','$reported_by','$reported_to','$equipment_type','$reason','$action_taken','$time_outage','$location','$original_date','$original_time','$comments','$pending')";


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
