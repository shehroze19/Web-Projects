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
	if($_SESSION['user_type']!="officer"){
		header("location:login.php");
	}

	?>


	<?php 



	if(isset($_POST['checked']))
	{



		if(isset($_POST['comments'])){

			$comments = $_POST['comments'];
			$ids = $_POST['ids'];



			for($i=0;$i<count($comments);$i++){

				$update_id = $ids[$i];
				$comment=$comments[$i];
				$sql = "UPDATE `building_ups_log_sheet` SET `comments`='$comment' WHERE `s_no`='$update_id'";
				$result = mysqli_query($con,$sql);
			}


			if($result){
				echo "<div class='btn btn-block alert-success'>Comment Updated</div>";
			}
			else
			{
				echo "Error";
			}



		}















		if(isset($_POST['checkbox'])){

			$checkbox = $_POST['checkbox'];


			$name=$_SESSION['Name'];
			for($i=0;$i<count($checkbox);$i++){

				$update_id = $checkbox[$i];
				$sql = "UPDATE `building_ups_log_sheet` SET `pending`='Verified By: $name' WHERE `s_no`='$update_id'";
				$result = mysqli_query($con,$sql);
			}


			if($result){
				echo "<div class='btn btn-block alert-success'>Record Verification Complete</div>";
			}
			else
			{
				echo "Error";
			}

		}

	}
	?>

	<div class="container-fluid">
		



		<div class="page-header text-center">
			<h2 style="color:white;">BUILDING UPS LOG SHEET</h2>


		</div>


		
		<input style="color:black;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by names" title="Type in a name">
		<input style="color:black;" type="date" id="myInput2"  onchange="myFunction2()" placeholder="Search by date" title="Type in a name">



		<script type="text/javascript">
			function toggle(source) {
				checkboxes = document.getElementsByName('checkbox[]');
				for(var i=0, n=checkboxes.length;i<n;i++) {
					checkboxes[i].checked = source.checked;
				}
			}
		</script>

		<form action="" method="post">

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

					<th class="text-center active" style="width:5%;">PENDING <input type="checkbox" onClick="toggle(this)" />Select All<br/></th>

					<th class="text-center active" style="width:10%;">Date Generated</th>
					<th class="text-center active" style="width:10%;">Time Generated</th>












					<?php
					$user=$_SESSION['Username'];
					$query2="SELECT * FROM `building_ups_log_sheet` ";
					$result=mysqli_query($con,$query2);

					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr class='active'>";

						echo "<td>" . $row['report_by'] . "</td>";

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
						echo "<input type='hidden' name='ids[]' value='".$row['s_no']."'>";


						echo "<td class='text-center'><textarea style='color:black;' name='comments[]' value='" . $row['comments'] . "'>".$row['comments']." </textarea></td>";
						echo "<td class='text-center'>";

						if($row['pending']==1){ 
							echo "<input type='checkbox' name='checkbox[]' value='".$row['s_no']."'</td>";

						} else { echo $row['pending'];}
						echo "</td>";

						echo "<td class='text-center'>" . $row['original_date'] . "</td>";

						echo "<td class='text-center'>" .  str_replace(':00','',$row['original_time']) . "</td>";






						echo "</tr>";



					}
					?>


				</table>

				<div class="form-group"><input type="Submit" name="checked" value="Verify Selected Reports Or Update Comment" class="btn btn-block alert-success"></div>



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
