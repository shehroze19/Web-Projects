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
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
						</div>
						<div class="banner-text text-center">


							<?php 
							if(count($_POST)>0){
								
								


if (isset($_POST['upload'])) {
	$target = "ocr_images/".basename($_FILES['image']['name']);



	$image = $_FILES['image']['name'];





}

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target) ) {
		
		$filename="ocr_images/".$image;
   		$mystring = passthru('Python36-32\python C:\wamp64\www\FYP\OCR.py '.$filename);
		$my_file = 'file.txt';
		$handle = fopen($my_file, 'r');
		$data = fread($handle,filesize($my_file));
//echo $data;
		fclose($handle);

function GetBetween($var1="",$var2="",$pool){
                $temp1 = strpos($pool,$var1)+strlen($var1);
                $result = substr($pool,$temp1,strlen($pool));
                $dd=strpos($result,$var2);
                if($dd == 0){
                    $dd = strlen($result);
                }

                return substr($result,0,$dd);
            }

$pmdcNo = GetBetween("Registration Number:","Name",$data);
$name = GetBetween("Name:","Father Name",$data);
$fName = GetBetween("Father Name:","Gender",$data);
$issueDate = GetBetween("Issue Date:","Institute/University",$data);
$validDate = GetBetween("Validity Date:","Qualification",$data);
$gender = GetBetween("Gender:","Date",$data);

			

			$selectedPMDC = $_SESSION['PMDC'];
//ocr variables
			$temp = preg_replace('/\s+/', '', $pmdcNo);
			$temp1 = preg_replace('/\s+/', '', $selectedPMDC);
			$temp2 = preg_replace('/\s+/', '', $name);
			$temp3 = preg_replace('/\s+/', '', $fName);
			$temp4 = preg_replace('/\s+/', '', $issueDate);
			$temp5 = preg_replace('/\s+/', '', $validDate);
			$temp6 = preg_replace('/\s+/', '', $gender);

			if(strcmp(strtolower($temp), strtolower($temp1))==0){

			$query = "SELECT `doctorName`,`fatherName`,`gender`,`issueDate`,`validityDate` FROM `doctors` WHERE `pmdcNo`='$selectedPMDC'";

			$runner = mysqli_query($con,$query);

				$array = mysqli_fetch_assoc($runner);
//scraped variables
				$dbtemp2 =preg_replace('/\s+/', '', $array['doctorName']);
				$dbtemp3 =preg_replace('/\s+/', '', $array['fatherName']);
				$dbtemp4 =preg_replace('/\s+/', '', $array['issueDate']);
				$dbtemp5 =preg_replace('/\s+/', '', $array['validityDate']);
				$dbtemp6 =preg_replace('/\s+/', '', $array['gender']);


				if((strcmp(strtolower($temp2),strtolower($dbtemp2))==0)					
					&& (strcmp(strtolower($temp4),strtolower($dbtemp4))==0) && 
					(strcmp(strtolower($temp5),strtolower($dbtemp5))==0) && 
					(strcmp(strtolower($temp6),strtolower($dbtemp6))==0)){

					$queryOcrStatus = "UPDATE `doctors` set `ocrStatus`='Verified' WHERE `pmdcNo` = '$selectedPMDC'";
				mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
					$runnerOcr = mysqli_query($con,$queryOcrStatus);

					echo "<div class='text-center btn-block btn-success'>Registration Complete</div>";
					echo "<meta http-equiv='refresh' content='4;url=login_doctor'>";


				}

				else {

					echo "Verification Failed";

					$query2="DELETE FROM `doctors` WHERE `pmdcNo`='$selectedPMDC'  ";

					$runner2 = mysqli_query($con,$query2);

					if($runner2){

					echo "deleted";

					}else{

					echo "failed";

					}

}


} else {


echo "Verification Failed";



	$query = "SELECT `username` FROM `doctors` WHERE `pmdcNo`='$selectedPMDC'";
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);



		$runner = mysqli_query($con,$query);

				$array = mysqli_fetch_assoc($runner);

				$usernameQualification = $array['username'];

$query2="DELETE FROM `doctors` WHERE `pmdcNo`='$selectedPMDC'  ";

$runner2 = mysqli_query($con,$query2);


$query3 = "DELETE FROM `doctors_qualification` WHERE `doctor_uname` = '$usernameQualification'";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$runner3 = mysqli_query($con,$query3);

if($runner2){



}else{



}

}

	}else{
		echo "Failed to upload image";
	}





									}
									

								
								
							
							else{
									echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";

									echo "<a href='register_doctor.php'>'<div class='btn btn-block alert-info'>Click here to go back</div></a>";

							}
							




							?>




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
