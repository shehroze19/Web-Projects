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

							$result=mysqli_query($con,"select * from patients where Username='$Username';");




							$data = mysqli_fetch_assoc($result);


							?>



							<div class="form-group row">
								<div class="panel-heading btn-info">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
											<h3>Account Details</h3></a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse">
										<div class="panel-body">

											<div class="form-group row">
<div class="container">

												<table  class="table">

													<tr class="">
														<th >Name Registered to</th>
														<td> <?php  echo $data['fullName'] ?></td>
													</tr>

													<tr >
														<th class="black">Username</th>
														<td> <?php  echo $data['username'] ?></td>
													</tr>


													<tr >
														<th class="black">Account Registered on</th>
														<td> <?php  echo $data['regDate'] ?></td>
													</tr>

													<tr >
														<th class="black">Account Type</th>
														<td>Patient</td>
													</tr>
												</table> 
											</div>
</div>



										</div>
									</div>
								</div>

								<div class="form-group row">
									<div class="panel-heading btn-info">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
												<h3>Personal Detail</h3></a>
											</h4>
										</div>
										<div id="collapse2" class="panel-collapse collapse">
											<div class="panel-body">

												<div class="form-group row">

<div class="container">

													<table  class="table">


														<tr class="">
															<th >Your Picture</th>
															<td>
																<div class="col-md-3 col-sm-3 col-xs-6">
																		<div class="thumbnail">
																			<img src="patient_images/<?php  echo $data['picture'] ?>" alt="..." class="image-responsive"></div></div> </td>
																		</tr>

																		<tr class="">
																			<th >Full Name</th>
																			<td> <?php  echo $data['fullName'] ?></td>
																		</tr>

																		<tr >
																			<th class="black">Age</th>
																			<td> <?php  echo $data['age'] ?></td>
																		</tr>

																		<tr >
																			<th class="black">Gender</th>
																			<td> <?php  echo $data['gender'] ?></td>
																		</tr>

																		<tr >
																			<th class="black">Address</th>
																			<td> <?php  echo $data['address'] ?></td>
																		</tr>

																		<tr >
																			<th class="black">City</th>
																			<td> <?php  echo $data['city'] ?></td>
																		</tr>

																		<tr >
																			<th class="black">Email</th>
																			<td> <?php  echo $data['email'] ?></td>
																		</tr>



																	</table> 
																</div>
</div>



															</div>
														</div>
													</div>




													<div class="form-group row">
														<div class="panel-heading btn-info">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
																	<h3>Change Password</h3></a>
																</h4>
															</div>
															<div id="collapse3" class="panel-collapse collapse">
																<div class="panel-body">

																	<div class="form-group row">

<div class="container">

																	<form action="password_patient.php" method="post" class="form-group">
																		<h3>Changing Password</h3>
																		<div class="form-group">
				<label class="control-label col-sm-4" for="email">Current Password</label>
				<div class="col-sm-8">
					<input type="password" class="form-control" name="pass1"  placeholder="Current password" required>
				</div>
			</div>


	<div class="form-group">
				<label class="control-label col-sm-4" for="email">Current Password again</label>
				<div class="col-sm-8">
					<input type="password" class="form-control" name="pass2"  placeholder="Current password again" required>
				</div>
			</div>

				<div class="form-group">
				<label class="control-label col-sm-4" for="email">New Password</label>
				<div class="col-sm-8">
					<input type="password" class="form-control" name="new_pass"  placeholder="New password" required>
				</div>
			</div>

				<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-8">
					<button type="submit" class="btn btn-default">Update Password</button>
				</div>
			</div>


																	</form>



																	</div>

</div>


																</div>
															</div>
														</div>







	<div class="form-group row">
								<div class="panel-heading btn-info">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
											<h3>Edit Personal Details</h3></a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">

											<div class="form-group row">
<div class="container">

											

													<table  class="table">
<form action="update_patient.php" method="POST"  enctype="multipart/form-data">

														<tr class="">
															<th >Your Picture</th>
															<td>
																<div class="col-md-3 col-sm-3 col-xs-6">
																		<div class="thumbnail">
																			<img src="patient_images/<?php  echo $data['picture'] ?>" alt="..." class="image-responsive"></div></div>

	<label  class="col-2 col-form-label">Image</label>

<input type="hidden" name="size" value="1000000">

						<input class="form-control" name="image" type="file" accept="image/*" onchange="loadFile(event)">

						<div class="thumbnail col-md-5"><img id="output"  class="img-thumbnail" /></div>

						<script>
						var loadFile = function(event) {
							var output = document.getElementById('output');
							output.src = URL.createObjectURL(event.target.files[0]);
						};


					</script>

																			</td>
																		</tr>

																		<tr class="">
																			<th >Full Name</th>
																			<td><input style="color: black;" name="fname" value="<?php  echo $data['fullName'] ?>" type="text"></td>
																		</tr>

																		<tr >
																			<th class="black">Age</th>
																			<td>
																			<input style="color: black;" name="age" value="<?php  echo $data['age'] ?>" type="text"> </td>
																		</tr>

																		<tr >
																			<th class="black">Gender</th>

																			
																			<td><select class="form-control" value='<?php  echo $data['gender'] ?>' name="gender"><?php  echo $data['address'] ?>

				<option name="gender" value="male">male</option>
				<option name="gender" value="female">female</option>
					?>	

				</select></td>
																		</tr>

																		<tr >
																			<th class="black">Address</th>

																			
																			<td><input style="color: black;" name="address" value="<?php  echo $data['address'] ?>" type="text"> </td>
																		</tr>

																		<tr >
																			<th class="black">City</th>

																		
																			<td> 	

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

				</select></td>
																		</tr>

																	


																		<tr><th></th><td>
					<input class="btn btn-primary btn-block" type="submit" value="Update" name="upload">
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
