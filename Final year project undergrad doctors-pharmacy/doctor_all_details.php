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



	<style type="text/css">
		label{
			color: black;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap-clockpicker.min.css">


<script type="text/javascript">
	
	function working(){




var d1 = new Date (),
    d2 = new Date ( d1 );
d2.setMinutes ( d1.getMinutes() + 60 );
alert ( d2 );

	document.getElementById("test").innerHTML = d2.toString();
	;

  
	if (d2.getTime() <= d1.getTime()) {
	alert("The Date must be Bigger or Equal to todays date");
	return false;}
	return true;


									



		}

	

</script>

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

							$result=mysqli_query($con,"select * from doctors where username='$Username';");




							$data = mysqli_fetch_assoc($result);


							?>


											<a href="view_doctor_account.php"><button class="btn btn-info btn-block"><h3>View all Details</h3></button></a>


						<script type="text/javascript">window.alert("You will not be listed in the doctors section unless and until you completely fill in your information");</script>

							<div class="form-group row">
								<div class="panel-heading btn-danger">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
											<h3>Complete Your Information</h3></a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse">
										<div class="panel-body">

											
											<div class="main-content" >
												<div class="wrap-content container" id="container">


													
													<div class="container-fluid">
														<div class="row">
															<h3 class="white">Details</h3>

															<div class="col-md-12">

																<div class="col-md-12">
																	<div class="panel">
																		<div class="panel-body">

																			<form role="form" action="update_doctor_all_data.php" method="post"  >






																					



																					<div class="form-group">
																						<label>
																							Address 
																						</label>
																						<input class="form-control" size="254" pattern="([a-zA-Z0-9]| |,|/|\\|@|#|\$|%|&)+" type="text" name="address" required>
																					</div>



																					<div class="form-group">
																						<label>
																							Fees 
																						</label>
																						<input class="form-control" pattern="[0-9]" type="number" name="fees" required>
																					</div>


																					<div class="form-group">
																						<label>
																							Contact Number (5 to 15 digits)
																						</label>
																						<input class="form-control" pattern="[0-9]{5,15}" type="text" name="number" required>
																					</div>

																					<div class="form-group">
																						<label>
																						Email
																						</label>
																						<input class="form-control"  type="email" name="email" required>
																					</div>


																					<div class="form-group">
																						<label>
																						Clinic/Hospital
																						</label>
																						<input class="form-control"  type="text" name="clinic" required>
																					</div>



																						<div class="form-group">
																						<label>
																						Days Available
																						</label><br>



											<label>Monday</label> <input class="text-center btn btn-block" type="checkbox" name="days[]" value="Monday" > 
											<label>Tuesday</label> <input class="text-center btn btn-block" type="checkbox" name="days[]" value="Tuesday"> 
											<label>Wednesday</label> <input class="text-center btn btn-block" type="checkbox" name="days[]" value="Wednesday"> 
											<label>Thursday</label> <input class="text-center btn btn-block" type="checkbox" name="days[]" value="Thursday"> 
											<label>Friday</label> <input class="text-center btn btn-block" type="checkbox" name="days[]" value="Friday"> 
											<label>Saturday</label> <input class="text-center btn btn-block" type="checkbox" name="days[]" value="Saturday"> 
											<label>Sunday</label> <input class="text-center btn btn-block" type="checkbox" name="days[]" value="Sunday"> 

																					</div>



<div class="form-group">
																						<label>
																						City
																						</label>

																						<select class="form-control" value='<?php  echo $data['address'] ?>' name="city"><?php  echo $data['address'] ?>

					<?php 


					$result=mysqli_query($con,"select * from city");



					while($data = mysqli_fetch_assoc($result)){


						echo "<option name='city' value=";
						echo $data['city_name'];
						echo ">";
						echo $data['city_name'];
						echo  "</option>";


					}

					?>	

				</select>
																					</div>



<p style="color: black;" id="test">Time</p>

																					<div class="form-group">
																						<div class="form-group row">
																							<div class="col-xs-12"><label  class="col-2 col-form-label">Time From:</label>
																								<div class="input-group clockpicker" data-autoclose="true">
																									<input type="time" class="form-control" name="timefrom" value="<?php date_default_timezone_set('Asia/Karachi'); echo date('H:i'); ?>" onchange="working();" id='timefrom1' required>
																									<span class="input-group-addon">
																										<span class="glyphicon glyphicon-time"></span>
																									</span>
																								</div>
																								<script type="text/javascript">
																									$('.clockpicker').clockpicker();
																								</script>
																							</div>
																						</div>														



																					<div class="form-group">
																						<div class="form-group row">
																							<div class="col-xs-12"><label  class="col-2 col-form-label">Time To:</label>
																								<div class="input-group clockpicker" data-autoclose="true">
																									<input type="time" class="form-control" name="timeto" value="<?php date_default_timezone_set('Asia/Karachi'); echo date('H:i'); ?>" onchange="working();" id='timeto1' required>







																									<span class="input-group-addon">
																										<span class="glyphicon glyphicon-time"></span>
																									</span>
																								</div>
																								<script type="text/javascript">
																									$('.clockpicker').clockpicker();
																								</script>
																							</div>
																						</div>			





																						<button type="submit" name="submit" class="btn btn-o btn-primary">
																							Submit
																						</button>





																					</form>
																				</div>
																			</div>
																		</div>

																	</div>

																</div>
															</div>




														</div>
													</div>
												</div>






											</div>


											
										</div>
									</div>
								</div>
							</div>
						</section>





						<script src="js/custom.js"></script>

						<script type="text/javascript" src="js/jquery.min.js"></script>
						<script type="text/javascript" src="js/bootstrap.min.js"></script>
						<script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>
						<script type="text/javascript">
							$('.clockpicker').clockpicker()
							.find('input').change(function(){
								console.log(this.value);
							});
							var input = $('#single-input').clockpicker({
								placement: 'bottom',
								align: 'left',
								autoclose: true,
								'default': 'now'
							});

							$('.clockpicker-with-callbacks').clockpicker({
								donetext: 'Done',
								init: function() { 
									console.log("colorpicker initiated");
								},
								beforeShow: function() {
									console.log("before show");
								},
								afterShow: function() {
									console.log("after show");
								},
								beforeHide: function() {
									console.log("before hide");
								},
								afterHide: function() {
									console.log("after hide");
								},
								beforeHourSelect: function() {
									console.log("before hour selected");
								},
								afterHourSelect: function() {
									console.log("after hour selected");
								},
								beforeDone: function() {
									console.log("before done");
								},
								afterDone: function() {
									console.log("after done");
								}
							})
							.find('input').change(function(){
								console.log(this.value);
							});

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
	// Have to stop propagation here
	e.stopPropagation();
	input.clockpicker('show')
	.clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
	$('input').prop('readOnly', true);
}
</script>
<script type="text/javascript" src="js/highlight.min.js"></script>
<script type="text/javascript">
	hljs.configure({tabReplace: '    '});
	hljs.initHighlightingOnLoad();
</script>

</body>

</html>
