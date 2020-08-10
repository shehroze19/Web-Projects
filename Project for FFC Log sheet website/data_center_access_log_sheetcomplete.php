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
	<link href="css/logsheets.css" rel="stylesheet">



	<!-- Custom styles for this template -->




</head>

<body>





	
	<div class="container-fluid">
		<?php 
		$name=$_POST['name'];
		$report_by=$_POST['report_by'];
		$accompanied_by=$_POST['accompanied_by'];
		$reason=$_POST['reason'];
		$authorized_by=$_POST['authorized_by'];
		$Username=$_POST['Username'];
		$department=$_POST['department'];
		$date=$_POST['date'];
		$time_in=$_POST['time_in'];
		$time_out=$_POST['time_out'];
		$review=$_POST['review'];

		$original_date=$_POST['original_date'];
		$original_time=$_POST['original_time'];
		$pending=1;
		$comments="";









		$query="INSERT INTO `data_center_access_log_sheet` (`Username`, `report_by`, `date`, `time_in`, `name`, `department_section`,`reason`,`time_out`, `accompanied_by`, `authorized_by`, `reviewed_by`,`original_date`, `original_time`, `comments`, `pending`) VALUES ('$Username','$report_by','$date','$time_in','$name','$department','$reason','$time_out','$accompanied_by','$authorized_by','$review','$original_date','$original_time','$comments','$pending')";



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
