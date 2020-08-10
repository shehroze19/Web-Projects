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




	<script>
		function getdoctor(val) {
			$.ajax({
				type: "POST",
				url: "get_doctor.php",
				data:'specilizationdata='+val,
				success: function(data){
					$("#doctor").html(data);
				}
			});
		}
	</script>	


	<script>
		function getfee(val) {
			$.ajax({
				type: "POST",
				url: "get_doctor.php",
				data:'doctor='+val,
				success: function(data){
					$("#fees").html(data);
				}
			});
		}
	</script>	
	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body class="bg-info" style="color:black" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php 
if(isset($_POST['submit']))
{

$specilization=$_POST['Doctorspecialization'];
$doctor_uname=$_POST['doctor'];
$patient_uname=$_SESSION['Name'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];
	$query=mysqli_query($con,"INSERT INTO `appointment`(`doctorSpecialization`, `doctor_uname`, `patient_uname`, `Fees`, `appointmentDate`, `appointmentTime`) VALUES ('$specilization','$doctor_uname','$patient_uname','$fees','$appdate','$time')");
	if($query)
	{
		echo "<div class='btn btn-block btn-success'>Your appointment has been successfully booked</div>";
	}
	else{
		echo "<div class='btn btn-block btn-danger'>Error</div>";

	}

}


 ?>

	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
						</div>
						<div class="banner-text text-center">
							
							<?php 
							$Username=$_SESSION['Username'];

							$result=mysqli_query($con,"select * from patients where Username='$Username';");




							$data = mysqli_fetch_assoc($result);


							?>



							<div class="form-group row">
								<div class="panel-heading btn-info">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
											<h3>Insert a new Medical Record</h3></a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse">
										<div class="panel-body">

											

																	<form action="medicalrecord_insert.php" method="post" class="form-group">
																		<div class="form-group">
				<label class="control-label col-sm-4" >Record Name </label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="r_name"  placeholder="(Disease/Alergy/Blood type etc)" required>
				</div>
			</div>


	<div class="form-group">
				<label class="control-label col-sm-4" >Description</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="description"  placeholder="e.g Alergy to etc or b+ bloodgroup" required>
				</div>
			</div>

				<div class="form-group">
				<label class="control-label col-sm-4" >Other Details</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="o_details"  placeholder="if needed" >
				</div>
			</div>

				<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-8">
					<button type="submit" class="btn btn-default">Insert Record</button>
				</div>
			</div>


																	</form>
										



														</div>
													</div>
												</div>

												<div class="bg-primary"> <a href="patient_all_medicalrecords.php"><h3 style="color: white;">View Old Medical Records</h3></a></div>






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
