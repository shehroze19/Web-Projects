<?php 
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Jami Mobiles</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	


</head>
<body>	

	<?php include("mainnavbar.php"); ?>
	<?php include("horizontal.php"); ?>
	<br>



	<div class="container-fluid">


		
		<div class="row">


			<div class="col-md-3">
				<?php include("sidebar.php"); ?>
				<iframe src="standard.php" style="height: 515px;" frameborder="0"></iframe>
				

				
				
			</div>
			<div class="col-md-6">

				<div class="row" >

					<div class="text-center">
						<h2 class="bg-primary">BRANDS</h2>
					</div>

					<?php

					$query="SELECT * FROM `brand` order by Name ";
					$result=mysqli_query($con,$query);

					while($row = mysqli_fetch_assoc($result))
					{


						echo "
						<div class='col-xs-6 table-bordered'>
							<a href='brand.php?name=".$row['Name']."' ><img src='brand_images/".$row['brand_image']."'  id='brands' class='img-responsive'/>


								<div class='text-center'>
									<div class='btn-success'>".$row['Name']."</div>


								</div>
							</a>
						</div>
						";
						

						





					}


					?>


					
					



				</div>


			</div>
			<div class="col-md-3">
				<iframe src="standard.php" style="height: 515px;" frameborder="0"></iframe>
				<?php include("sidebar.php"); ?>

				
			</div>

			





		</div>
		

	</div>
	
	
	

	<footer>
		<div class="container">
			<div class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

				<p>Disclaimer. Mobile Phone Prices / price list is updated daily from local Mobile shops & Mobile dealers in Pakistan but we can't guarantee that mobile prices / price list on this page is 100% correct (Human error is possible). Always visit your local shop for exact mobile prices.</p>						
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home fa"></i>Address: Niazi Plaza, Shop 10, 1st Floor, Bank Rd, Saddar, Rawalpindi 46000 </li>
						<li><i class="fa fa-phone fa"></i> Phone: (051) 5585194</li>
					</ul>
				</div>
			</div>

			

			
		</div>	
	</footer>
	
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>	
				</div>
			</div>
			
			<div class="col-md-4 col-md-offset-4">
				<div class="copyright">
					&copy; Jami Mobiles All Rights Reserved.
					<div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Day
                        -->
                    </div>
                </div>
            </div>						
        </div>				
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
    <script src="js/wow.min.js"></script>
    <script>wow = new WOW({}).init();</script>	
    
</body>
</html>