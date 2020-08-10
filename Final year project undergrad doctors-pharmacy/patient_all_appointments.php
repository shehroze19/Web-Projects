<?php 
include('connection.php');

@include('session.php');

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

									<table  class="table" border="2">
<tr>
											<th class='bg-primary text-center'>Doctor Appointed</th>

											<th class='bg-primary text-center'>Doctor Specialization</th>
											<th class='bg-primary text-center'>Fees</th>
											<th class='bg-primary text-center'>Appointment Date</th>
											<th class='bg-primary text-center'>Appointment Time</th>
											<th class='bg-primary text-center'>Approved</th>
											<th class='bg-primary text-center'>Edit</th>
											<th class='bg-primary text-center'>Delete</th>
											</tr>
										<?php 
										$Username=$_SESSION['Username'];

										$result=mysqli_query($con,"SELECT * FROM `appointment` WHERE `patient_uname`='$Username';");


										while($row=mysqli_fetch_assoc($result)){

											echo "	
											<tr>
											<td class='text-center'> ".$row['doctor_uname']."</td>
											<td class='text-center'> ".$row['doctorSpecialization']."</td>
											<td class='text-center'> ".$row['Fees']."</td>
											<td class='text-center'> ".$row['appointmentDate']."</td>
											<td class='text-center'> ".$row['appointmentTime']."</td>";
											$approve=0;
											
											if($row['approved']==null)
											{
												$approve="Not Approved";
											}
											else{
												$approve="Approved";
											}
											echo "
											<td class='text-center'> ".$approve."</td>";

	echo "<td><a class='btn btn-success' style='color: black;' href='patient_all_appointments_update.php?id=".$row['id']."'";
										echo ">Update</a></td>";

										echo "<td ><a class='btn btn-warning' style='color: black;' href='Delete_patient_appointment.php?id=".$row['id']."'";
										echo ">Delete</a></td>";

											echo "</tr>";

										}
										?>




									</table> 
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




		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>

	</body>

	</html>
