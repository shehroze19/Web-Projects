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




	<div class="container">
		



		<div class="page-header text-center">
			<h2 style="color:white;">BUILDING UPS LOG SHEET</h2>


		</div>


		
		<input style="color:black;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by names" title="Type in a name">
		<input style="color:black;" type="date" id="myInput2"  onchange="myFunction2()" placeholder="Search by date" title="Type in a name">





		<table id="myTable" class="table-responsive" border="3">
			<tr class="header">

				<th class="text-center active" style="width:10%;">REPORTED BY</th>
				<th class="active" style="width:10%;">Date</th>
				<th class="active" style="width:10%;">Time</th>
				<th class="active" style="width:5%;">Temp (° C) Epi Device</th>
				<th class="active" style="width:5%;">Temp (° C) Other Device</th>
				<th class="active" style="width:10%;">Humidity (%)</th>
				<th class="active" style="width:10%;">Ups Status</th>
				<th class="active" style="width:10%;">FCU</th>
				<th class="active" style="width:10%;">Split AC Unit Status</th>
				<th class="active" style="width:10%;">Main Breaker BY</th>
				<th class="active" style="width:10%;">Battery Status (Min)</th>
				<th class="active" style="width:10%;">Signature</th>
				<th class="active" style="width:10%;">Observations/Issues (if any)</th>

				<th class="active" style="width:10%;">Reported To:</th>
				<th class="active" style="width:10%;">Comments</th>
				<th class="active" style="width:10%;">Pending</th>













				<?php
				$user=$_SESSION['Username'];
				$query2="SELECT * FROM `building_ups_log_sheet` ";
				$result=mysqli_query($con,$query2);

				while($row = mysqli_fetch_assoc($result))
				{
					echo "<tr class='active'>";

					echo "<td class='text-center'>" . $row['report_by'] . "</td>";
					echo "<td>" . $row['date'] . "</td>";
					echo "<td>" . str_replace(':00','',$row['time']) . "</td>";



					echo "<td>" . $row['temp_epi_device'] . "</td>";
					echo "<td>" . $row['temp_other_device'] . "</td>";
					echo "<td>" . $row['humidity'] . "</td>";
					echo "<td>" . $row['Ups_status'] . "</td>";
					echo "<td>" . $row['fcu'] . "</td>";
					echo "<td>" . $row['split_ac_unit_status'] . "</td>";
					echo "<td>" . $row['main_breaker'] . "</td>";
					

					echo "<td>" . $row['battery_status'] . "</td>";
					echo "<td>" . $row['signature'] . "</td>";
					echo "<td>" . $row['observation_issues'] . "</td>";
					echo "<td>" . $row['reported_to'] . "</td>";
					echo "<td class='text-center'>" . $row['comments'] . "</td>";
					echo "<td class='text-center'>";
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
