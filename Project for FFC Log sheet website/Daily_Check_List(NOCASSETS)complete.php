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
		$EPSON_PROJ=$_POST['EPSON_PROJ'];
		$SANYO_PROJ=$_POST['SANYO_PROJ'];
		$DELL_LATITUDEE5530=$_POST['DELL_LATITUDEE5530'];
		$DELL_LATITUDEE5540=$_POST['DELL_LATITUDEE5540'];
		$DELL_VASTRO=$_POST['DELL_VASTRO'];
		$date=$_POST['date'];
		$Meeting_room=$_POST['Meeting_room'];
		$new_IPAD=$_POST['new_IPAD'];
		$Duty_Tech=$_POST['Duty_Tech'];
		$Username=$_POST['Username'];
		$original_date=$_POST['original_date'];
		$original_time=$_POST['original_time'];
		$pending=1;
		$comments="";







		$query="INSERT INTO `daily_check_list`(`Username`, `report_by`,`Date`, `EPSON_PROJ(VGA_Powercabel)`, `SANYO_PROJ(VGA_Powercabel)`, `DELL_LATITUDE_E5530(Corei7_Charger)`, `DELL_LATITUDE_E5540(Corei5_Charger)`, `DELL_VOSTRO(Corei3_Charger)`, `Meeting_Room_IPAD`, `New_IPAD`, `Duty_Tech`, `original_date`, `original_time`, `comments`, `pending`) VALUES ('$Username','$report_by','$date','$EPSON_PROJ','$SANYO_PROJ','$DELL_LATITUDEE5530','$DELL_LATITUDEE5540','$DELL_VASTRO','$Meeting_room','$new_IPAD','$Duty_Tech','$original_date','$original_time','$comments','$pending')";


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
