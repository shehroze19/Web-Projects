<?php include("connection.php"); 
@include('session_doctor.php');

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
	
</style>
</head>

<body class="bg-info" style="color:black;" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container-fluid">

				<div class="row">
					




					<div style="padding-top: 100px;" class="">

						
							<div class="col-md-12">
							<div class="row table-bordered">
					
	<?php

							$user=$_SESSION['username'];

						

					$query="SELECT * FROM `doctors` where username='$user' ";
					$result=mysqli_query($con,$query);

					

					









								while($row = mysqli_fetch_assoc($result))
								{



									echo "
									

									<div class=\"col-md-12 col-sm-12 col-xs-12\">
									<div class=\"thumbnail\">";

									echo "<button class='btn btn-danger'><a href='doctor_all_details.php' style='color:black;'>Go Back</a></button>";

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


							
					
<h4 class='text-center'>Qualifications:</h4>
														<ul class=\"list-inline\">";

$qualificaiton = ("SELECT qualificaiton AS qual FROM `doctors_qualification` where `doctor_uname`='$doc'");
$result4 = mysqli_query($con,$qualificaiton);
							while ($row3 = $result4->fetch_assoc()) {
								echo "<li class='text-center well btn-block'>".$row3['qual']."</li>";

							}	



														echo "
															
														</ul>




<h4 class='text-center'>Reviews:</h4>
														<ul class=\"list-inline\">";

$reviews = ("SELECT review AS rev FROM `feedback` where `doc_uname`='$doc'");
$result3 = mysqli_query($con,$reviews);
							while ($row2 = $result3->fetch_assoc()) {
								echo "<li class='text-center well btn-block'>".$row2['rev']."</li>";

							}		

															
													echo 	"</ul>
													



									</div>
									</div>
									</div>
									";



						





					}


					?>

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

	</body>

	</html>
