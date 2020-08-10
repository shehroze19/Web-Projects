<?php
include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze" content="">


	<title>Details</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	<!-- Custom styles for this template -->
	



</head>

<body>

	<div class="jumbotron">
		<div class="container">

			<div class="jumbotron">
				
				<?php


				$type_of_advanced_standing=$_POST['optradio'];
				$applying_as=$_POST['optradio2'];
				@$credit=$_POST['optradio3'];
				@$credit2=$_POST['optradio4'];
				$previous_inst=$_POST['prev_inst'];


				if($credit==null){
					$credit="None";
				}

				if($credit2==null){
					$credit2="None";
				}






				$studentid=$_POST['student_id'];
				$studentname=$_POST['student_name'];
				$familyname=$_POST['family_name'];
				$fathersname=$_POST['fathers_name'];
				$dateyearofstudy=$_POST['date_year_of_study'];
				$dateofbirth=$_POST['date_of_birth'];
				$email=$_POST['email1'];
				$mobile=$_POST['mobile_n'];
				$international_student=$_POST['it_student'];






				$query1="INSERT INTO `general_detail`(`question`, `answer1`, `answer2`, `answer3`, `answer4`, `previous_institute`) VALUES ('$studentid','$type_of_advanced_standing','$applying_as','$credit','$credit2','$previous_inst');";






				$query2="INSERT INTO `personal_detail`(`id`,`first_name`, `family_name`, `father_name`, `dob`, `mobile_no`, `Year_study`, `email`, `international_student`) VALUES ('$studentid','$studentname','$familyname','$fathersname','$dateofbirth','$mobile','$dateyearofstudy','$email','$international_student');";



				$nameofinstitute=$_POST['name_of_insti'];
				$coursetitle=$_POST['course_title'];
				$coursecode=$_POST['course_code'];
				$startingdate=$_POST['starting_date'];
				$endingdate=$_POST['ending_date'];
				$country=$_POST['country'];
				$Location=$_POST['Location'];





				$query3="INSERT INTO `course_detail`(`course_id`, `institute`, `course_title`, `course_code`, `start_date`, `end_date`, `country`, `location`) VALUES ('$studentid','$nameofinstitute','$coursetitle','$coursecode','$startingdate','$endingdate','country','Location');";











				$nameofcomp=$_POST['name_of_comp'];
				$dateworkedfrom=$_POST['date_worked_from'];
				$dateworkedto=$_POST['date_worked_to'];
				$positionandduties=$_POST['position_and_duties'];
				$learnngexp=$_POST['learnng_exp'];





				$query4="INSERT INTO `employment_history`(`e_id`, `company_name`, `worked_from`, `worked_upto`, `postion`, `other`) VALUES ('$studentid','$nameofcomp','$dateworkedfrom','$dateworkedto','$positionandduties','$learnngexp');
				";








				$evidence_details=$_POST['evidence_details'];
				$ceritificates=$_POST['ceritificates'];





				$query5="INSERT INTO `supporting_evidence`(`id`, `details`, `file`) VALUES ('$studentid','$evidence_details','$ceritificates');
				";







				$run1=mysqli_query($con,$query1);

				$run2=mysqli_query($con,$query2);

				$run3=mysqli_query($con,$query3);

				$run4=mysqli_query($con,$query4);

				$run5=mysqli_query($con,$query5);

				if($run1){
					if($run2){
						if($run3){
							if($run4){
								if($run5){
echo "Data Recorded Successfully ! <br>Thank you for your time! ".$studentname." ".$fathersname;
echo "<br> Your id is : ".$studentid;
								}
							}
						}
					}
				}
				else{
					echo "error";

				}




				?>


			</div>




		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
