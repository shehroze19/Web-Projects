<?php include("connection.php");
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
	<link rel="stylesheet" type="text/css" href="js/bootstrap-clockpicker.min.css">

	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	


	<?php 
	if(isset($_POST['submit']))
	{

		$specilization=$_POST['Doctorspecialization'];
		$doctor_uname=$_POST['doctor'];
		$patient_uname=$_SESSION['Username'];
		$fees=$_POST['fees'];
		$appdate=$_POST['appdate'];
		$time=$_POST['apptime'];
		$query=mysqli_query($con,"INSERT INTO `appointment`(`doctorSpecialization`, `doctor_uname`, `patient_uname`, `Fees`, `appointmentDate`, `appointmentTime`) VALUES ('$specilization','$doctor_uname','$patient_uname','$fees','$appdate','$time')");




		if($query)
		{
			echo "<div class='btn btn-block btn-success'>Your appointment has been successfully booked</div>";
		}
		else{
			echo "<div class='btn btn-block btn-danger'>Error</div>";

		}

	}


	?>

	<style type="text/css">
label{
	color:white;
}	
</style>
</head>

<body class="bg-info" style="color:black;" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			<nav class="navbar navbar-default navbar-fixed-top">
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
								<li class=""><a  href="index.php">Home</a></li>
								<li class=""><a href="services.php">Services</a></li>
								<li class=""><a href="about.php">About</a></li>
								<li class="bg-success"><a style="color: black;" href="all_doctors.php">Doctors</a></li>



<div class="dropdown navbar-left hidden-md hidden-lg">
  <div style="color: white;padding-top: 13px;" class="btn  dropdown-toggle" type="button" data-toggle="dropdown">LOGIN / SIGN UP 
  <span class="caret"></span></div>
  <ul class="dropdown-menu">
    
<li class="text-center alert-info well"><strong>Login as</strong></li>

										<li class="text-center btn btn-default btn-block"><a href="login_patient.php" ><strong><i>Patient</i></strong></a></li>

										<li class="text-center btn btn-default btn-block"><a href="login_doctor.php"><strong><i>Doctor</i></strong></a></li>

										<br>

										<li class="text-center alert-success well"><strong>Sign  up as</strong></li>

										<li class="text-center btn btn-default btn-block"><a href="register_patient.php"><strong><i>Patient</i></strong></a></li>

										<li class="text-center btn btn-default btn-block"><a href="register_doctor.php"><strong><i>Doctor</i></strong></a></li>

  </ul>
</div>



	<div class="dropdown navbar-left hidden-xs hidden-sm">
									<li class="dropbtn">LOGIN / SIGN UP <b class="caret"></b></li>
									<div class="dropdown-content">

										<li class="text-center alert-info well"><strong>Login as</strong></li>

										<li class="text-center btn btn-default btn-block"><a href="login_patient.php" ><strong><i>Patient</i></strong></a></li>

										<li class="text-center btn btn-default btn-block"><a href="login_doctor.php"><strong><i>Doctor</i></strong></a></li>

										<br>

										<li class="text-center alert-success well"><strong>Sign  up as</strong></li>

										<li class="text-center btn btn-default btn-block"><a href="register_patient.php"><strong><i>Patient</i></strong></a></li>

										<li class="text-center btn btn-default btn-block"><a href="register_doctor.php"><strong><i>Doctor</i></strong></a></li>

									</div>
								</div>








								<li class=""><a href="Pharmacy/index.php">Pharmacy</a></li>
									<li class=""><a href="contact.php">Contact Us</a></li>



								<div class="dropdown navbar-left">
									<li class="dropbtn">Search Doctor <i class="fa fa-search"></i></b></li>
									<div class="dropdown-content">

										<li>

											<form class="" action="all_doctors_search.php" action="get" role="search">
												<div class="input-group">
													<input type="text" class="form-control" name="symbol" placeholder="By Name">
													<span class="input-group-btn">
														<button class="btn btn-default" type="Submit"><span class="fa fa-search"></span></button>
													</span>
												</div>

											</form>


										</li>

										<li class=""><a href="advancedsearch.php">Advanced Search</a></li>


									</div>
								</div>








							</ul>
						</div>
					</div>
				</div>
			</nav>
			<div class="container-fluid">

				<div class="row">
					




					<div style="padding-top: 100px;" class="">

<div class="container text-center">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View Timeslots</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Time slots used</h4>
        </div>
        <div class="modal-body">
          


									<table id="myTable"  class="table" border="2">
<tr>

											<th class='bg-primary text-center'>Appointment Date</th>
											<th class='bg-primary text-center'>Appointment Time</th>
											



											</tr>
										<?php 

									

						$doctor_id=$_GET['id'];

					$query="SELECT * FROM `doctors` where id='$doctor_id' ";
					$result=mysqli_query($con,$query);

					$row=mysqli_fetch_assoc($result);
					$uname=$row['username'];





										$result=mysqli_query($con,"SELECT * FROM `appointment` WHERE `doctor_uname`='$uname' ");


										while($row=mysqli_fetch_assoc($result)){

											echo "	
											<tr>
											<td class='text-center'> ".$row['appointmentDate']."</td>
											<td class='text-center'> ".$row['appointmentTime']."</td>";
											
										




											echo "</tr>";

										}
										?>



									</table> 

                  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
						
							<div class="col-md-12">
							<div class="row table-bordered">
					
	<?php

						$doctor_id=$_GET['id'];

					$query="SELECT * FROM `doctors` where id='$doctor_id' ";
					$result=mysqli_query($con,$query);

					
					if(isset($_SESSION['Username'])){





								while($row = mysqli_fetch_assoc($result))
								{



									echo "
									

									<div class=\"col-md-6 \">
									<div class=\"thumbnail\">";

									echo "<button class='btn btn-danger'><a href='all_doctors.php' style='color:black;'>Go Back</a></button>";

									if($row['picture']!=null){}
										else{
											$gender=trim(strtolower($row['gender']));
											if($gender=="male"){

											$row['picture']="male.jpg";


											}
											else{

											$row['picture']="female.jpg";

											}
										}

									echo "
									<img src=\"doctor_images/".$row['picture']."\" alt=\"...\"  style=\"width:300px;height:300px;\">
									<div class=\"caption\">
									<h2 class='text-center'><b>".$row['doctorName']."<b></h2><hr>
									<h5 class='text-center'><b>Fathers Name : ".$row['fatherName']."<b></h5><hr>
									<h4 class='text-center'>Specialization : <b>".$row['specilization']."</b></h4><hr>
									<h4 class='text-center'>Contact #:<b> ".$row['contactno']."</b></h4><hr>
									<h4 class='text-center'>Address : <b>".$row['address']."</h4><b><hr>
									<h4 class='text-center'>Email : <b>".$row['docEmail']."</h4><b><hr>
									<h4 class='text-center'>Fees :<b> ".$row['docFees']."</b></h4><hr>
									<h4 class='text-center'>Contact #:<b> ".$row['contactno']."</b></h4><hr>
									<h4 class='text-center'>Working Days :<b> ".$row['workingDays']."</b></h4><hr>
									<h4 class='text-center'>Time From :<b> ".$row['timeFrom']."</b></h4><hr>
									<h4 class='text-center'>Time To :<b> ".$row['timeTo']."</b></h4><hr>
									<h4 class='text-center'>Date Registered #:<b> ".$row['creationDate']."</b></h4><hr>
									<h4 class='text-center'>Clinic/Hospital :<b> ".$row['clinic']."</b></h4><hr>



									";




									echo "<h4 class='text-center'>Rating: ";
									$doc=$row['username'];
									$average = ("SELECT AVG(`rating`) AS average FROM `feedback` where `doc_uname`='$doc'");
									$result2 = mysqli_query($con,$average);

									while ($row2 = $result2->fetch_assoc()) {
										if($row2['average']==0){
											echo "Not Rated Yet";
										}
										else{

											$rating=(int)($row2['average']);

											if($rating==5){
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
											}
											if($rating>=4 && $rating<5){
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-o\">";
											}

											if($rating>=3 && $rating<4){
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}

											if($rating>=2 && $rating<3){
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";


											}

											if($rating>=1 && $rating<2){
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}

											if($rating==0 ){
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}


										}
										
									}

									echo "</h4><hr> 


								<h4 class='text-center'><a href='all_doctors.php'><button class='btn'>View All Doctors</button></a><h4>

								<h4 class='text-center '><a href='view_doctor.php?id=".$row['id']."'><button class='btn btn-info'>Book an Appointment</button></a></h4><hr>
					
<h4 class='text-center'>Qualifications:</h4>
														<ul class=\"list-inline\">";

$qualificaiton = ("SELECT qualificaiton AS qual FROM `doctors_qualification` where `doctor_uname`='$doc'");
$result4 = mysqli_query($con,$qualificaiton);
							while ($row3 = $result4->fetch_assoc()) {
								echo "<li class='text-center well btn-block'>".$row3['qual']."</li>";

							}	



														echo "
															<h4 class='text-center'>Reviews:</h4>
														<ul class=\"list-inline\">";

$reviews = ("SELECT review AS rev FROM `feedback` where `doc_uname`='$doc' limit 3");
$result3 = mysqli_query($con,$reviews);
							while ($row2 = $result3->fetch_assoc()) {
								echo "<li class='text-center well btn-block'>".$row2['rev']."</li>";

							}		

															
													echo 	"</ul>
													
														</ul>";}


					}
					else
					{

						echo "<script>window.alert('Please Login as Patient then come back again');</script>";

						echo "<script type='text/javascript'>
            window.location.href = 'login_patient.php'
        </script>";
					}

					







echo "

									</div>
									</div>
									</div>
									";


						





					


					?>
<div class="col-md-6"><br>

	<div style="color: white;" class="text-center">Confirm your Details</div>
	<form role="form" action="booking_complete.php"  method="post">


<?php 

						$doctor_id=$_GET['id'];

					$query="SELECT * FROM `doctors` where id='$doctor_id' ";
					$result=mysqli_query($con,$query);

					

								while($row = mysqli_fetch_assoc($result))
								{


echo "

																				<div class='form-group'>
																					<label class='text-center' for='DoctorSpecialization'>
																						Doctor Specialization

																					</label>
																					<input type='text' class='form-control'   value='".$row['specilization']."' class='form-control' name='specialization' readonly>
																					</div>




																					<div class='form-group'>
																						<label for='doctor'>
																							Doctors Name
																						</label>
																					<input type='text' class='form-control'   value='".$row['doctorName']."' class='form-control'  readonly>
																					</div>



																					<div class='form-group'>
																						
																					<input type='hidden'    value='".$row['username']."' class='form-control' name='doc_uname' >
																					</div>

	<div class='form-group'>
																						
																					<input type='hidden'    value='".$_SESSION['Username']."' class='form-control' name='patient_uname' >
																					</div>



	<div class='form-group'>
																						<label for='doctor_fees'>
																							Consultancy Fees
																						</label>
																					<input type='text' class='form-control'  name='fees'  value='".$row['docFees']."' class='form-control'  readonly>
																					</div>




																					<div class='form-group'>
																						<label for='AppointmentDate'>
																							Date
																						</label>
																						<input class='form-control datepicker'  id='userdate' name='appdate' onchange='TDate()' type='date' required='required'>
																						<script type='text/javascript'>
																							function TDate() {
																								var UserDate = document.getElementById('userdate').value;
																								var ToDate = new Date();

																								if (new Date(UserDate).getTime() <= ToDate.getTime()) {
																									alert('The Date must be Bigger or Equal to todays date');
																									return false;
																								}
																								return true;
																							}
																						</script>
																					</div>

																					<div class='form-group'>
																						<div class='form-group row'>
																							<div class='col-xs-12'><label  class='col-2 col-form-label'>Time From: (1 Hour Session)</label>
																								<div class='input-group clockpicker' data-autoclose='true'>";
date_default_timezone_set('Asia/Karachi');
																								echo	"<input type='time' class='form-control' name='apptime' value='".date('H:i')."' required>
																									<span class='input-group-addon'>
																										<span class='glyphicon glyphicon-time'></span>
																									</span>
																								</div>
																								<script type='text/javascript'>
																									$('.clockpicker').clockpicker();
																								</script>
																							</div>
																						</div>														

																						<button type='submit' id='submit' name='submit' class='btn btn-primary btn-block'>
																							Submit
																						</button>
																					</form>";




}

 ?>


</div>


</div></div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ banner-->
		<!-- slider start -->
	




			<!-- footer -->
			<div class="footer-line">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center alert-success">
							© Copyright Shehroze Aamer & Muhammad Abbas Afzal

						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--/ footer-->

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>




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
