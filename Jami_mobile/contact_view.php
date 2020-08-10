<?php 
include("connection.php");
include("session.php");
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



	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	<!-- Custom styles for this template -->
	<link href="css/acp.css" rel="stylesheet">




</head>

<body style="color:white;">

	




	<div class="container-fluid">
		



		<div class="page-header text-center">
			<h2 style="color:white;">Contact Messages</h2>

			
		</div>


		
		





		<div class="row">

			<div class="col-md-3">
				<div class="text-center active" >Sent by</div>
			</div>

			<div class="col-md-3">
				<div class="text-center active" >Email</div>
			</div>

			<div class="col-md-3">
				<div class="text-center active" >Mobile Number</div>
			</div>

			<div class="col-md-3">
				<div class="text-center active" >Message</div>
			</div>

			<hr>











			<?php
			$user=$_SESSION['Username'];
			$query2="SELECT * from `contact_form` ";
			$result=mysqli_query($con,$query2);

			while($row = mysqli_fetch_assoc($result))
			{


				echo "<div class='col-md-3'>
				<div class='text-center btn-info' >" . $row['Name'] . "</div>
			</div>

			<div class='col-md-3'>
				<div class='text-center btn-primary' >" . $row['Email'] . "</div>
			</div>

			<div class='col-md-3'>
				<div class='text-center btn-success '>" . $row['Mobile'] . "</div>
			</div>

			<div class='col-md-3'>
				<div class='text-center btn-danger'>" . $row['Message'] . "</div>
			</div><hr><hr>";








		}
		?>












	</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
