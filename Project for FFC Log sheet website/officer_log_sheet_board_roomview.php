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
				$sql = "UPDATE `log_sheet_board_room_rao` SET `comments`='$comment' WHERE `sr_no`='$update_id'";
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
				$sql = "UPDATE `log_sheet_board_room_rao` SET `pending`='Verified By: $name' WHERE `sr_no`='$update_id'";
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
			<h2 style="color:white">LOG SHEET BOARD ROOM / RAO FARMAN HALL</h2>

			
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
					<th class="text-center active"  style="width:10%;">DATE</th>
					<th class="text-center active"  style="width:10%;">VC</th>
					<th class="text-center active"  style="width:5%;">Audio</th>
					<th class="text-center active"  style="width:5%;">Projector</th>
					<th class="text-center active"  style="width:10%;">Screen</th>
					<th class="text-center active"  style="width:5%;">Table Cabby</th>
					<th class="text-center active"  style="width:10%;">Activity</th>
					<th class="text-center active"  style="width:10%;">Tested By</th>
					<th class="text-center active"  style="width:10%;">Verified By</th>
					<th class="text-center active" style="width:10%;">Status</th>
					<th class="text-center active"  style="width:10%;">Comments</th>
					<th class="text-center active" style="width:5%;">PENDING <input type="checkbox" onClick="toggle(this)" />Select All<br/></th>
					<th class="text-center active" style="width:10%;">Date Generated</th>
					<th class="text-center active" style="width:10%;">Time Generated</th>

















					<?php
					$user=$_SESSION['Username'];
					$query2="SELECT * from log_sheet_board_room_rao";
					$result=mysqli_query($con,$query2);

					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr class='active'>";



						echo "<td class='text-center'>" . $row['report_by'] . "</td>";

						echo "<td class='text-center'>" . $row['date'] . "</td>";
						echo "<td class='text-center'>" .  $row['VC'] . "</td>";
						echo "<td class='text-center'>" .  $row['AUDIO'] . "</td>";
						echo "<td class='text-center'>" .  $row['PROJECTOR'] . "</td>";
						echo "<td class='text-center'>" .  $row['SCREEN'] . "</td>";
						echo "<td class='text-center'>" .  $row['TABLE_CABBY'] . "</td>";
						echo "<td class='text-center'>" . $row['ACTIVITY'] . "</td>";
						echo "<td class='text-center'>" .  $row['TESTED_BY'] . "</td>";
						echo "<td class='text-center'>" . $row['VERIFIED_BY'] . "</td>";
						echo "<td class='text-center'>" .  $row['STATUS'] . "</td>";
						
						echo "<input type='hidden' name='ids[]' value='".$row['sr_no']."'>";


						echo "<td class='text-center'><textarea style='color:black;' name='comments[]' value='" . $row['comments'] . "'>".$row['comments']." </textarea></td>";
						echo "<td class='text-center'>";

						if($row['pending']==1){ 
							echo "<input type='checkbox' name='checkbox[]' value='".$row['sr_no']."'</td>";

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
