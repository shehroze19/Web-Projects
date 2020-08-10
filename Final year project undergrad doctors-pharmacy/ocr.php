<?php 
include('connection.php');

@include('session.php');

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
							
							




	<div class="form-group row">
								<div class="panel-heading btn-info">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
											<h3>Upload Document</h3></a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">

											<div class="form-group row">
<div class="container">

											

<form action="update_patient.php" method="POST"  enctype="multipart/form-data">

																		<div class="thumbnail">
																			

	<label  class="col-2 col-form-label">Image</label>

<input type="hidden" name="size" value="1000000">

						<input class="form-control" name="image" type="file" accept="image/*" onchange="loadFile(event)">

						<div class="thumbnail col-md-12"><img id="output"  class="img-thumbnail" /></div>

						<script>
						var loadFile = function(event) {
							var output = document.getElementById('output');
							output.src = URL.createObjectURL(event.target.files[0]);
						};


					</script>



																	
					<input class="btn btn-primary btn-block" type="submit" value="Upload" name="upload">
																	
																	</form>
											</div>
</div>



										</div>
									</div>
								</div>



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
