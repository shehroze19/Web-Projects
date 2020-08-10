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
	<link rel="stylesheet" href="css/bootstrap.css" />


	<!-- Custom styles for this template -->
	<link href="css/logsheets.css" rel="stylesheet">

	




</head>

<body style="color:black;">


	



	
	<div class="container">

		
		<?php
		include("connection.php");

		$Username=$_SESSION['Username'];

		$result=mysqli_query($con,"select * from accounts where Username='$Username';");




		$data = mysqli_fetch_assoc($result);


		?>


		<div class="form-group row">
			<div class="page-header text-center">
				<h2>Account Details</h2>
			</div>

			<table class="table table-bordered">

				<tr class="active">
					<th >Name Registered to</th>
					<td> <?php  echo $data['Name'] ?></td>
				</tr>

				<tr class="active">
					<th class="black">Username Registered to</th>
					<td> <?php  echo $data['Username'] ?></td>
				</tr>

				<tr class="active">
					<th class="black">Account Type</th>
					<td> <?php  echo $data['Type'] ?></td>
				</tr>
			</table> 
		</div>


		
	</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>

    
</body>
</html>
