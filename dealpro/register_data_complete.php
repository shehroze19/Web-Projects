<?php 
session_start();
include("connection.php");
?>
<!DOCTYPE html>

<html> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Deal Pro</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/fontello.css">
	<link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
	<link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/icheck.min_all.css">
	<link rel="stylesheet" href="assets/css/price-range.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">  
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/owl.transitions.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>


	

	<nav class="navbar navbar-default ">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="assets/img/dealpro.png" alt=""></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse yamm" id="navigation">
				<div class="button navbar-right">
					<button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('login.php','_self')" data-wow-delay="0.45s">Login</button>
					<button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('register.php','_self')" data-wow-delay="0.48s">Register</button>
				</div>
				<ul class="main-nav nav navbar-nav navbar-right">
					<li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="index.php">Home</a></li>
					
				<li class="wow fadeInDown" data-wow-delay="0.5s"><a href="about.php">About</a></li>
				<li class="wow fadeInDown" data-wow-delay="0.6s"><a href="contact.php">Contact</a></li>

			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->



<div class="page-head"> 
	<div class="container">
		<div class="row">
			<div class="page-head-content">
				<h1 class="page-title">Register Account</h1>               
			</div>
		</div>
	</div>
</div>
<!-- End page header -->


<div class="row">

	<div class="col-md-3"></div>
	<div class="col-md-6 alert-warning">
		<?php 

		if(count($_POST)>0){

			if (isset($_POST['upload'])) {
			$target = "users_images/".basename($_FILES['image']['name']);
			$image = $_FILES['image']['name'];
			$cname=$_POST['company_name'];
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$atype=$_POST['atype'];
			$city=$_POST['city'];
			$address=$_POST['address'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$user=$_POST['user'];
			$password=$_POST['password'];
			$pnumber=$_POST['pnumber'];
			$video=$_POST['video'];
			$about=$_POST['about'];
			$is_active=$_POST['active'];
			$encryptpass=md5($password);


			if (move_uploaded_file($_FILES['image']['tmp_name'], $target) ) {
		
	}else{
	}


			$city_result = mysqli_query($con,"SELECT `id` FROM `city` WHERE city_name='$city' ");
			$city_row = mysqli_fetch_array($city_result);
			$city_id=$city_row['id'];
			$c_result = mysqli_query($con,"SELECT `id`,`used` FROM `dealbook` WHERE company_name='$cname' ");
			$c_row = mysqli_fetch_array($c_result);
			$comp_id=$c_row['id'];
			$c_query=mysqli_query($con,"SELECT `used` FROM `dealbook` WHERE mobile='$phone' ");
			$used_row = mysqli_fetch_array($c_query);
			$used=$used_row['used'];

			$type="user";
			
			$query="INSERT INTO `users`(`user_type`, `first_name`, `last_name`, `profile_video`, `address`, `is_active`, `email`, `city_id`, `account_type`, `company_id`, `profile_picture`, `username`, `password`, `about`,`mobile`,`contacts`) VALUES ('$type','$firstname','$lastname','$video','$address','$is_active','$email','$city_id','$atype','$comp_id','$image','$user','$encryptpass','$about','$phone',0)";
			
			if($atype=='staff' && $used==1){
				
				$runner=mysqli_query($con,$query);
				$num=mysqli_query($con, "SELECT `id`,`date_added` FROM `users` WHERE username='$user'");
				$array=mysqli_fetch_assoc($num);

				$report="User ".$user." added as a staff on ".$array['date_added'];
                $uid=$array['id'];
                mysqli_query($con, "INSERT INTO `activities`(`user_id`, `description`) VALUES ('$uid','$report')");

				if($runner){ 
					
					$q1=mysqli_query($con, "SELECT `id` FROM `users` WHERE username='$user'");
				$sid = mysqli_fetch_assoc($q1);
					$q2=mysqli_query($con, "SELECT `id` FROM `users` WHERE mobile='$phone' AND account_type='owner'");
					$oid = mysqli_fetch_assoc($q2);
					$ownerid=$oid['id'];
					$staffid=$sid['id'];
					
					mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
					$relation=mysqli_query($con,"INSERT INTO `owner_staff`(`owner_id`, `staff_id`) VALUES ('$ownerid','$staffid')");
					
					echo "<div class='btn btn-block btn-success'>Staff account created. Please login to continue</div>";
				}
			}

			if($atype=='owner' && $used==0){
				
				$runner=mysqli_query($con,$query);
				$uquery="UPDATE `dealbook` SET `used`= 1 WHERE `mobile` = '$phone'";
				$runner2=mysqli_query($con,$uquery);
				if($runner2)
				{
					echo "<div class='btn btn-block btn-success'>Owner account created. Please login to continue.</div>";
				}
			}

			if($atype=='staff' && $used==0){
				
				echo "<div class='btn btn-block btn-danger '>Owner of this company don't exist</div>";
			}

			if($atype=='owner' && $used==1){
				
				echo "<div class='btn btn-block btn-danger '>Owner of this company already exist</div>";
			}
			
			

		}
}




		else{
			echo "<meta http-equiv='refresh' content='3;url=register'>";
		}


		?>
	</div>


</div>



<?php include("footer.php"); 
session_destroy();
?>


<script src="assets/js/modernizr-2.6.2.min.js"></script>

<script src="assets/js/jquery-1.10.2.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.js"></script>

<script src="assets/js/easypiechart.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>

<script src="assets/js/icheck.min.js"></script>
<script src="assets/js/price-range.js"></script>

<script src="assets/js/main.js"></script>

</body>
</html>