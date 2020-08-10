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

				$no1=$_POST['studentid'];
				$schol=$_POST['scholorshipname'];
				$award=$_POST['awardname'];
				$sports=$_POST['sportsname'];
				$other=$_POST['other'];
				$GPA=$_POST['GPA'];

				$no=(int)$no1;





				$query1="INSERT INTO  `reward_system`(`r_id`, `scholarship_reward`, `option1`, `option2`, `option3`, `otherdetail`) VALUES
				 ($no,'$schol','$award','$sports','$other','$GPA')";





				$run=mysqli_query($con,$query1);

				
								if($run){
echo "Data Recorded Successfully ! <br>Thank you for your time!";
echo "<br> Your id is : ".$no;
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
