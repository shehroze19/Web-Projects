<?php
@include('session.php');

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


	<title>FFc</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	<!-- Custom styles for this template -->

	<link href="css/logsheets.css" rel="stylesheet">



</head>

<body>





	
	<div class="container-fluid">
		<?php 
		$day=$_POST['day'];
		$date_set=$_POST['date_set'];
		$internet=$_POST['internet'];
		$web=$_POST['web'];
		$tele=$_POST['tele'];
		$email=$_POST['email'];
		$comments=$_POST['comments'];
		$by=$_POST['by'];
		$to=$_POST['to'];




		$original_date=$_POST['original_date'];
		$user=$_POST['user'];
		$original_time=$_POST['original_time'];
		$additional_comments="";
		$pending=1;








		$query="INSERT INTO `local_services`(`Username`, `day`, `date`, `internet`, `website`, `email`, `telephone`, `comments`, `tested_by`, `verified_by`, `original_date`, `original_time`, `additional_comments`, `pending`) VALUES ('$user','$day','$date_set','$internet','$web','$email','$tele','$comments','$by','$to','$original_date','$original_time','$additional_comments','$pending')";
		$runner=mysqli_query($con,$query);


		if($runner){
			echo "<div class='btn btn-block alert-success'>Record Successfully Inserted</div>";
		}
		else{
			echo "<div class='btn btn-block alert-danger'>Error While Inserting Record</div>";


		}




		?>




	</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
