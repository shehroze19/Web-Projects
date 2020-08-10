<?php 
include('connection.php');

@include('session.php');

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


 <!-- Style Sheets -->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" type="text/css" />
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" />

        <!-- Scripts -->
   

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
							
											<div class="form-group row">
<div class="container">


Search for a selected Date
		<input style="color:black;" type="date" id="myInput" onchange="myFunction()" placeholder="Search by names" title="Type in a name">



												<table id="myTable"   class="table" border="2">
<tr>
											<th class='bg-primary text-center' >Login Time</th>
											<th class='bg-primary text-center'>IP Address</th>

													</tr>
							<?php 
							$Username=$_SESSION['Username'];

							$result=mysqli_query($con,"select * from patientslogstats where Username='$Username' ORDER BY LoginTime DESC;");



while($row=$data = mysqli_fetch_assoc($result)){
							
echo "	<tr>
														<td> ".$row['loginTime']."</td>
														<td> ".$row['userip']."</td>
													</tr>";

}
							?>

							


												</table> 
											</div>


													</div>


													<div class="overlay-detail text-center">
														<a href="#"><i class="fa fa-angle-up"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>


<script>
					function myFunction() {
						var input, filter, table, tr, td, i;
						input = document.getElementById("myInput");
						filter = input.value.toUpperCase();
						table = document.getElementById("myTable");
						tr = table.getElementsByTagName("tr");
						for (i = 0; i < tr.length; i++) {
							td = tr[i].getElementsByTagName("td")[0];
							if (td) {
								if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
									tr[i].style.display = "";
								} else {
									tr[i].style.display = "none";
								}
							}       
						}
					}
				</script>


								<script src="js/jquery.min.js"></script>
								<script src="js/bootstrap.min.js"></script>
								<script src="js/custom.js"></script>



							</body>

							</html>
