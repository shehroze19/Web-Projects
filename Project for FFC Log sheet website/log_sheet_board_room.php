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
			<h2>LOG SHEET BOARD ROOM / RAO FARMAN HALL</h2>

		</div>

		<form class="form-text" action="log_sheet_board_roomcomplete.php" method="post">





			<div class="container">


				<div class="form-group row"><label  class="col-2 col-form-label">Date:</label>
					<input class="form-control" type="date" value="<?php date_default_timezone_set("Asia/Karachi"); echo date("Y-m-d"); ?>" name="date_set" required></div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">VC</label>
						<div class="col-10">


							<select name="VC" class="form-control" >
								<option name="VC">No</option>
								<option name="VC">Yes</option>

							</select>

						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">Audio</label>
						<div class="col-10">


							<select name="Audio" class="form-control">
								<option name="Audio">No</option>
								<option name="Audio">Yes</option>

							</select>

						</div>
					</div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">Projector</label>
						<div class="col-10">


							<select name="Projector" class="form-control">
								<option name="Projector">No</option>
								<option name="Projector">Yes</option>

							</select>

						</div>
					</div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">Screen</label>
						<div class="col-10">


							<select name="Screen" class="form-control">
								<option name="Screen">No</option>
								<option name="Electricity">Yes</option>

							</select>

						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">Table Cabby</label>
						<div class="col-10">


							<select name="Table" class="form-control">
								<option name="Table">No</option>
								<option name="Table">Yes</option>
								
							</select>

						</div>
					</div>


					<div class="form-group row"><label  class="col-2 col-form-label">Activity</label>
						<textarea class="form-control" type="text" name="Activity" required></textarea></div>

						<div class="form-group row"><label  class="col-2 col-form-label">Tested By</label>
							<input class="form-control" type="text" name="Tested" required></div>

							<div class="form-group row"><label  class="col-2 col-form-label">Verified By</label>
								<input class="form-control" type="text" name="Verified" required></div>

								<div class="form-group row"><label  class="col-2 col-form-label">Status</label>
									<input class="form-control" type="text" name="Status" required></div>













									<input type="hidden"  value="<?php echo $_SESSION['Username']; ?>" name="user">
									<input type="hidden"  value="<?php date_default_timezone_set("Asia/Karachi"); echo date("Y-m-d"); ?>" name="original_date">
									
									<input type="hidden"   value="<?php date_default_timezone_set("Asia/Karachi"); echo date("H:i"); ?>" name="original_time">
									<input  type="hidden" name="report_by" value="<?php echo $_SESSION['Name']; ?>" >

									<div class="form-group row"><input class="btn btn-info form-control" type="Submit" ></div>


								</div>
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
