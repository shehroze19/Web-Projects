<?php include("connection.php"); ?>
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



								<div class="dropdown navbar-left hidden-xs hidden-sm">
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





<div class="dropdown navbar-left hidden-md hidden-lg">
  <div style="color: white;padding-top: 13px;" class="btn btn-info  dropdown-toggle" type="button" data-toggle="dropdown">Search a Doctor
  <span class="caret"></span></div>
  <ul class="dropdown-menu">
    
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

										<li class="btn btn-info"><a style="color: black;" href="advancedsearch.php">Advanced Search</a></li>


  </ul>
</div>




							</ul>
						</div>
					</div>
				</div>
			</nav>
			<div class="container-fluid">

				<div class="row">
					




					<div style="padding-top: 100px;" class="">

						<div class="col-md-1 hidden-sm hidden-xs">
<div class="sidebar-nav-fixed affix">
                <div class="well">
                    <ul class="nav ">
                          <li class="active"><a href="all_doctors_search.php?symbol=A">A</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=B">B</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=C">C</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=D">D</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=E">E</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=F">F</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=G">G</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=H">H</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=I">I</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=J">J</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=K">K</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=L">L</a></li>
                        <li class="active"><a href="all_doctors_search.php?symbol=M">M</a></li>
                       
                    </ul>
                </div>
                <!--/.well -->
            </div>
            <!--/sidebar-nav-fixed -->

							</div>
							<div class="col-md-10">
							<div class="row table-bordered">
					
	<?php

						$doctor_s=$_GET['symbol'];

					$query="SELECT * FROM `doctors` where clinic like '$doctor_s%' AND  updatedInfo!='' order by doctorName ";
					$result=mysqli_query($con,$query);

					

					











								while($row = mysqli_fetch_assoc($result))
								{


									echo "
									

									<div class=\"col-md-3 col-sm-3 col-xs-6\">
									<div class=\"thumbnail\">";

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
									<h5 class='text-center' style='font-size:16px;'><b>".$row['doctorName']."</b></h5>
									<h6 class='text-center'>Specialization : <b>".$row['specilization']."</b></h6>
									<h6 class='text-center'>Contact #:<b> ".$row['contactno']."</b></h6>
									<h6 class='text-center'>Address : <b>".$row['address']."</h6></b>";


									echo "<h4 class='text-center hidden-xs hidden-sm'><hr><b>Rating</b> <br>";
									$doc=$row['username'];
									$average = ("SELECT AVG(`rating`) AS average FROM `feedback` where `doc_uname`='$doc'");


									

									$result2 = mysqli_query($con,$average);

								
									while ($row2 = $result2->fetch_assoc()) {
										if($row2['average']==0){
											echo "Not Rated Yet";
										}
										else{

$rating=$row2['average'];
											

											if($rating>=4.75){
													#for 5 stars

												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
											}

												if($rating>=4.25 && $rating<4.75){

													#for 4.5 stars

												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-half-o\">";
											}


											if($rating>=3.75 && $rating<4.25){

													#for 4 stars

												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-o\">";
											}


											if($rating>=3.25 && $rating<3.75){

													#for 3.5 stars


												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-half-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}



											if($rating>=2.75 && $rating<3.25){

													#for 3 stars


												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}

											if($rating>=2.25 && $rating<2.75){

													#for 2.5 stars


												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-half-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";


											}

											if($rating>=1.75 && $rating<2.25){

													#for 2 stars


												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}


											if($rating>=1.25 && $rating<1.75){

													#for 1.5 stars


												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-half-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}


											if($rating>=0.75 && $rating<1.25){

													#for 1 stars


												echo " <span class=\"fa fa-star\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}


											if($rating>=0.25 && $rating<0.75){

													#for 0.5 stars


												echo " <span class=\"fa fa-star-half-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}


											if($rating>=0 && $rating<0.25){
											


													#for 0 stars

												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";
												echo " <span class=\"fa fa-star-o\">";

											}


										}
										
									}
$all = ("SELECT * FROM `feedback` where `doc_uname`='$doc'");

									$runner=mysqli_query($con,$all);
									$num_rows = mysqli_num_rows($runner);

									if($num_rows!=0){
										echo " (".$num_rows."";
echo " reviews)";
									}

									
									echo "</h4> 


								<h4 class='text-center'><a href='view_doctor.php?id=".$row['id']."'><button class='btn'>View all Details</button></a><h4>	

								<h4 class='text-center '><a href='booking.php?id=".$row['id']."'><button class='btn-sm btn-info'>Book an Appointment</button></a></h4>
					
					


									</div>
									</div>
									</div>
									";
									

									





								}


								?>

							</div></div>
							<div class="col-md-1 hidden-sm hidden-xs">
								<div class="sidebar-nav-fixed affix">
									<div class="well">
										<ul class="nav ">
											<li class="active"><a href="all_doctors_search.php?symbol=N">N</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=O">O</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=P">P</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=Q">Q</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=R">R</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=S">S</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=T">T</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=U">U</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=V">V</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=W">W</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=X">X</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=Y">Y</a></li>
											<li class="active"><a href="all_doctors_search.php?symbol=Z">Z</a></li>
											
										</ul>
									</div>
									<!--/.well -->
								</div>
								<!--/sidebar-nav-fixed -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>


	




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

	</body>

	</html>
