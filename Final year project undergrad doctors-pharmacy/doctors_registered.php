<?php 
include('connection.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EzHealth</title>
	<meta name="description" content="Shehroze Aamer,Abbas Afzal">




	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body class="bg-info" style="color:black" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
						</div>
						<div class="banner-text text-center">
							
							
					<table  class="table" border="2">
<tr>
											<th class='bg-primary text-center'>Name</th>

											<th class='bg-primary text-center'>Username</th>
											<th class='bg-primary text-center'>Delete</th>
											</tr>
										<?php 

										$result=mysqli_query($con,"SELECT * FROM `doctors`");


										while($row=mysqli_fetch_assoc($result)){

											echo "	
											<tr>
											<td class='text-center'> ".$row['doctorName']."</td>
											<td class='text-center'> ".$row['username']."</td>";

												echo "<td ><a style='color: white;' class='btn btn-danger' href='delete_doctor.php?id=".$row['id']."'";
										echo ">Delete</a></td>";

											

											echo "</tr>";

										}
										?>




									</table> 

						</div></div></div></div></div>
								</section>




								<script src="js/jquery.min.js"></script>
								<script src="js/bootstrap.min.js"></script>
								<script src="js/custom.js"></script>

							</body>

							</html>
