<?php
include('connection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze Aamer,Abbas Afzal" content="">


	<title>Logged in by <?php echo $_SESSION['Name']; ?></title>

	<!-- Bootstrap core CSS -->
	
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Custom styles for this template -->

	<link href="css/welcome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

<style type="text/css">
	   .navbar-default {
   background: rgba(28,74,90, 1);
    border: 0px;

    height: 80px;
}

@media only screen and (max-width: 766px) {
.collapsing, .in {background-color:rgba(28,74,90, 1) ;}

}

</style>



</head>

<body>




	
	<div class="container">






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


			</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>


</body>
</html>
