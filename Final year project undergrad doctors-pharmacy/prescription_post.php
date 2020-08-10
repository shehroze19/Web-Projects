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


							<?php 

							$id = $_POST["id"];

							$result=mysqli_query($con,"select id,doctor_uname,patient_uname from appointment where id='$id';");

							mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

							if (mysqli_num_rows($result)==0) {
									
									echo "<div class='btn btn-block alert-success'>Error!! This appointment number does not exists.
										<a href='doctor_all_appointments_completed.php'><span class='btn btn-danger'>Go Back</span></a>
										</div> <br>";

								}
								else{

$query = "SELECT * FROM `appointment` WHERE `id`= '$id' ";
							mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

							$runner = mysqli_query($con,$query);
									
									$row=mysqli_fetch_assoc($runner);
									$doctor_uname = $row['doctor_uname'];
									$patient_uname = $row['patient_uname'];							

								@$medicine = $_POST['Medicine'];
								@$dosage = $_POST['dosage'];
								@$time = $_POST['time'];
								@$duration = $_POST['duration'];

								

								$my_file = 'speechToText.txt';
								$handle = fopen($my_file, 'r');
								@$data = fread($handle,filesize($my_file));
								//echo $data;
								fclose($handle);

								@$speechText = $data;

								@$speechTextField = $_POST['textSpeech'];

								if($medicine != null && $dosage!=null && $time!=null){


								$query1 = "INSERT INTO `prescription` (`doctor_uname`,`patient_uname`,`medicine_name`,`dosage`,`time`,`duration`) 
								VALUES ('$doctor_uname','$patient_uname','$medicine','$dosage','$time','$duration')";
								mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

								$runner1 = mysqli_query($con,$query1);

								if($runner1){

										echo "<div class='btn btn-block alert-success'>Prescription Completed.	
										<a href='doctor_all_appointments_completed.php'><span class='btn btn-danger'>Go Back</span></a>
										</div> <br>";
										echo "<button class='btn btn-block btn-primary'><a class='btn ' style='color:white;' href='prescription.php?id=".$id."'>Do you want to add another prescription?</a></button>";
										
										//echo "<meta http-equiv='refresh' content='4;url=doctor_all_appointments'>";



								}

								else{

									echo "<div class='btn btn-block alert-success'>Error</div>";
								}
								
								}

								if(strcmp($speechText, $speechTextField)!=0){
									$speechText=$speechTextField;
								}
								

								if ($medicine == null && $dosage==null && $time==null && $speechText!=null) {

									$count = substr_count($speechText, 'and');									

									$tmpMedicine = GetBetween("name","dosage",$speechText);
									$tmpDosage = GetBetween("dosage","duration",$speechText);
									$tmpTime = GetBetween("duration","time",$speechText);
									$tmpDuration = GetBetween("prescription"," ",$speechText);
								$query2 = "INSERT INTO `prescription` (`doctor_uname`,`patient_uname`,`medicine_name`,`dosage`,`time`,`duration`) 
								VALUES ('$doctor_uname','$patient_uname','$tmpMedicine','$tmpDosage','$tmpTime','$tmpDuration')";
								mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

								$runner2 = mysqli_query($con,$query2);

								if($runner2){

										echo "<div class='btn btn-block alert-success'>Prescription Completed.		 
										<a href='doctor_all_appointments_completed.php'><span class='btn btn-danger'>Go Back</span></a>
										</div> <br>";
										echo "<button class='btn btn-block btn-primary'><a style='color:white;' href='prescription.php?id=".$id."'>Do you want to add another prescription?</a></button>";
								}

								else{

									echo "<div class='btn btn-block alert-success'>Error</div>";
								}


									
								}




									
								}


							
function GetBetween($var1="",$var2="",$pool){
                $temp1 = strpos($pool,$var1)+strlen($var1);
                $result = substr($pool,$temp1,strlen($pool));
                $dd=strpos($result,$var2);
                if($dd == 0){
                    $dd = strlen($result);
                }

                return substr($result,0,$dd);
            }


							?>




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
