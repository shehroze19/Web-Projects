<?php
include('session.php');



$db = mysqli_connect("localhost","root", "", "jami_mobiles");

$msg = "";

if (isset($_POST['upload'])) {
	$target = "horizontal_ad_images/".basename($_FILES['image']['name']);



	$image = $_FILES['image']['name'];

	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$description=$_POST['description'];


	$sql = "INSERT INTO main_ad (image,description,Name) VALUES ('$image','$description', '$image_text')";
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target) ) {
		$msg = "Image uploaded successfully";
		echo "<div class='btn-primary text-center'>Ad Added</div><br><br><br>";
	}else{
		$msg = "Failed to upload image";
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

			<h2 class="form-group row text-center">Add Ad</h2><hr>

			

			<div class="form-group row text-center"><label  class="col-2 col-form-label">Description</label>
				<input class="form-control"   name="description" placeholder="if necessary"></div>


				<div class="form-group row text-center"><label  class="col-2 col-form-label">Name</label>
					<input class="form-control"   name="image_text" required></div>

					

					<div class="form-group row text-center">
						<label  class="col-2 col-form-label">Image</label>

						<input type="hidden" name="size" value="1000000">

						<input class="form-control" name="image" type="file" accept="image/*" onchange="loadFile(event)">
						<img id="output"  />







					</div>






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
