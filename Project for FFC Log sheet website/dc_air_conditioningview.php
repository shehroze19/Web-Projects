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
	<meta name="Application History" content="">
	<meta name="Shehroze" content="">


	<title>FFc</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	<!-- Custom styles for this template -->
	<link href="css/logsheets.css" rel="stylesheet">




</head>

<body style="color:white;">

	<?php  
	if($_SESSION['user_type']!="tech"){
		header("location:login.php");
	}

	?>




	<div class="container-fluid">
		



		<div class="page-header text-center">
			<h2 style="color:white;">DC AIR CONDITIONING & IN-ROW COOLING LOG SHEET</h2>

			
		</div>


		<input style="color:black;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by names" title="Type in a name">
		<input style="color:black;" type="date" id="myInput2"  onchange="myFunction2()" placeholder="Search by date" title="Type in a name">





		<table id="myTable" class="table-responsive" border="3">
			<tr class="header">

				<th class="text-center active" style="width:10%;">REPORTED BY</th>
				<th class="text-center active"  style="width:10%;">DATE</th>
				<th class="text-center active"  style="width:5%;">TIME (FROM)</th>
				<th class="text-center active"  style="width:5%;">TIME (TO)</th>
				<th class="text-center active"  style="width:3%;">AC 1 </th>
				<th class="text-center active"  style="width:3%;">AC 2 </th>
				<th class="text-center active"  style="width:3%;">AC 3 </th>
				<th class="text-center active"  style="width:3%;">AC 4 </th>
				<th class="text-center active"  style="width:3%;">AC 5 </th>
				<th class="text-center active"  style="width:3%;">AC 6 </th>

				<th class="text-center active"  style="width:3%;">AC's (OUT OF ORDER)</th>

				<th class="text-center active" style="width:3%;" > In Row Status Small Unit Temperature Front Row</th>
				<th class="text-center active" style="width:3%;" > In Row Status Small Unit Temperature Back Row</th>
				<th class="text-center active" style="width:3%;" > In Row Status Small Unit Water Supply Pump Status</th>
				<th class="text-center active" style="width:3%;" > In Row Status Small Unit Chilled Water Temp</th>

				<th class="text-center active" style="width:3%;" > In Row Status Large Unit Temperature Front Row</th>
				<th class="text-center active" style="width:3%;" > In Row Status Large Unit Temperature Back Row</th>
				<th class="text-center active" style="width:3%;" > In Row Status Large Unit Water Supply Pump Status</th>
				<th class="text-center active" style="width:3%;" > In Row Status Large Unit Chilled Water Temp</th>


				<th class="text-center active"  style="width:3%;">Data Center Temp (&deg;C)</th>
				<th class="text-center active"  style="width:3%;">Data Center Temp (&deg;C) (NEXUS)</th>
				<th class="text-center active"  style="width:3%;">Data Center Temp (&deg;C) (HOTILE)</th>
				<th class="text-center active"  style="width:3%;">Data Center Temp (&deg;C) (COLDAILE)</th>
				<th class="text-center active"  style="width:3%;">Humidity Front Site</th>
				<th class="text-center active"  style="width:3%;">Humidity Hot Oil Site</th>
				<th class="text-center active"  style="width:3%;">Humidity Back Site</th>
				<th class="text-center active"  style="width:5%;">SIGNATURE</th>
				<th class="text-center active"  style="width:10%;">PROBLEM/ OTHER REMARKS (if any)</th>
				<th class="text-center active"  style="width:5%;">Comments</th>
				<th class="text-center active"  style="width:3%;">Pending</th>













				<?php
				$user=$_SESSION['Username'];
				$query2="SELECT * from dc_air_conditioning ";
				$result=mysqli_query($con,$query2);

				while($row = mysqli_fetch_assoc($result))
				{
					echo "<tr class='active'>";


					

					echo "<td class='text-center'>" . $row['report_by'] . "</td>";
					echo "<td class='text-center'>" .  $row['DATE'] . "</td>";
					echo "<td class='text-center'>" .  str_replace(':00','',$row['time_from']) . "</td>";
					echo "<td class='text-center'>" .  str_replace(':00','',$row['time_to']) . "</td>";
					echo "<td class='text-center'>" .  $row['ac_1'] . "</td>";
					echo "<td class='text-center'>" .  $row['ac_2'] . "</td>";
					echo "<td class='text-center'>" .  $row['ac_3'] . "</td>";
					echo "<td class='text-center'>" .  $row['ac_4'] . "</td>";
					echo "<td class='text-center'>" .  $row['ac_5'] . "</td>";
					echo "<td class='text-center'>" .  $row['ac_6'] . "</td>";
					echo "<td class='text-center'>" .  $row['ac_out_of_order'] . "</td>";
					echo "<td class='text-center'>" .  $row['in_row_small_temp_front_row'] . "</td>";
					echo "<td class='text-center'>" .  $row['in_row_small_temp_back_row'] . "</td>";

					echo "<td class='text-center'>" .  $row['in_row_small_water_supply_pump'] . "</td>";
					echo "<td class='text-center'>" .  $row['in_row_small_chilled_water_temp'] . "</td>";
					echo "<td class='text-center'>" .  $row['in_row_large_temp_front_row'] . "</td>";
					echo "<td class='text-center'>" .  $row['in_row_large_temp_back_row'] . "</td>";
					echo "<td class='text-center'>" .  $row['in_row_large_water_supply_pump'] . "</td>";
					echo "<td class='text-center'>" .  $row['in_row_large_chilled_water_temp'] . "</td>";
					echo "<td class='text-center'>" .  $row['data_center_temp'] . "</td>";
					echo "<td class='text-center'>" .  $row['data_center_temp_nexus'] . "</td>";
					echo "<td class='text-center'>" .  $row['data_center_temp_hot_ile'] . "</td>";
					echo "<td class='text-center'>" .  $row['data_center_temp_coldaile'] . "</td>";
					echo "<td class='text-center'>" .  $row['humidity_front_site'] . "</td>";
					echo "<td class='text-center'>" .  $row['humidity_oil_site'] . "</td>";
					echo "<td class='text-center'>" .  $row['humidity_back_site'] . "</td>";
					echo "<td class='text-center'>" .  $row['signature'] . "</td>";
					echo "<td class='text-center'>" .  $row['problem'] . "</td>";
					
					echo "<td class='text-center'>" .  $row['comments'] . "</td>";
					echo "<td class='text-center'>" ;
					if($row['pending']==1)  { echo "Yes";}else{ echo $row['pending'];}
					echo "</td>";


					

					echo "</tr>";



				}
				?>


			</table>

			<script>
				function myFunction() {
					var input, filter, table, tr, td, i;
					input = document.getElementById("myInput");
					filter = input.value.toUpperCase();
					table = document.getElementById("myTable");
					tr = table.getElementsByTagName("tr");
					for (i = 0; i < tr.length; i++) {
						td = tr[i].getElementsByTagName("td")[0];
						if (td) {
							if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
								tr[i].style.display = "";
							} else {
								tr[i].style.display = "none";
							}
						}       
					}
				}
			</script>

			<script>
				function myFunction2() {
					var input, filter, table, tr, td, i;
					input = document.getElementById("myInput2");
					filter = input.value.toUpperCase();
					table = document.getElementById("myTable");
					tr = table.getElementsByTagName("tr");
					for (i = 0; i < tr.length; i++) {
						td = tr[i].getElementsByTagName("td")[1];
						if (td) {
							if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
								tr[i].style.display = "";
							} else {
								tr[i].style.display = "none";
							}
						}       
					}
				}
			</script>








		</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
