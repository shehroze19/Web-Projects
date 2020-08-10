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
		$type=$row['Type'];
		$_SESSION['Name']=$row['Name'];
		$_SESSION['Email']=$row['email'];

		$name=$row['Name'];
		date_default_timezone_set("Asia/Karachi"); $date= date("Y-m-d");
		date_default_timezone_set("Asia/Karachi"); $time= date("H:i");


		$query="INSERT INTO `login_record`(`Username`, `Name`, `type`, `login_date`, `login_time`) VALUES ('$myusername','$name','$type','$date','$time')";


		$runner=mysqli_query($con,$query);


		if($runner){
			
		}
		else{
			


		}

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
