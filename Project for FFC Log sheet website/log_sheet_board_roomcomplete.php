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
		$VC=$_POST['VC'];
		$Audio=$_POST['Audio'];
		$Screen=$_POST['Screen'];
		$Table=$_POST['Table'];
		$Activity=$_POST['Activity'];
		$Tested=$_POST['Tested'];
		$Verified=$_POST['Verified'];
		$Status=$_POST['Status'];
		$user=$_POST['user'];
		$date_set=$_POST['date_set'];
		$Projector=$_POST['Projector'];

		$original_date=$_POST['original_date'];
		$original_time=$_POST['original_time'];
		$pending=true;
		$comments="";







		$query="INSERT INTO `log_sheet_board_room_rao`(`Username`, `report_by`, `date`, `VC`, `AUDIO`, `PROJECTOR`, `SCREEN`, `TABLE_CABBY`, `ACTIVITY`, `TESTED_BY`, `VERIFIED_BY`, `STATUS`,`original_date`, `original_time`, `comments`, `pending`) VALUES  ('$user','$report_by','$date_set','$VC','$Audio','$Projector','$Screen','$Table','$Activity','$Tested','$Verified','$Status','$original_date','$original_time','$comments','$pending')";

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
