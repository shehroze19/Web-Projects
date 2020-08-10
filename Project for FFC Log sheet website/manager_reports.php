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




</head>

<body class="jumbotron">

	<?php  
	if($_SESSION['user_type']!="manager"){
		header("location:login.php");
	}

	?>

	<?php 



	if(isset($_POST['delete']))
	{
		$checkbox = $_POST['checkbox'];

		for($i=0;$i<count($checkbox);$i++){

			$del_id = $checkbox[$i];
			$sql = "DELETE FROM electricity_reports WHERE id='$del_id'";
			$result = mysqli_query($con,$sql);
		}


		if($result){
			echo "<div class='btn btn-block alert-success'>Records Deleted Successfully</div>";
		}
		else
		{
			echo "Error";
		}

	}
	?>





	<div class="container-fluid">
		


		<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by names" title="Type in a name">
		<input class="form-control" type="date" id="myInput2"  onchange="myFunction2()" placeholder="Search by date" title="Type in a name">


		<script type="text/javascript">
			function toggle(source) {
				checkboxes = document.getElementsByName('checkbox[]');
				for(var i=0, n=checkboxes.length;i<n;i++) {
					checkboxes[i].checked = source.checked;
				}
			}
		</script>

		<form action="" method="post">
			<table id="myTable" class="table" border="2">
				<tr class="header">


					<th style="width:20%;">Reported By</th>
					<th style="width:10%;">Date</th>
					<th style="width:5%;">Time From</th>
					<th style="width:5%;">Time to</th>
					<th style="width:10%;">Electricity State</th>
					<th style="width:5%;">Report Generated (Time)</th>
					<th style="width:5%;">Report Generated (Date)</th>
					<th style="width:5%;">Coments</th>

					<th style="width:5%;">Edit Report</th>
					<th style="width:5%;">Delete Report</th>
					<th style="width:5%;">Select Report
						<input type="checkbox" onClick="toggle(this)" />Select All<br/>

					</th>
				














					<?php
					$user=$_SESSION['Name'];
					$query2="SELECT * from electricity_reports";
					$result=mysqli_query($con,$query2);

					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr class='active'>";


						echo "<td>" . $row['reported_by'] . "</td>";
						echo "<td>" . $row['date'] . "</td>";


						echo "<td>" . str_replace(':00.000000','',$row['time_from']) . "</td>";
						echo "<td>" . str_replace(':00.000000','',$row['time_to']) . "</td>";
						echo "<td>" . $row['State'] . "</td>";
						echo "<td>" . str_replace(':00.000000','',$row['original_time_from']) . "</td>";
						echo "<td>" . $row['original_date'] . "</td>";
						echo "<td><textarea readonly>" . $row['comments'] . "</textarea></td>";

						echo "<td><a href='Update.php?id=".$row['id']."'";
						echo ">Update</a></td>";
						echo "<td><a href='Delete.php?id=".$row['id']."'";
						echo ">Delete</a></td>";
						echo "<td><input type='checkbox' name='checkbox[]' value='".$row['id']."'</td>";
						




						echo "</tr>";



					}
					?>


				</table>

				<div class="form-group row">

				</div>


				<div class="form-group row"><input type="Submit" name="delete" value="Delete Selected Reports" class="btn btn-block alert-danger"></div>


			</form>

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
