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
							
							<?php 
							$Username=$_SESSION['Username'];

							$result=mysqli_query($con,"select * from doctors where Username='$Username';");




							$data = mysqli_fetch_assoc($result);


							?>



							
	<div class="form-group row">
								<div class="panel-heading btn-info">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
											<h3>Enter Feedback</h3></a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">

											<div class="form-group row">
<div class="container">

											

													<table  class="table">
<form action="feedback_post.php" method="POST"  >

													<tr class="">
															<th >Doctor ID</th>
															<td>

															<input  style="color: black;" name="id" value="<?php echo $_GET['id'] ?>" readonly>

																			</td>
																		</tr>



														<tr class="">
															<th >Rating</th>
															<td>

															<select name="rating" type='number' style="color: black;"> 
																
																<option disabled selected style="color: black;">Select Rating</option>
																<option value="1" style="color: black;">1 </option>
																<option value="2" style="color: black;">2</option>
																<option value="3" style="color: black;">3</option>
																<option value="4" style="color: black;">4</option>
																<option value="5" style="color: black;">5</option>
																


															</select>

																			</td>
																		</tr>

																		<tr class="">
																			<th >Review</th>
																			<td><input style="color: black;" name="review" type="text"></td>
																		</tr>

																	
																		
																	


																		<tr><th></th><td>
					<input class="btn btn-primary btn-block" type="submit" value="Submit" name="upload">
																			</td>
																		</tr>



																	</table>
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
