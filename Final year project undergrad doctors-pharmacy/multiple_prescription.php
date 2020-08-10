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




	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
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

							<?php if(isset($_POST['press'])){
	



		if(isset($_POST['Medicine'])){

			$value1 = $_POST['Medicine'];
			$value2= $_POST['dosage'];
			$value3= $_POST['time'];
			$value4= $_POST['duration'];

			$id=$_POST["id"];
			for($i=0;$i<count($value2);$i++){

				$update_id = $value1[$i];
				$update_id2 = $value2[$i];
				$update_id3 = $value3[$i];
				$update_id4 = $value4[$i];

				$query = "SELECT * FROM `appointment` WHERE `id`= '$id' ";
							mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

							$runner = mysqli_query($con,$query);
									
									$row=mysqli_fetch_assoc($runner);
									$doctor_uname = $row['doctor_uname'];
									$patient_uname = $row['patient_uname'];	

$query1 = "INSERT INTO `prescription` (`doctor_uname`,`patient_uname`,`medicine_name`,`dosage`,`time`,`duration`) 
								VALUES ('$doctor_uname','$patient_uname','$update_id','$update_id2','$update_id3','$update_id4')";
								mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

								$runner1 = mysqli_query($con,$query1);
				

			}


			if($runner1){

					
										echo "<button class='btn btn-block btn-primary'><a class='btn ' style='color:white;' href='prescription.php?id=".$id."'>Do you want to add another prescription?</a></button>";
										echo "<div class='btn btn-block alert-success'>Prescription Completed.	
										<a href='doctor_all_appointments_completed.php'><span class='btn btn-danger'>Go Back</span></a>
										</div> <br>";

		               }

		               else{



									echo "<div class='btn btn-block alert-success'>Error</div>";
		               }
                                 }

                            } ?>
							
							<?php 

							$Username=$_SESSION['username'];

							$id = $_POST['id'];

							$result=mysqli_query($con,"select id,doctor_uname,patient_uname from appointment where id='$id';");

							mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

							if (mysqli_num_rows($result)==0) {
									
									echo "<div class='btn btn-block alert-success'>Error!! This appointment number does not exists.
										<a href='doctor_all_appointments_completed.php'><span class='btn btn-danger'>Go Back</span></a>
										</div> <br>";

								}

							while($data = mysqli_fetch_assoc($result)){

								if($data['doctor_uname'] != $Username ){

								echo "<div class='btn btn-block alert-success'>Error!! This appointment number is connected to some other doctor. 		 
										<a href='doctor_all_appointments_completed.php'><span class='btn btn-danger'>Go Back</span></a>
										</div> <br>";

								}

								else {








									if(count($_POST)>0){

										@$numberOfPrescription = $_POST['inputPrescription'];

										echo "<form action='' method='post'>";

		if($numberOfPrescription!=0){
			$count_26=0;
			$counter_26=$numberOfPrescription;


		

			
			while($counter_26!=0){



				echo "<div style='font-size:18px;'>Prescription ";
				echo ++$count_26." </div>";

echo "													<table  class='table'>


																
															<input  style='color: black;' name='id' value='" .$id. "' type='hidden'>

												



														<tr class=''>
															<th >Medicine Name</th>
															<td>

															<select name='Medicine[]' style='color: black;' required> 
																
																<option disabled selected style='color: black;'>Select Medicine</option>
																<option value='Panadol' style='color: black;'> Panadol </option>
																<option value='Regix' style='color: black;'>Regix</option>
																<option value='Brufen' style='color: black;'>Brufen</option>
																<option value='Augmenten' style='color: black;'>Augmenten</option>
																<option value='Aspirin' style='color: black;'>Aspirin</option>
																<option value='Baclofen' style='color: black;'>Baclofen</option>
																<option value='Ibuprofen' style='color: black;'>Ibuprofen</option>
																<option value='Kadcyla' style='color: black;'>Kadcyla</option>
																<option value='Ramipril' style='color: black;'>Ramipril</option>
																<option value='Dispirin' style='color: black;'>Dispirin</option>
																<option value='Yervoy' style='color: black;'>Yervoy</option>
																<option value='Macugen' style='color: black;'>Macugen</option>
																<option value='Ocrevus' style='color: black;'>Ocrevus</option>
																<option value='Ultrase' style='color: black;'>Ultrase</option>
																<option value='Sabril' style='color: black;'>Sabril</option>
																<option value='Ocufen' style='color: black;'>Ocufen</option>



															</select>

																			</td>
																		</tr>

																		<tr class=''>
																			<th >Dosage</th>
																			<td><input required style='color: black;' name='dosage[]' type='text'></td>
																		</tr>

																	

																		<tr >
																			<th class='black'>Time</th>

																			
																			<td><input required style='color: black;' name='time[]' type='text'> </td>
																		</tr>
																		<tr >
																			<th class='black'>Duration</th>

																			
																			<td><input required style='color: black;' name='duration[]' type='text'> </td>
																		</tr>

																		
																	


																		<tr><th></th><td>
					
																			</td>
																		</tr>
																		
</table>";



											



				$counter_26--;


			}

echo "<input class='btn btn-primary btn-block' type='submit' value='Submit' name='press'>

			 </form>";
			


		}



									}


								}


							}


							?>







													<div class="overlay-detail text-center">
														<a href="#"><i class="fa fa-angle-up"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>



								<script type="text/javascript" src="jquery-3.3.1.js"></script>
								<script src="js/jquery.min.js"></script>
								<script src="js/bootstrap.min.js"></script>
								<script src="js/custom.js"></script>

							</body>

							</html>

