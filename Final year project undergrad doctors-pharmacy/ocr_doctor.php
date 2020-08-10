<?php 
include('connection.php');

session_start();

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
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

<style type="text/css">
	   .navbar-default {
   background: rgba(28,74,90, 1);
    border: 0px;

    height: 80px;
}

@media only screen and (max-width: 766px) {
.collapsing, .in {background-color:rgba(28,74,90, 1) ;}

}

</style>



</head>

<body class="bg-info" style="color:black" data-spy="scroll" data-target=".navbar" data-offset="60">


		<nav class="navbar navbar-default alert-success navbar-fixed-top">
		<div class="container">
			<div class="col-md-12">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="img/ezlogo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li ><a href="index.php">Home</a></li>
						<li class=""><a href="services.php">Services</a></li>
						<li class=""><a href="about.php">About</a></li>
						<li class=""><a href="all_doctors.php">Doctors</a></li>


						<li class="dropdown btn-success">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login / Sign up <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="active"><a href="login_doctor.php">Login</a></li>
								<li class="divider"></li>
								<li ><a href="register_doctor.php">Sign Up</a></li>
							</ul>
						</li>



								<li class=""><a href="Pharmacy/index.php">Pharmacy</a></li>
				
						<li class=""><a href="contact.php">Contact Us</a></li>


					</ul>
				</div>
			</div>
		</div>
	</nav>







	<!--banner-->
	<?php 

	if(!isset($_SESSION['username'])){

	echo "<section id='banner' class='banner'>
		<div class='bg-color'>
			
			<div class='container'>
				<div class='row'>
					<div class='banner-info'>
						<div class='banner-logo text-center'>
						</div>
						<div class='banner-text text-center'>
							
							
<h2> Upload a valid document for verification</h2>

<br><br><br><br>



	<div class='form-group row'>
								<div class='panel-heading btn-info'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordion' href='#collapse4'>
											<h3>Upload Document</h3></a>
										</h4>
									</div>
									<div id='collapse4' class='panel-collapse collapse'>
										<div class='panel-body'>

											<div class='form-group row'>
<div class='container'>

											

<form action='ocr_doctor_update.php' method='POST'  enctype='multipart/form-data'>

																		<div class='thumbnail'>
																			

	<label  class='col-2 col-form-label'>Image</label>

<input type='hidden' name='size' value='1000000'>

						<input class='form-control' name='image' type='file' accept='image/*' onchange='loadFile(event)'>

						<div class='thumbnail col-md-12'><img id='output'  class='img-thumbnail' /></div>

						<script>
						var loadFile = function(event) {
							var output = document.getElementById('output');
							output.src = URL.createObjectURL(event.target.files[0]);
						};


					</script>



																	
					<input class='btn btn-primary btn-block' type='submit' value='Upload' name='upload'>
																	
																	</form>
											</div>
</div>



										</div>
									</div>
								</div>



													</div>


													<div class='overlay-detail text-center'>
														<a href='#'><i class='fa fa-angle-up'></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>";
							}

							else {

								echo "<section id='banner' class='banner'>
		<div class='bg-color'>
			
			<div class='container'>
				<div class='row'>
					<div class='banner-info'>
						<div class='banner-logo text-center'>
						</div>
						<div class='banner-text text-center'>
							
								</div>

								<div class='btn btn-block alert-success'>Not accessible.
										<a href='register_doctor.php'><span class='btn btn-danger'>Go Back</span></a>
										</div> <br>

													<div class='overlay-detail text-center'>
														<a href='#'><i class='fa fa-angle-up'></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>";

							}

	 ?>




								<script src="js/jquery.min.js"></script>
								<script src="js/bootstrap.min.js"></script>
								<script src="js/custom.js"></script>

							</body>

							</html>
