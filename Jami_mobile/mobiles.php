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
	<title><?php echo $_GET['name']; ?></title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	

<style>
	span,h2,body,div,h3{
		color: white;
	}

</style>
</head>
<body >	
	<?php include("mainnavbar.php") ?>


	<div class="container-fluid">
		



		<div class="row">


			<div class="col-md-2">
				<?php include("sidebar.php"); ?>
				
				
			</div>

			<div class="col-md-7">

				<div class="row" >
					<div class="text-center">
						<h2 class="bg-primary"> <?php
							$mobile=$_GET['name'];

							$query="SELECT * FROM `mobiles` where Name='$mobile'";
							$result=mysqli_query($con,$query);
							$count = mysqli_num_rows($result);


							if($count==0){

								echo "No Mobile Found";

							}else{

								$query="SELECT * FROM `mobiles` where Name='$mobile'  limit 1";
								$result=mysqli_query($con,$query);
								$row = mysqli_fetch_assoc($result);
								$english_format_number = number_format($row['Price']);
								echo "<span class='btn-success'>".$mobile."</span>";

								echo "<h2>Price     :  ".$english_format_number." RS </h2>";


								}?> 
							
							
								
							</div>

							<?php


							$mobile=$_GET['name'];

							$query="SELECT * FROM `mobiles` where Name='$mobile'";
							$result=mysqli_query($con,$query);
							$count = mysqli_num_rows($result);


							if($count>0){






								echo "<div class='col-md-7'><img src='mobile_images/".$row['image']."' class='img-responsive'/></div>";
								echo "<div class='col-md-5'> <div class='text-center'><h2>Main Features</h2></div>"; 

								echo "<div><h3><span class='glyphicon glyphicon-camera'></span>"."  ".$row['Primary_']."</div> </h3>   ";
								echo "<div><h3><span class='glyphicon glyphicon-calendar'></span>"."  ".$row['Announced']."</div></h3>     ";
								echo "<div><h3><span class='glyphicon glyphicon-phone'></span>"."  ".$row['Status']."</div></h3>     ";
								echo "<div><h3><span class='glyphicon glyphicon-floppy-disk'></span>"."  ".$row['Internal']."</div> </h3>    ";


								echo "</div>";


								echo "<div class='col-md-12'><h1>
								".$mobile." Detailed Specifications
							</h1></div>";



							$query2="SELECT * FROM `mobiles` where Name='$mobile'  limit 1";
							$result2=mysqli_query($con,$query2);
							$row2 = mysqli_fetch_array($result2);



							for ($x = 0; $x <count($row); $x++) {

								if($row2[$x]==null){
									$row2[$x]="N/A";
								}

							} 


							echo "<table class='table'>
							<tr>
								<th><h3>Launch<h3></th>
							</tr>
							<tbody>
								<tr>
									<td>Technology</td>
									<td>".$row2[5]."</td>
								</tr>
								<tr>
									<td>Announced</td>
									<td>".$row2[6]."</td>
								</tr>
								<tr>
									<td>Status</td>
									<td>".$row2[7]."</td>
								</tr>
								<tr>
									<td>Year</td>
									<td>".$row2[8]."</td>
								</tr>
								<tr>
									<td>Month</td>
									<td>".$row2[9]."</td>
								</tr>
							</tbody>


							<tr>
								<th><h3>Platform<h3></th>
							</tr>
							<tbody>


								<tr>
									<td>OS</td>
									<td>".$row2[10]."</td>
								</tr>
								<tr>
									<td>Protection</td>
									<td>".$row2[11]."</td>
								</tr>
								<tr>
									<td>CPU</td>
									<td>".$row2[12]."</td>
								</tr>
								<tr>
									<td>GPU</td>
									<td>".$row2[13]."</td>
								</tr>
								<tr>
									<td>Chipset</td>
									<td>".$row2[14]."</td>
								</tr>

							</tbody>






							<tr>
								<th><h3>Body<h3></th>
							</tr>
							<tbody>


								<tr>
									<td>Dimensions</td>
									<td>".$row2[15]."</td>
								</tr>
								<tr>
									<td>Weight</td>
									<td>".$row2[16]."</td>
								</tr>
								<tr>
									<td>SIM</td>
									<td>".$row2[17]."</td>
								</tr>


							</tbody>



							<tr>
								<th><h3>Display<h3></th>
							</tr>
							<tbody>


								<tr>
									<td>Display</td>
									<td>".$row2[18]."</td>
								</tr>
								<tr>
									<td>Type</td>
									<td>".$row2[19]."</td>
								</tr>
								<tr>
									<td>Size</td>
									<td>".$row2[20]."</td>
								</tr>

								<tr>
									<td>Multitouch</td>
									<td>".$row2[21]."</td>
								</tr>

								<tr>
									<td>Resolution</td>
									<td>".$row2[22]."</td>
								</tr>


							</tbody>




							<tr>
								<th><h3>Network<h3></th>
							</tr>
							<tbody>


								<tr>
									<td>Speed</td>
									<td>".$row2[23]."</td>
								</tr>
								<tr>
									<td>GPRS</td>
									<td>".$row2[24]."</td>
								</tr>
								<tr>
									<td>EDGE</td>
									<td>".$row2[25]."</td>
								</tr>

								<tr>
									<td>2G bands</td>
									<td>".$row2[26]."</td>
								</tr>

								<tr>
									<td>3G bands</td>
									<td>".$row2[27]."</td>
								</tr>

								<tr>
									<td>4G bands</td>
									<td>".$row2[28]."</td>
								</tr>



							</tbody>



							<tr>
								<th><h3>Camera<h3></th>
							</tr>
							<tbody>


								<tr>
									<td>Video</td>
									<td>".$row2[29]."</td>
								</tr>
								<tr>
									<td>Primary</td>
									<td>".$row2[30]."</td>
								</tr>
								<tr>
									<td>Secondary</td>
									<td>".$row2[31]."</td>
								</tr>





							</tbody>



							<th><h3>Memory<h3></th>
						</tr>
						<tbody>


							<tr>
								<td>Card slot</td>
								<td>".$row2[32]."</td>
							</tr>
							<tr>
								<td>Internal</td>
								<td>".$row2[33]."</td>
							</tr>






						</tbody>




						<th><h3>Sound<h3></th>
					</tr>
					<tbody>


						<tr>
							<td>Alert types</td>
							<td>".$row2[34]."</td>
						</tr>
						<tr>
							<td>Audio quality</td>
							<td>".$row2[35]."</td>
						</tr>

						<tr>
							<td>Loudspeaker</td>
							<td>".$row2[36]."</td>
						</tr>






					</tbody>


					<th><h3>Battery<h3></th>
				</tr>
				<tbody>


					<tr>
						<td>Battery life</td>
						<td>".$row2[37]."</td>
					</tr>






				</tbody>




				<th><h3>Comms<h3></th>
			</tr>
			<tbody>



				<tbody>


					<tr>
						<td>Bluetooth</td>
						<td>".$row2[38]."</td>
					</tr>
					<tr>
						<td>GPS</td>
						<td>".$row2[39]."</td>
					</tr>




					<tr>
						<td>NFC</td>
						<td>".$row2[40]."</td>
					</tr>
					<tr>
						<td>WLAN</td>
						<td>".$row2[41]."</td>
					</tr>

					<tr>
						<td>Radio</td>
						<td>".$row2[42]."</td>
					</tr>

					<tr>
						<td>USB</td>
						<td>".$row2[43]."</td>
					</tr>






				</tbody>







				<th><h3>Features<h3></th>
			</tr>
			<tbody>



				<tbody>


					<tr>
						<td>Performance</td>
						<td>".$row2[44]."</td>
					</tr>
					<tr>
						<td>Keyboard</td>
						<td>".$row2[45]."</td>
					</tr>

					<tr>
						<td>Browser</td>
						<td>".$row2[46]."</td>
					</tr>


					<tr>
						<td>Messaging</td>
						<td>".$row2[47]."</td>
					</tr>
					<tr>
						<td>Sensors</td>
						<td>".$row2[48]."</td>
					</tr>

					<tr>
						<td>Java</td>
						<td>".$row2[49]."</td>
					</tr>








				</tbody>






				<th><h3>Misc<h3></th>
			</tr>
			<tbody>



				<tbody>


					<tr>
						<td>Colors</td>
						<td>".$row2[50]."</td>
					</tr>









				</tbody>

			</table>";

}
else{

}

			?>








		</div>


	</div>

	<div class="col-md-3">
		<iframe src="standard.php" style="height: 515px" frameborder="0"></iframe>
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