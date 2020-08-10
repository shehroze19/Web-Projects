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
		$date=$_POST['date'];
		$time_from=$_POST['time_from'];
		$time_to=$_POST['time_to'];
		$Username=$_POST['Username'];
		$ac_1=$_POST['ac_1'];
		$ac_2=$_POST['ac_2'];
		$ac_3=$_POST['ac_3'];
		$ac_4=$_POST['ac_4'];
		$ac_5=$_POST['ac_5'];
		$ac_6=$_POST['ac_6'];
		$ac_outof_order=$_POST['ac_outof_order'];
		$in_row_small_front_row=$_POST['in_row_small_front_row'];
		$in_row_small_back_row=$_POST['in_row_small_back_row'];
		$water_supply_in_row_small=$_POST['water_supply_in_row_small'];
		$chilled_water_temp_in_row_small=$_POST['chilled_water_temp_in_row_small'];

		$in_row_large_front_row=$_POST['in_row_large_front_row'];
		$in_row_large_back_row=$_POST['in_row_large_back_row'];
		$water_supply_in_row_large=$_POST['water_supply_in_row_large'];
		$chilled_water_temp_in_row_large=$_POST['chilled_water_temp_in_row_large'];

		$data_center_temp=$_POST['data_center_temp'];
		$data_center_temp_nexus=$_POST['data_center_temp_nexus'];
		$data_center_temp_hotile=$_POST['data_center_temp_hotile'];
		$data_center_temp_hotile=$_POST['data_center_temp_coldaile'];


		$humidity_front_site=$_POST['humidity_front_site'];
		$humidity_hot_oil_site=$_POST['humidity_hot_oil_site'];
		$humidity_back_site=$_POST['humidity_back_site'];

		$signature=$_POST['signature'];
		$problems=$_POST['problems'];

		$original_date=$_POST['original_date'];
		$original_time=$_POST['original_time'];
		

		$pending=true;
		$comments="";








		$query="INSERT INTO `dc_air_conditioning`(`Username`, `report_by`, `DATE`, `time_from`, `time_to`, `ac_1`, `ac_2`, `ac_3`, `ac_4`, `ac_5`, `ac_6`, `ac_out_of_order`, `in_row_small_temp_front_row`, `in_row_small_temp_back_row`, `in_row_small_water_supply_pump`, `in_row_small_chilled_water_temp`, `in_row_large_temp_front_row`, `in_row_large_temp_back_row`, `in_row_large_water_supply_pump`, `in_row_large_chilled_water_temp`, `data_center_temp`, `data_center_temp_nexus`, `data_center_temp_hot_ile`, `data_center_temp_coldaile`, `humidity_front_site`, `humidity_oil_site`, `humidity_back_site`, `signature`, `problem`, `original_date`, `original_time`, `comments`, `pending`) VALUES ('$Username','$report_by','$date','$time_from','$time_to','$ac_1','$ac_2','$ac_3','$ac_4','$ac_5','$ac_6','$ac_outof_order','$in_row_small_front_row','$in_row_small_back_row','$water_supply_in_row_small','$chilled_water_temp_in_row_small','$in_row_large_front_row','$in_row_large_back_row','$water_supply_in_row_large','$chilled_water_temp_in_row_large','$data_center_temp','$data_center_temp_nexus','$data_center_temp_hotile','$data_center_temp_hotile','$humidity_front_site','$humidity_hot_oil_site','$humidity_back_site','$signature','$problems','$original_date','$original_time','$comments','$pending')";

		

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
