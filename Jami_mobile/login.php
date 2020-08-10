<?php 
include("connection.php");


session_start();

if($_SESSION['Username']!=null){

	$sessionuser=$_SESSION['Username'];
	$query="SELECT Name FROM admin_control_panel where Username='$sessionuser'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);
	if($count == 1) {
		
		header("location: welcome.php");
	}

}

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

	$myusername = mysqli_real_escape_string($con,$_POST['username']);
	$mypass = mysqli_real_escape_string($con,$_POST['password']); 
	$mypassword=md5($mypass);

	$query="SELECT Name FROM admin_control_panel where Username='$myusername' AND Password='$mypassword'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) {




		$_SESSION['Username'] = $myusername;
		$type=$row['Type'];
		$_SESSION['Name']=$row['Name'];

		$name=$row['Name'];
		




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

	<link rel="stylesheet" href="css/style2.css">


</head>

<body>
	
	<?php include("navbar.php"); ?>


	<div class="wrapper">
		<div class="container">
			<h1>Welcome</h1>

			<form action="" method="post" class="form"  autocomplete="on">
				<input type="text" placeholder="Username" name="username" required>
				<input type="password" placeholder="Password" name="password"  required>
				<button type="submit">Login</button>
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
