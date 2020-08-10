<?php
include('session.php');

if($_SESSION['user_type']!=="tech"){
	header("location:login.php");
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


	<title>FFc</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap-clockpicker.min.css">


	<!-- Custom styles for this template -->
	<link href="css/logsheets.css" rel="stylesheet">

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
	</style>


</head>

<body>






	
	<div class="container">


		<div class="page-header text-center">
			<h2>DC AIR CONDITIONING & IN-ROW COOLING LOG SHEET</h2>

			<h4 class="text-right">Internal Use Only</h4>
		</div>



		<form class="form-text" action="dc_air_conditioningcomplete.php" method="post">





			<div class="container">



				<div class="form-group row"><label  class="col-2 col-form-label">DATE</label>
					<input class="form-control" type="date" value="<?php date_default_timezone_set("Asia/Karachi"); echo date("Y-m-d"); ?>" name="date" required></div>



					<div class="form-group row">
						<label  class="col-2 col-form-label">TIME (FROM)</label>
						<div class="input-group clockpicker" data-autoclose="true">
							<input type="time" class="form-control" name="time_from" value="<?php date_default_timezone_set('Asia/Karachi'); echo date('H:i'); ?>" required>
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
						<script type="text/javascript">
							$('.clockpicker').clockpicker();
						</script>


					</div>





					<div class="form-group row">
						<label  class="col-2 col-form-label">TIME (TO)</label>
						<div class="input-group clockpicker" data-autoclose="true">
							<input type="time" class="form-control" name="time_to" value="<?php date_default_timezone_set('Asia/Karachi'); echo date('H:i'); ?>" required>
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
						<script type="text/javascript">
							$('.clockpicker').clockpicker();
						</script>


					</div>


					<input  type="hidden" name="Username" value="<?php echo $_SESSION['Username']; ?>" required>

					<label  class="col-2 col-form-label"> AC's (ON/OFF)</label><div class="form-group row">
					<div class="col-md-2">

						<label class="text-center">1</label><br>
						<input type='hidden' value='on' name='ac_1'>
						<input  type="checkbox" value="off" name="ac_1">

					</div>

					<div class="col-md-2">

						<label class="text-center">2</label><br>
						<input type='hidden' value='on' name='ac_2'>
						<input  type="checkbox" value="off" name="ac_2">

					</div>


					<div class="col-md-2">

						<label class="text-center">3</label><br>
						<input type='hidden' value='on' name='ac_3'>
						<input  type="checkbox" value="off" name="ac_3">

					</div>

					<div class="col-md-2">

						<label class="text-center">4</label><br>
						<input type='hidden' value='on' name='ac_4'>
						<input  type="checkbox" value="off" name="ac_4">

					</div>

					<div class="col-md-2">

						<label class="text-center">5</label><br>
						<input type='hidden' value='on' name='ac_5'>
						<input  type="checkbox" value="off" name="ac_5">

					</div>

					<div class="col-md-2">

						<label class="text-center">6</label><br>
						<input type='hidden' value='on' name='ac_6'>
						<input  type="checkbox" value="off" name="ac_6">

					</div>




				</div><br>

				<div class="form-group row"><label  class="col-2 col-form-label">AC's (OUT OF ORDER) </label>
					<input class="form-control"  type="text" name="ac_outof_order" required ></div><br>



					<label  class="alert-info">In row Status. <u>SMALL UNITS</u> </label>	
					<div class="form-group row">
						<div class="col-md-6  text-center"><label  class="alert-danger">TEMPERATURE</label>
							<div class="row">
								<div class="col-md-6"><label  class="col-2 col-form-label">Front Row</label><input class="form-control"
									type="text" name="in_row_small_front_row" required>
								</div>

								<div class="col-md-6"><label  class="col-2 col-form-label">Back Row</label><input class="form-control" type="text" name="in_row_small_back_row" required>
								</div>





							</div>


						</div>



						<div class="col-md-3">
							<label  class="col-2 col-form-label">Water Supply Pump Status L/min</label>
							<input class="form-control" type="text" name="water_supply_in_row_small" required>
						</div>

						<div class="col-md-3">
							<label  class="col-2 col-form-label">Chilled Water Temp. (must be less than 9 &deg;C)</label>
							<input class="form-control" type="text" name="chilled_water_temp_in_row_small" required>
						</div>


					</div><br><br>





					<label  class="alert-info">In row Status. <u>LARGE UNITS</u> </label>	
					<div class="form-group row">
						<div class="col-md-6  text-center"><label  class="alert-danger">TEMPERATURE</label>
							<div class="row">
								<div class="col-md-6"><label  class="col-2 col-form-label">Front Row</label><input class="form-control"
									type="text" name="in_row_large_front_row" required >
								</div>

								<div class="col-md-6"><label  class="col-2 col-form-label">Back Row</label><input class="form-control" type="text" name="in_row_large_back_row" required >
								</div>





							</div>


						</div>



						<div class="col-md-3">
							<label  class="col-2 col-form-label">Water Supply Pump Status L/min</label>
							<input class="form-control" type="text" name="water_supply_in_row_large" required >
						</div>

						<div class="col-md-3">
							<label  class="col-2 col-form-label">Chilled Water Temp. (must be less than 9 &deg;C)</label>
							<input class="form-control" type="text" name="chilled_water_temp_in_row_large" required >
						</div>


					</div>







					<div class="form-group row"><label  class="col-2 col-form-label">Data Center Temp (&deg;C)</label>
						<input class="form-control" type="text" name="data_center_temp" required ></div>

						<div class="form-group row"><label  class="col-2 col-form-label">Data Center Temp (&deg;C) (NEXUS)</label>
							<input class="form-control" type="text" name="data_center_temp_nexus"  required></div>

							<div class="form-group row"><label  class="col-2 col-form-label">Data Center Temp (&deg;C) (HOTILE)</label>
								<input class="form-control" type="text" name="data_center_temp_hotile" required></div>

								<div class="form-group row"><label  class="col-2 col-form-label">Data Center Temp (&deg;C) (COLDAILE)</label>
									<input class="form-control" type="text" name="data_center_temp_coldaile" required ></div>

									

									<div class="form-group row"><label  class="col-2 col-form-label">Humidity Front Site</label>
										<input  class="form-control" type="text" name="humidity_front_site"  required></div>


										
										<div class="form-group row"><label  class="col-2 col-form-label">Humidity Hot Oil Site</label>
											<input  class="form-control" type="text" name="humidity_hot_oil_site" required></div>



											<div class="form-group row"><label  class="col-2 col-form-label">Humidity Back Site</label>
												<input  class="form-control" type="text" name="humidity_back_site" required></div>


												<div class="form-group row"><label  class="col-2 col-form-label">SIGNATURE</label>
													<input class="form-control" type="text" name="signature" required></div>




													<div class="form-group row"><label  class="col-2 col-form-label">PROBLEM/ OTHER REMARKS (if any)</label>
														<input class="form-control" type="text" name="problems" required ></div>






														<input type="hidden"  value="<?php date_default_timezone_set("Asia/Karachi"); echo date("Y-m-d"); ?>" name="original_date">

														<input type="hidden"   value="<?php date_default_timezone_set("Asia/Karachi"); echo date("H:i"); ?>" name="original_time">


														<input  type="hidden" name="report_by" value="<?php echo $_SESSION['Name']; ?>" >








														<div class="form-group row"><input class="btn btn-info form-control" type="Submit" ></div>


													</div>
												</form>


												<div>
													<label  class="text-left">Note:</label>

													<h6 class="text-center" >a) All issues/incidents must be reported to M - IS and Duty Officer immedediately.</h6>
													<h6 class="text-center">b) All matters must be reported MIA personals,(Feisal : 0334 5764414, Zeeshan: 0306 4356519) immediately.</h6>
													<h6 class="text-center" >c) If temperature raised unto 24C then backup AC Units must power on as per requirement</h6>
													<h6 class="text-center" >d) In-case water pump stops, then power-on 2 x Backup AC Units and open the hot-aisle door</h6>

												</div>








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
