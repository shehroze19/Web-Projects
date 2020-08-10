<?php 
include("connection.php");

?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Register</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/style2.css">



</head>

<body>
	
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
						<li class=""><a href="doctors.php">Doctors</a></li>


						<li class="dropdown bg-info">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login / Sign up <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="login_doctor.php">Login</a></li>
								<li class="divider"></li>
								<li class="active"><a href="register_doctor.php">Sign Up</a></li>
							</ul>
						</li>



						<li class=""><a href="pharmacy.php">Pharmacy</a></li>
						<li class=""><a href="contact.php">Contact Us</a></li>


					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="wrapper">
		<div class="container">
			<h1>Registration as Doctor</h1>


			<?php

					$urlString="http://www.pmdc.org.pk//DesktopModules/pmdcDetails/PractDetail.aspx?RegistrationNo=";

					$pmdcGetReg=$_POST['pmdcNo'];

					$urlString = $urlString . $pmdcGetReg;

					$html = file_get_contents($urlString); 



					$our_doc = new DOMDocument();
					libxml_use_internal_errors(TRUE); //disable libxml errors
					if(!empty($html)){ //if any html is actually returned
				}

				$our_doc->loadHTML($html);

				libxml_clear_errors(); //remove errors for yucky html

				$our_xpath = new DOMXPath($our_doc);

				$our_row = $our_xpath->query('//table[@class]');
				
				$ourdata="";

				if($our_row->length > 0){
					
					foreach($our_row as $row){

						$ourdata=$ourdata.($row->nodeValue);

					}


				function GetBetween($var1="",$var2="",$pool){
				    $temp1 = strpos($pool,$var1)+strlen($var1);
				    $result = substr($pool,$temp1,strlen($pool));
				    $dd=strpos($result,$var2);
				    if($dd == 0){
				        $dd = strlen($result);
				    }

				    return substr($result,0,$dd);
				}
				echo "<br><br><br><br><br><br>";

				//echo $ourdata;
				$regno =GetBetween("Registration No.","Name",$ourdata);
				$name =GetBetween("Name","Father's Name",$ourdata);
				$fname =GetBetween("Father's Name","Issue Date",$ourdata);
				$issue_date =GetBetween("Issue Date","Validity",$ourdata);
				$valid_date =str_replace("Date", "", (GetBetween("Validity","Area",$ourdata)));
				$city =GetBetween("Area","GenderFemale",$ourdata);
				$gender =GetBetween("Gender","Qualification(s)",$ourdata);
				$qualification =GetBetween("Qualification(s)University","<br>",$ourdata);
				//echo $issue_date ."<br>" .$valid_date ."<br>";
				$checkPmdcNo = TRUE;

				if($regno==null || $regno==""){
					
					echo "<div class='text-center btn-danger'>Pmdc number is not valid</div>";

					$checkPmdcNo = false;

				}

				else {

					$checkPmdcNo = TRUE;
				}


				}




			 ?>

			
		<?php  


		if(count($_POST)>0 && $checkPmdcNo!=false){
			$PmdcNo=$_POST['pmdcNo'];
			$Name=$_POST['Name'];
			$Username=$_POST['Username'];
			$password=$_POST['Password'];
			$speciality = $_POST['Speciality'];
			$email=$_POST['Email'];
			$pass=md5($password);
session_start();

			$_SESSION['PMDC']=$PmdcNo;
			

			$query="INSERT INTO `doctors`(`pmdcNo`,`doctorName`, `docEmail`, `username`, `password`,`fatherName`,`issueDate`
			,`validityDate`,`gender`,`specilization`) VALUES ('$PmdcNo','$Name','$email','$Username','$pass','$fname','$issue_date',
			'$valid_date','$gender','$speciality')";

			
			$runner=mysqli_query($con,$query);
			if($runner){

				$query1 = "INSERT INTO `doctors_qualification`(`doctor_uname`,`qualificaiton`,`date_attained`) VALUES ('$Username','$qualification','$issue_date')";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
			$runner1= mysqli_query($con,$query1);

				echo "<br>";
				echo "<div class='text-center btn-success'>Step 1 Complete</div>";

				echo "<meta http-equiv='refresh' content='3;url=ocr_doctor.php'>";
				
						}
			else{
				echo "<div class='text-center btn-danger'>Error! An account with the same user name already exists</div>";
				
			}


		}
		else{
			echo "<meta http-equiv='refresh' content='3;url=register_doctor'>";
		}

		?>
		
			
			</div>



			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>


	</body>
	</html>
