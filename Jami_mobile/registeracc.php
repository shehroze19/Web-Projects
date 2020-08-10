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
	
	<?php include("navbar.php"); ?>


	<div class="wrapper">
		<div class="container">
			<h1>Sign Up</h1>

			<form action="completeregister.php" method="post" class="form">
				<input type="text" placeholder="Name" name="Name" required>
				<input type="text" placeholder="Username" name="Username"  required>
				<input type="password" placeholder="Password" name="Password"  required>
				<input type="email" placeholder="Email" name="Email"  required>
				<input type="password" placeholder="Secret Code" name="code"  required>

				<div>


					<button type="submit">Register Details</button>
					<br>
					<?php echo @$error; ?>
				</form>
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
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

		<script src="js/index.js"></script>


	</body>
	</html>
