<?php 
include('Connection.php');
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


	<title>Details</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	<!-- Custom styles for this template -->
	



</head>

<body>

<?php  include("navbar.php");  ?>


	<div class="container">










	

			<h2>Awards</h2>

			<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">






			<table id="myTable" class="table" border="2">
				<tr class="header">
					
					<th style="width:20%;">Sudent Name</th>
					<th style="width:20%;">Sudent ID</th>
					<th style="width:20%;">Mobile Number</th>
					<th style="width:20%;">Registered Course Title</th>
					<th style="width:20%;">Institute</th>
					<th style="width:20%;">Course Code</th>


					




	<?php
									$query2="SELECT personal_detail.first_name, personal_detail.id,personal_detail.mobile_no,course_detail.course_code,
									 course_detail.course_title,course_detail.institute
									from personal_detail inner join course_detail on course_detail.course_id=personal_detail.id ";
									$result=mysqli_query($con,$query2);

									while($row = mysqli_fetch_array($result))
									{
										echo "<tr>";
									
										echo "<td>" . $row['first_name'] . "</td>";
										echo "<td>" . $row['id'] . "</td>";
										echo "<td>" . $row['mobile_no'] . "</td>";
										echo "<td>" . $row['course_title'] . "</td>";
										echo "<td>" . $row['institute'] . "</td>";
										echo "<td>" . $row['course_code'] . "</td>";



									



									




									



		
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





	
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
