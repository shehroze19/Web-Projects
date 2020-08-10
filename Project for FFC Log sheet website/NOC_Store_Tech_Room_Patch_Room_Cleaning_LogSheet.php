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
			<h2>NOC Store, Tech Room & PACH ROOM CLEANING LOG SHEET</h2>

		</div>


		<form class="form-text" action="NOC_Store_Tech_Room_Patch_Room_Cleaning_LogSheetcomplete.php" method="post">





			<div class="container">


				<div class="form-group row"><label  class="col-2 col-form-label">Date:</label>
					<input class="form-control" type="date" value="<?php date_default_timezone_set("Asia/Karachi"); echo date("Y-m-d"); ?>" name="date" required></div>



					

					<div class="form-group row"><label  class="col-2 col-form-label">NOC Store</label>
						<input class="form-control" type="text" name="NOC_Store" required></div>

						<div class="form-group row"><label  class="col-2 col-form-label">Tech Room</label>
							<textarea class="form-control" type="text" name="Tech_Room" required></textarea></div>

							<div class="form-group row"><label  class="col-2 col-form-label">Patch Room</label>
								<input class="form-control" type="text" name="Patch_Room" required></div>

								<div class="form-group row"><label  class="col-2 col-form-label">Duty Personal</label>
									<input class="form-control" type="text" name="Duty_Personal" required></div>

									<div class="form-group row"><label  class="col-2 col-form-label">Supervised By</label>
										<input class="form-control" type="text" name="Supervised_By" required></div>



										


										<input type="hidden"  value="<?php echo $_SESSION['Username']; ?>" name="user">
										<input type="hidden"  value="<?php date_default_timezone_set("Asia/Karachi"); echo date("Y-m-d"); ?>" name="original_date">
										
										<input type="hidden"   value="<?php date_default_timezone_set("Asia/Karachi"); echo date("H:i"); ?>" name="original_time">
										<input  type="hidden" name="report_by" value="<?php echo $_SESSION['Name']; ?>" >

										<div class="form-group row"><input class="btn btn-info form-control" type="Submit" ></div>


									</div>
								</form>



								<div>
									<label  class="text-left">Note:</label>

									<h6 class="text-center" >a) All issues/incidents must be reported to SM - IS and Duty Officer immedediately.</h6>


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
