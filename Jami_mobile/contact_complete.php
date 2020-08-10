<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
	<link href="css/contact.css" rel="stylesheet" />	

</head>
<body class="btn-primary">	
	<?php  include("mainnavbar.php") ?> 


	<section id="contact">
		<div class="section-content">
			<h1 class="section-header">Contact Us</h1>
		</div>
		<div class="contact-section">
			<div class="container">
				
				<?php 
				$name=$_POST['name'];
				$email=$_POST['Email'];
				$mobile=$_POST['mobile'];
				$message=$_POST['message'];

				$query="INSERT INTO `contact_form`(`Name`, `Email`, `Mobile`, `Message`) VALUES ('$name','$email','$mobile','$message');";


				$runner=mysqli_query($con,$query);


				if($runner){
					echo "<div class='btn btn-block alert-success'>Thank you! We will contact you in due time.</div>";
				}
				else{
					echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";


				}

				

				?>

			</div>

			<div class="col-md-12 wow fadeInDown text-center" data-wow-duration="1000ms" data-wow-delay="300ms">

				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home fa"></i>Address: Niazi Plaza, Shop 10, 1st Floor, Bank Rd, Saddar, Rawalpindi 46000 </li>
						<li><i class="fa fa-phone fa"></i> Phone: (051) 5585194</li>
					</ul>

				</div>
			</div>
		</section>







		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.js"></script>		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>	

	</body>
	</html>