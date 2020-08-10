<?php
include('session.php');
include('connection.php');



$msg = "";

if (isset($_POST['upload'])) {
	$target = "mobile_images/".basename($_FILES['image']['name']);



	$image = $_FILES['image']['name'];

	$image_text = mysqli_real_escape_string($con, $_POST['image_text']);
	$brand=$_POST['brand'];
	$price=$_POST['price'];


	$Technology=$_POST['Technology'];
	$Announced=$_POST['Announced'];
	$Year=$_POST['Year'];
	$Status=$_POST['Status'];
	$Month=$_POST['Month'];
	$OS=$_POST['OS'];
	$Protection=$_POST['Protection'];
	$CPU=$_POST['CPU'];
	$GPU=$_POST['GPU'];
	$Chipset=$_POST['Chipset'];
	$Dimensions=$_POST['Dimensions'];
	$SIM=$_POST['SIM'];
	$Display=$_POST['Display'];
	$Type=$_POST['Type'];
	$Size=$_POST['Size'];
	$Multitouch=$_POST['Multitouch'];
	$Resolution=$_POST['Resolution'];
	$GPRS=$_POST['GPRS'];
	$EDGE=$_POST['EDGE'];
	$G2_bands=$_POST['2G_bands'];
	$G3_bands=$_POST['3G_bands'];
	$G4_bands=$_POST['4G_bands'];
	$Weight=$_POST['Weight'];
	$Speed=$_POST['Speed'];
	$Video=$_POST['Video'];
	$Primary=$_POST['Primary'];
	$Secondary=$_POST['Secondary'];
	$Card_slot=$_POST['Card_slot'];
	$Internal=$_POST['Internal'];
	$Alert_types=$_POST['Alert_types'];
	$Audio_quality=$_POST['Audio_quality'];
	$Loudspeaker=$_POST['Loudspeaker'];
	$Battery_life=$_POST['Battery_life'];
	$Bluetooth=$_POST['Bluetooth'];
	$GPS=$_POST['GPS'];
	$NFC=$_POST['NFC'];
	$WLAN=$_POST['WLAN'];
	$Radio=$_POST['Radio'];
	$USB=$_POST['USB'];
	$Performance=$_POST['Performance'];
	$Keyboard=$_POST['Keyboard'];
	$Browser=$_POST['Browser'];
	$Messaging=$_POST['Messaging'];
	$Sensors=$_POST['Sensors'];
	$Java=$_POST['Java'];
	$Colors=$_POST['Colors'];
	


	

	$sql="INSERT INTO `mobiles`(`Name`,`brand`,`image`,`Price`,`Technology`,`Announced`,`Status`,`Year`,`Month`,`OS`,`Protection`,`CPU`,`GPU`,`Chipset`,`Dimensions`,`Weight`,`SIM`,`Display`,`Type`,`Size`,`Multitouch`,`Resolution`,`Speed`,`GPRS`,`EDGE`,`2G_bands`,`3G_bands`,`4G_bands`,`Video`,`Primary_`,`Secondary_`,`Card_slot`,`Internal`,`Alert_types`,`Audio_quality`,`Loudspeaker`,`Battery_life`,`Bluetooth`,`GPS`,`NFC`,`WLAN`,`Radio`,`USB`,`Performance`,`Keyboard`,`Browser`,`Messaging`,`Sensors`,`Java`,`Colors`) VALUES ('$image_text','$brand','$image','$price','$Technology','$Announced','$Status','$Year','$Month','$OS','$Protection','$CPU','$GPU','$Chipset','$Dimensions','$Weight','$SIM','$Display','$Type','$Size','$Multitouch','$Resolution','$Speed','$GPRS','$EDGE','$G2_bands','$G3_bands','$G4_bands','$Video','$Primary','$Secondary','$Card_slot','$Internal','$Alert_types','$Audio_quality','$Loudspeaker','$Battery_life','$Bluetooth','$GPS','$NFC','$WLAN','$Radio','$USB','$Performance','$Keyboard','$Browser','$Messaging','$Sensors','$Java','$Colors');";




	$runnerz=mysqli_query($con, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && $runnerz ) {
		$msg = "Image uploaded successfully";
		echo "<div class='btn-primary text-center'>Mobile Added</div><br><br><br>";
	}else{
		echo "<div class='btn-danger text-center'>Error</div><br><br><br>";
		
	}
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze" content="">



	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.css" />

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap-clockpicker.min.css">

	<!-- Custom styles for this template -->
	<link href="css/acp.css" rel="stylesheet">



	<style type="text/css">

		.footer {
			border-top: 1px solid #eee;
			margin-top: 40px;
			padding: 40px 0;
		}
		.input-group {
			width: 110px;
			margin-bottom: 10px;
		}
		.pull-center {
			margin-left: auto;
			margin-right: auto;
		}
		@media (min-width: 768px) {
			.container {
				max-width: 730px;
			}
		}
		@media (max-width: 767px) {
			.pull-center {
				float: right;
			}
		}

		#output,#output2{
			border: 0;
			width: 300px;
			height: 300px;
		}
		body{
			padding-top: 50px;
		}
	</style>


</head>

<body>






	
	<div class="container">


		<form method="POST"  enctype="multipart/form-data">

			<h2 class="form-group row text-center">Add Mobile</h2><hr>

			<div class="form-group row text-center"><label  class="col-2 col-form-label">Brand Name</label>
				<select class="form-control" name="brand">

					<?php 


					$result=mysqli_query($con,"select Name from brand");

					$runner=mysqli_query($con,$query);



					while($data = mysqli_fetch_assoc($result)){


						echo "<option name='to' value=";
						echo $data['Name'];
						echo ">";
						echo $data['Name'];
						echo  "</option>";


					}

					?>	

				</select>


			</div>


			<div class="form-group row text-center"><label  class="col-2 col-form-label">Name</label>
				<input class="form-control"   name="image_text" required></div>

				<div class="form-group row text-center"><label  class="col-2 col-form-label">Price</label>
					<input class="form-control" type="number"   name="price" required></div>


					<div class="form-group row text-center">
						<label  class="col-2 col-form-label">Image</label>

						<input type="hidden" name="size" value="1000000">

						<input class="form-control" name="image" type="file" accept="image/*" onchange="loadFile(event)">
						<img id="output"  />







					</div>

					<h4 class="form-group row text-center">Launch</h4><hr>


					<div class="form-group row text-center"><label  class="col-2 col-form-label">Technology</label>
						<input class="form-control"   name="Technology"></div>

						<div class="form-group row text-center"><label  class="col-2 col-form-label">Announced</label>
							<input class="form-control"   name="Announced"></div>

							<div class="form-group row text-center"><label  class="col-2 col-form-label">Status</label>
								<input class="form-control"   name="Status"></div>

								<div class="form-group row text-center"><label  class="col-2 col-form-label">Year</label>
									<input class="form-control"   name="Year"></div>


									<div class="form-group row text-center"><label  class="col-2 col-form-label">Month</label>
										<input class="form-control"   name="Month"></div>




										<h4 class="form-group row text-center">Platform</h4><hr>


										<div class="form-group row text-center"><label  class="col-2 col-form-label">OS</label>
											<input class="form-control"   name="OS"></div>

											<div class="form-group row text-center"><label  class="col-2 col-form-label">Protection</label>
												<input class="form-control"   name="Protection"></div>

												<div class="form-group row text-center"><label  class="col-2 col-form-label">CPU</label>
													<input class="form-control"   name="CPU"></div>

													<div class="form-group row text-center"><label  class="col-2 col-form-label">GPU</label>
														<input class="form-control"   name="GPU"></div>


														<div class="form-group row text-center"><label  class="col-2 col-form-label">Chipset</label>
															<input class="form-control"   name="Chipset"></div>



															<h4 class="form-group row text-center">Body</h4><hr>

															<div class="form-group row text-center"><label  class="col-2 col-form-label">Dimensions</label>
																<input class="form-control"   name="Dimensions"></div>

																<div class="form-group row text-center"><label  class="col-2 col-form-label">Weight</label>
																	<input class="form-control"   name="Weight"></div>

																	<div class="form-group row text-center"><label  class="col-2 col-form-label">SIM</label>
																		<input class="form-control"   name="SIM"></div>





																		<h4 class="form-group row text-center">Display</h4><hr>




																		<div class="form-group row text-center"><label  class="col-2 col-form-label">Display</label>
																			<input class="form-control"   name="Display"></div>

																			<div class="form-group row text-center"><label  class="col-2 col-form-label">Type</label>
																				<input class="form-control"   name="Type"></div>

																				<div class="form-group row text-center"><label  class="col-2 col-form-label">Size</label>
																					<input class="form-control"   name="Size"></div>

																					<div class="form-group row text-center"><label  class="col-2 col-form-label">Multitouch</label>
																						<input class="form-control"   name="Multitouch"></div>


																						<div class="form-group row text-center"><label  class="col-2 col-form-label">Resolution</label>
																							<input class="form-control"   name="Resolution"></div>









																							<h4 class="form-group row text-center">Network</h4><hr>




																							<div class="form-group row text-center"><label  class="col-2 col-form-label">Speed</label>
																								<input class="form-control"   name="Speed"></div>

																								<div class="form-group row text-center"><label  class="col-2 col-form-label">GPRS</label>
																									<input class="form-control"   name="GPRS"></div>

																									<div class="form-group row text-center"><label  class="col-2 col-form-label">EDGE</label>
																										<input class="form-control"   name="EDGE"></div>

																										<div class="form-group row text-center"><label  class="col-2 col-form-label">2G bands</label>
																											<input class="form-control"   name="2G_bands"></div>


																											<div class="form-group row text-center"><label  class="col-2 col-form-label">3G bands</label>
																												<input class="form-control"   name="3G_bands"></div>

																												<div class="form-group row text-center"><label  class="col-2 col-form-label">4G bands</label>
																													<input class="form-control"   name="4G_bands"></div>








																													<h4 class="form-group row text-center">Camera</h4><hr>




																													<div class="form-group row text-center"><label  class="col-2 col-form-label">Video</label>
																														<input class="form-control"   name="Video"></div>

																														<div class="form-group row text-center"><label  class="col-2 col-form-label">Primary</label>
																															<input class="form-control"   name="Primary"></div>

																															<div class="form-group row text-center"><label  class="col-2 col-form-label">Secondary</label>
																																<input class="form-control"   name="Secondary"></div>









																																<h4 class="form-group row text-center">Memory</h4><hr>




																																<div class="form-group row text-center"><label  class="col-2 col-form-label">Card slot</label>
																																	<input class="form-control"   name="Card_slot"></div>

																																	<div class="form-group row text-center"><label  class="col-2 col-form-label">Internal</label>
																																		<input class="form-control"   name="Internal"></div>




																																		<h4 class="form-group row text-center">Sound</h4><hr>




																																		<div class="form-group row text-center"><label  class="col-2 col-form-label">Alert types</label>
																																			<input class="form-control"   name="Alert_types"></div>

																																			<div class="form-group row text-center"><label  class="col-2 col-form-label">Audio quality</label>
																																				<input class="form-control"   name="Audio_quality"></div>

																																				<div class="form-group row text-center"><label  class="col-2 col-form-label">Loudspeaker</label>
																																					<input class="form-control"   name="Loudspeaker"></div>









																																					<h4 class="form-group row text-center">Battery</h4><hr>




																																					<div class="form-group row text-center"><label  class="col-2 col-form-label">Battery life</label>
																																						<input class="form-control"   name="Battery_life"></div>









																																						<h4 class="form-group row text-center">Comms</h4><hr>




																																						<div class="form-group row text-center"><label  class="col-2 col-form-label">Bluetooth</label>
																																							<input class="form-control"   name="Bluetooth"></div>

																																							<div class="form-group row text-center"><label  class="col-2 col-form-label">GPS</label>
																																								<input class="form-control"   name="GPS"></div>

																																								<div class="form-group row text-center"><label  class="col-2 col-form-label">NFC</label>
																																									<input class="form-control"   name="NFC"></div>



																																									<div class="form-group row text-center"><label  class="col-2 col-form-label">WLAN</label>
																																										<input class="form-control"   name="WLAN"></div>

																																										<div class="form-group row text-center"><label  class="col-2 col-form-label">Radio</label>
																																											<input class="form-control"   name="Radio"></div>

																																											<div class="form-group row text-center"><label  class="col-2 col-form-label">USB</label>
																																												<input class="form-control"   name="USB"></div>








																																												<h4 class="form-group row text-center">Features</h4><hr>




																																												<div class="form-group row text-center"><label  class="col-2 col-form-label">Performance</label>
																																													<input class="form-control"   name="Performance"></div>

																																													<div class="form-group row text-center"><label  class="col-2 col-form-label">Keyboard</label>
																																														<input class="form-control"   name="Keyboard"></div>

																																														<div class="form-group row text-center"><label  class="col-2 col-form-label">Browser</label>
																																															<input class="form-control"   name="Browser"></div>



																																															<div class="form-group row text-center"><label  class="col-2 col-form-label">Messaging</label>
																																																<input class="form-control"   name="Messaging"></div>

																																																<div class="form-group row text-center"><label  class="col-2 col-form-label">Sensors</label>
																																																	<input class="form-control"   name="Sensors"></div>

																																																	<div class="form-group row text-center"><label  class="col-2 col-form-label">Java</label>
																																																		<input class="form-control"   name="Java"></div>




																																																		<h4 class="form-group row text-center">Misc</h4><hr>




																																																		<div class="form-group row text-center"><label  class="col-2 col-form-label">Colors</label>
																																																			<input class="form-control"   name="Colors"></div>







																																																			<button class="btn btn-primary btn-block" type="submit" name="upload">Submit</button>




																																																			<script>
																																																				var loadFile = function(event) {
																																																					var output = document.getElementById('output');
																																																					output.src = URL.createObjectURL(event.target.files[0]);
																																																				};


																																																			</script>




																																																		</form>

																																																	</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"></script>



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
