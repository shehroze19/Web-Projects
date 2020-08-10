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
							
							<?php 
							$Username=$_SESSION['username'];

							$id = $_GET['id'];

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
echo "	<div class='form-group row'>
								<div class='panel-heading btn-info'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordion' href='#collapse4'>
											<h3>Enter Prescription</h3></a>
										</h4>
									</div>
									<div id='collapse4' class='panel-collapse collapse'>
										<div class='panel-body'>

											<div class='form-group row'>
<div class='container'>

											

													<table  class='table'>
<form action='prescription_post.php' method='POST'  >

												
															
															
															<input  style='color: black;' name='id' value='" .$id. "' type='hidden'>

																		



														<tr class=''>
															<th >Medicine Name</th>
															<td>

															<select name='Medicine' style='color: black;' required> 
																
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
																			<td><input required style='color: black;' name='dosage' type='text'></td>
																		</tr>

																	

																		<tr >
																			<th class='black'>Time</th>

																			
																			<td><input required style='color: black;' name='time' type='text'> </td>
																		</tr>
																		<tr >
																			<th class='black'>Duration</th>

																			
																			<td><input required style='color: black;' name='duration' type='text'> </td>
																		</tr>

																		
																	


																		<tr><th></th><td>
					<input class='btn btn-primary btn-block' type='submit' value='Submit' name='upload'>
																			</td>
																		</tr>
																		
</form>
<form action='multiple_prescription.php' method='POST'>


																		
<tr><th><input required style='color: black;' name='inputPrescription' type='number' placeholder='No. of Prescription'><input  style='color: black;' name='id' value='" .$id. "' hidden ></th>
<td>
					<input class='btn btn-primary btn-block' type='submit' value='Multiple Prescription' name='multiple'>
																			</td>
																		</tr>

</form>

																	</table>
																	
											</div>
</div>



										</div>
									</div>
								</div>



													</div>


									<!--next-->

<div class='form-group row'>
								<div class='panel-heading btn-info'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordion' href='#collapse5'>
											<h3 class='text-center'>Audio Prescription</h3></a>
										</h4>
									</div>
									<div id='collapse5' class='panel-collapse collapse'>
									<div class='panel-body'>
									<p class='text-center alert-danger well ' >Please follow the format. Use these keywords: Name, Dosage and Duration. The format of prescription is: Name = Medicine name 			     Dosage = .... 		Duration = .... 		Time for Prescription = ....   If there is an error in audio to text, edit the prescription when the speech stops. </p>
									<button class='btn btn-block btn-primary' onclick='startRecog();'><i class='fas fa-microphone'></i></button>
									<br>
									<form action='prescription_post.php' method='POST'>
										<input  style='color: black;' name='id' value='".$_GET['id']." ' type='hidden'>
									<textarea class='text-center' style='color:black;' name='textSpeech' rows='2' cols='106' id='result'></textarea><br>
									<button type='submit' class='btn btn-block btn-primary'>Submit</button> 
								</form>
												<p id='#demo'></p>
								<form action='multiple_prescription_speech.php' method='POST'>


																		
<tr><th><input required style='color: black;' name='inputPrescription' type='number' placeholder='No. of Prescription'><input  style='color: black;' name='id' value='" .$id. "' hidden ></th>
<td>
					<input class='btn btn-primary' type='submit' value='Multiple Prescription' name='multiple'>
																			</td>
																		</tr>

</form>
										

									</div>
								</div>
							</div>";
								}


							}


							?>



<script type="text/javascript">
									
									var r = document.getElementById('result');

									function startRecog() {

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
										r.innerHTML = 'Wait...Speak again';
									};

							}	else{

								r.innerHTML = 'Your browser is not supported.';

							}

							speechRecognizer.onspeechend = function () {

								speechRecognizer.stop();
								alert('Speech Stopped');
								
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

