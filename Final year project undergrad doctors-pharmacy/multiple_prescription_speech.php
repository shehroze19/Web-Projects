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

							<?php function GetBetween($var1="",$var2="",$pool){
                $temp1 = strpos($pool,$var1)+strlen($var1);
                $result = substr($pool,$temp1,strlen($pool));
                $dd=strpos($result,$var2);
                if($dd == 0){
                    $dd = strlen($result);
                }

                return substr($result,0,$dd);
            } ?>

							<?php if(isset($_POST['press'])){
	



		if(isset($_POST['textSpeech'])){

			$value1 = $_POST['textSpeech'];
			

			$id=$_POST["id"];
			for($i=0;$i<count($value1);$i++){

				$update_id = $value1[$i];

				$tmpMedicine = GetBetween("name","dosage",$update_id);
				$tmpDosage = GetBetween("dosage","duration",$update_id);		
				$tmpTime = GetBetween("duration","time",$update_id);
				$tmpDuration = GetBetween("prescription"," ",$update_id);
				

				$query = "SELECT * FROM `appointment` WHERE `id`= '$id' ";
							mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

							$runner = mysqli_query($con,$query);
									
									$row=mysqli_fetch_assoc($runner);
									$doctor_uname = $row['doctor_uname'];
									$patient_uname = $row['patient_uname'];	

$query1 = "INSERT INTO `prescription` (`doctor_uname`,`patient_uname`,`medicine_name`,`dosage`,`time`,`duration`) 
								VALUES ('$doctor_uname','$patient_uname','$tmpMedicine','$tmpDosage','$tmpTime','$tmpDuration')";
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


		echo "<p class='text-center alert-danger well ' >Please follow the format. Use these keywords: Name, Dosage and Duration. The format of prescription is: Name = Medicine name 			     Dosage = .... 		Duration = .... 		Time for Prescription = ....   If there is an error in audio to text, edit the prescription when the speech stops. </p>";

			
			while($counter_26!=0){



				echo "<div style='font-size:18px;'>Prescription ";
				echo ++$count_26." </div>";

echo "								
									<table>
										<input  style='color: black;' name='id' value='".$id." ' type='hidden'>
									<tr><td><textarea  style='color: black;' class='text-center' name='textSpeech[]' rows='2' cols='106' id='result".$count_26."'></textarea><br></td></tr>
									<tr><td><button id='btn".$count_26."' type='button' class='btn btn-block btn-primary' onclick='myFunctionId(this.id);'><i class='fas fa-microphone'></i></button></td></tr><br><br>
								
												<p id='#demo'></p>

</table>
										<br><br>		";



											



				$counter_26--;


			}

echo "<input class='btn btn-primary btn-block' type='submit' value='Submit' name='press'>

			 </form>";
			


		}



									}


								}


							}


							?>


<script type="text/javascript">


									function myFunctionId (id) {
									   
									   startRecog(id);     
									}

									
																		
									function startRecog(id) {
										
										var r = document.getElementById('result'.concat(id.slice(3,4)));
										

									if('webkitSpeechRecognition' in window){
									var speechRecognizer = new webkitSpeechRecognition();
									speechRecognizer.continuous = true;
									speechRecognizer.interimResults =true;
									speechRecognizer.lang = 'en-US';
									speechRecognizer.start();

									var finalTranscripts = '';

									speechRecognizer.onresult = function(event){

										var interimTranscripts = '';
										for(var i = event.resultIndex; i< event.results.length; i++){

											var transcipt = event.results[i][0].transcript;
											//transcipt.replace("\n","<br>");
											//alert(transcipt);
											if(event.results[i].isFinal){
												finalTranscripts += transcipt;

											}
											else{
												interimTranscripts += transcipt;
												//alert(interimTranscripts);
											}

										}

										r.innerHTML = finalTranscripts + interimTranscripts ;

										$.post('jstophp.php',{posttext:finalTranscripts},
							        function(data){


							            $('#demo').html(data);

							        });

									};

									speechRecognizer.onerror = function (event) {
										//r.innerHTML = 'Wait...Speak again';
									};

							}	else{

								r.innerHTML = 'Your browser is not supported.';

							}

							speechRecognizer.onspeechend = function () {

								speechRecognizer.stop();
								alert('Prescription: '.concat(parseInt(id.slice(3,4))).concat(' ended'));
								
							}
										
									}

									

								</script>






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

