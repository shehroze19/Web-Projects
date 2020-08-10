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

		<form action="" method="post">
			<?php
		

				$id=$_GET['id'];

										$Username=$_SESSION['Username'];

										$result=mysqli_query($con,"SELECT * FROM `appointment` WHERE `patient_uname`='$Username' and `id`= $id ");


										
			$array = mysqli_fetch_array($result);

?>

			<div class="form-group">
																			<h5 class="panel-title">Update Booked Appointment</h5>


				<label  class="col-2 col-form-label">Doctor Specialization</label>
				<div class="col-10">
					<input class="form-control" name="Doctorspecialization" type="text" value="<?php echo $array[1]; ?>"  readonly>
				</div>




				<label  class="col-2 col-form-label">Doctor</label>
				<div class="col-10">
					<input class="form-control" name="doctor" type="text" value="<?php echo $array[2]; ?>" readonly>
				</div>





				<label  class="col-2 col-form-label">	Consultancy Fees</label>
				<div class="col-10">
					<input class="form-control" name="fees" type="text" value="<?php echo $array[4]; ?>" readonly>
				</div>

				<div class="col-10">
					<input class="form-control" name="id" type="hidden" placeholder="Class" value=<?php echo "$id"; ?> >
				</div>



				<div class="form-group">
																						<label for="AppointmentDate">
																							Date
																						</label>
																						<input class="form-control datepicker"  id="userdate" name="appdate" onchange="TDate()" type="date" required="required" value="<?php echo $array[4]; ?>">
																						<script type="text/javascript">
																							function TDate() {
																								var UserDate = document.getElementById("userdate").value;
																								var ToDate = new Date();

																								if (new Date(UserDate).getTime() <= ToDate.getTime()) {
																									alert("The Date must be Bigger or Equal to todays date");
																									return false;
																								}
																								return true;
																							}
																						</script>
																					</div>



																			<div class="form-group row">
				<div class="col-xs-12"><label  class="col-2 col-form-label">Time From:</label>
					<div class="input-group clockpicker" data-autoclose="true">
						<input type="time" class="form-control" name="apptime" value="<?php  echo $array[5]; ?>" required>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-time"></span>
						</span>
					</div>
					<script type="text/javascript">
						$('.clockpicker').clockpicker();
					</script>
				</div>


<br><br>
				<div class="col-10">
<br><br>
<br><br>

					<input class="btn btn-info  btn-block " type="submit" value="Submit">
				</div>
			</div>	
		</form>

		<?php





		if(@$_POST['appdate']!=null and @$_POST['apptime']!=null ){


			$id=@$_POST['id'];
			$Doctorspecialization=@$_POST['Doctorspecialization'];
			$doctor=@$_POST['doctor'];
			$fees=@$_POST['fees'];
			$appdate=@$_POST['appdate'];
			$apptime=@$_POST['apptime'];

			$query="UPDATE appointment SET appointmentDate='$appdate', appointmentTime='$apptime' WHERE id='$id'";

			$result=mysqli_query($con,$query);

			if($result){
				echo "<div class='form-control'>Updated</div>";
			}
			else{
				echo "Error";
			}

		}

		




		?>


	</div>


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
