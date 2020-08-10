<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Contact</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
	<link href="css/contact.css" rel="stylesheet" />	

</head>
<body class="btn-primary">	


	<header id="header">
		<nav class="navbar navbar-default navbar-static-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
						<a href="index.php"><h1>Jami Mobiles</h1></a>
					</div>
				</div>				
				<div class="navbar-collapse collapse">							
					<div class="menu">

						<ul class="nav nav-tabs" role="tablist">




							<li role="presentation">

								<form class="navbar-form" action="search.php" action="" role="search">
									<div class="input-group add-on">
										<input class="form-control" placeholder="Search mobile by name" name="name" id="srch-term" type="text">
										<button class="btn btn-block" type="submit"><i class="glyphicon glyphicon-search"></i></button>
										<div class="input-group-btn">

										</div>
									</div>
								</form>

							</li>

							<li role="presentation"><a href="index.php" >Home</a></li>
							<li role="presentation"><a href="all_mobiles.php">All Mobile Phones</a></li>						

							<li role="presentation"><a href="login.php">Admin Panel</a></li>
							<li role="presentation"><a href="contact.php" class="active">Contact us</a></li>						
						</ul>
					</div>
				</div>		
			</div><!--/.container-->
		</nav><!--/nav-->		
	</header><!--/header-->	



	<section id="contact">
		<div class="section-content">
			<h1 class="section-header">Contact Us</h1>
		</div>
		<div class="contact-section">
			<div class="container">
				<form action="contact_complete" method="post">
					<div class="row container">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="exampleInputUsername">Your name</label>
								<input type="text" class="form-control" name="name" placeholder=" Enter Name" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail">Email Address</label>
								<input type="email" class="form-control" name="Email"  placeholder=" Enter Email id" required>
							</div>	
							<div class="form-group">
								<label for="telephone">Mobile No.</label>
								<input type="tel" class="form-control" name="mobile" placeholder=" Enter 10-digit mobile no.">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for ="description"> Message</label>
								<textarea  class="form-control" name="message" placeholder="Enter Your Message"></textarea>
							</div>
							<div>

								<button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
							</div>


							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13293.033498184013!2d73.0484404!3d33.5986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6b5512bc97a45a7!2sJami+Mobile+City!5e0!3m2!1sen!2s!4v1505602782657" style="height: 190px;width: 370px;"></iframe>
							</div>

						</div>
					</form>

				</div>

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