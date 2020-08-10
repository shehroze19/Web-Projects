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
			<h2 style="color:white;">INCIDENTAL LOG SHEET NOC, DATA CENTER & PATCH ROOM</h2>

			
		</div>


		
		<input style="color:black;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by names" title="Type in a name">
		<input style="color:black;" type="date" id="myInput2"  onchange="myFunction2()" placeholder="Search by date" title="Type in a name">





		<table id="myTable" class="table-responsive" border="3">
			<tr class="header">

				<th class="text-center active"  style="width:10%;">REPORTED BY</th>
				<th class="text-center active"  style="width:10%;">DATE</th>
				<th class="text-center active"  style="width:5%;">TIME</th>
				
				<th class="text-center active"  style="width:10%;">REPORTED TO</th>
				<th class="text-center active"  style="width:10%;">SERVICE EQUIP</th>
				<th class="text-center active"  style="width:10%;">REASON (if known)</th>
				<th class="text-center active"  style="width:10%;">ACTION TAKEN TO RESOLVE THE ISSUE</th>
				<th class="text-center active"  style="width:10%;">OUTAGE TIME</th>
				<th class="text-center active"  style="width:10%;">LOCATION</th>
				<th class="text-center active"  style="width:10%;">COMMENTS</th>
				<th class="text-center active"  style="width:5%;">PENDING</th>













				<?php
				$user=$_SESSION['Username'];
				$query2="SELECT * from incidental_log_sheet_noc_dc_pr";
				$result=mysqli_query($con,$query2);

				while($row = mysqli_fetch_assoc($result))
				{
					echo "<tr class='active'>";


					
					echo "<td class='text-center'>" .  $row['reported_by'] . "</td>";
					
					echo "<td class='text-center'>" .  $row['date'] . "</td>";
					echo "<td class='text-center'>" .  str_replace(':00','',$row['time']) . "</td>";
					
					echo "<td class='text-center'>" .  $row['reported_to'] . "</td>";
					echo "<td class='text-center'>" .  $row['equipment_type'] . "</td>";
					echo "<td class='text-center'>" .  $row['reason'] . "</td>";
					echo "<td class='text-center'>" .  $row['action_taken'] . "</td>";
					echo "<td class='text-center'>" .  str_replace(':00','',$row['outage_time']) . "</td>";

					echo "<td class='text-center'>" .  $row['location'] . "</td>";
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
