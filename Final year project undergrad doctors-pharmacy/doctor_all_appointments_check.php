<?php 
include('connection.php');

@include('session_doctor.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EzHealth</title>
	<meta name="description" content="Shehroze Aamer,Abbas Afzal">




	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>



	<?php 











if(isset($_POST['checked'])){
	



		if(isset($_POST['checkbox'])){

			$checkbox = $_POST['checkbox'];

			$name=$_SESSION['docName'];
			for($i=0;$i<count($checkbox);$i++){

				$update_id = $checkbox[$i];
				$sql = "UPDATE `appointment` SET `approved`='Approved By: $name' WHERE `id`='$update_id'";
				$result = mysqli_query($con,$sql);
			}


			if($result){
				echo "<div class='btn btn-block alert-success'>Approve Appointments</div>";
			}
			else
			{
				echo "Error";
			}

		}
}

	
	?>

		<script type="text/javascript">
			function toggle(source) {
				checkboxes = document.getElementsByName('checkbox[]');
				for(var i=0, n=checkboxes.length;i<n;i++) {
					checkboxes[i].checked = source.checked;
				}
			}
		</script>



<body class="bg-info" style="color:black" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
						</div>
						<div class="banner-text text-center">
							
							<div  class="form-group row">
								<div class="container">

		<input style="color:black;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by names" title="Type in a name">

		<form action="" method="post">
	


									<table id="myTable"  class="table" border="2">
<tr>
											<th class='bg-primary text-center'>Patient Appointed</th>

											<th class='bg-primary text-center'>Fees</th>
											<th class='bg-primary text-center'>Appointment Date</th>
											<th class='bg-primary text-center'>Appointment Time</th>
											

											<th class='bg-primary text-center'>Edit</th>
											<th class='bg-primary text-center'>Delete</th>
					<th class='bg-primary text-center' >Approve <input type="checkbox" onClick="toggle(this)" />Select All<br/></th>


											</tr>
										<?php 
										$Username=$_SESSION['username'];

										$result=mysqli_query($con,"SELECT * FROM `appointment` WHERE `doctor_uname`='$Username';");


										while($row=mysqli_fetch_assoc($result)){

											echo "	
											<tr>
											<td class='text-center'> ".$row['patient_uname']."</td>
											<td class='text-center'> ".$row['Fees']."</td>
											<td class='text-center'> ".$row['appointmentDate']."</td>
											<td class='text-center'> ".$row['appointmentTime']."</td>";
											$approve=0;
											
										

										echo "<td><a class='btn btn-success' style='color: black;' href='Update.php?id=".$row['id']."'";
										echo ">Update</a></td>";

										echo "<td ><a class='btn btn-warning' style='color: black;' href='Delete_patient_appointment.php?id=".$row['id']."'";
										echo ">Delete</a></td>";




	if($row['approved']==null){ 

							echo "<td><input type='checkbox' name='checkbox[]' value='".$row['id']."'</td>";

						} else { echo "<td>Approved</td>";}





											echo "</tr>";

										}
										?>



									</table> 
									<div class="form-group"><input type="Submit" name="checked" value="Approve Selected" class="btn btn-block alert-success"></div>

								</div>


							</div>


							<div class="overlay-detail text-center">
								<a href="#"><i class="fa fa-angle-up"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


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


		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>

	</body>

	</html>
