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
	<link rel="stylesheet" href="css/bootstrap.css" />


	<!-- Custom styles for this template -->

	<link href="css/logsheets.css" rel="stylesheet">



</head>

<body >





	
	<div class="container-fluid">
		<?php 

		$report_by=$_POST['report_by'];

		$date=$_POST['date'];
		$ticket_id=(int)$_POST['ticket_id'];
		$department=$_POST['department'];
		$Equipment_type=$_POST['Equipment_type'];
		$installed_by=$_POST['installed_by'];
		$handed_over_to=$_POST['handed_over_to'];
		$department=$_POST['department'];
		$collected_by=$_POST['collected_by'];
		$time_in=$_POST['time_in'];
		$time_out=$_POST['time_out'];
		$observation_issues=$_POST['observation_issues'];
		$Username=$_POST['Username'];
		
		$original_date=$_POST['original_date'];
		$original_time=$_POST['original_time'];
		$pending=1;
		$comments="";









		$query="INSERT INTO `assets_tracking_sheet`(`Username`, `report_by`, `DATE`, `TICKET_ID`, `DEPARTMENT`, `EQUIPMENT_TYPE`, `TIME_OUT`, `INSTALLED_BY`, `HANDED_OVER_TO`, `TIME_IN`, `COLLECTED_BY`, `OBSERVATION/ISSUES`
		,`original_date`, `original_time`, `comments`, `pending`) VALUES ('$Username','$report_by','$date','$ticket_id','$department','$Equipment_type','$time_out','$installed_by','$handed_over_to','$time_in','$collected_by','$observation_issues','$original_date','$original_time','$comments','$pending')";


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
    
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>

</body>
</html>
