<?php 
include("connection.php");


session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

	$myusername = mysqli_real_escape_string($con,$_POST['username']);
	$mypass = mysqli_real_escape_string($con,$_POST['password']); 
    $mypassword=md5($mypass);

	$query="SELECT Name,Type FROM accounts where Username='$myusername' AND password='$mypassword'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) {

		$_SESSION['Username'] = $myusername;
		$_SESSION['user_type'] = $row['Type'];
		$_SESSION['Name']=$row['Name'];

		header("location: welcome.php");
	}else {
		$error = "Your Login Name or Password is invalid";
	}
}


?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css">


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

				<div>
				<h6>Type</h6>
				<select class="form-group btn" style="color:black;" placeholder="Type" name="type1">
										<option  value="tech" name="type1" >Tech</option>
										<option  value="officer" name="type1" >officer</option>
										<option  value="manager"  name="type1" >Manager</option>



									</select></div>
									<br><br>

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
