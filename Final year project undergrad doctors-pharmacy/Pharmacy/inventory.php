<?php 
include('../connection.php');

@include('session_pharmacy.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EzHealth</title>
	<meta name="description" content="Shehroze Aamer,Abbas Afzal">





	
	<link rel="stylesheet" type="text/css" href="../css/googlestylesheet.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

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
									<h3>All Inventory</h3>


		<input style="color:black;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Drug Name" title="Type in a name">
	


									<table id="myTable"  class="table" border="2">
<tr>

											
											<th class='bg-primary text-center' >Drug Name</th>
											<th class='bg-primary text-center'>Category</th>
											<th class='bg-primary text-center'>Description</th>
											<th class='bg-primary text-center'>Quantity Available</th>
											<th class='bg-primary text-center'>Date Supplied</th>
											<th class='bg-primary text-center'>Delete</th>
									

											</tr>
										<?php 
										$pharmacy=$_SESSION['pharmacist_name'];

										$result=mysqli_query($con,"SELECT * FROM `pharmacy_stock` where `pharmacy_name`='$pharmacy'");



									
									     while($row = mysqli_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                              
                echo '<td>' . $row['drug_name'] . '</td>';
				echo '<td>' . $row['category'] . '</td>';
				echo '<td>' . $row['description'] . '</td>';
				echo '<td>' . $row['quantity'] . '</td>';
				echo '<td>' . $row['date_supplied'] . '</td>';?>
				<td><a href="delete_stock.php?stock_id=<?php echo $row['stock_id']?>"><img src="images/delete.png" width="100" height="35" border="0"  /></a></td>
			</tr>
				<?php
		 } 
										?>




									</table> 
								</div>


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

			<script src="../js/jquery.min.js"></script>
								<script src="../js/bootstrap.min.js"></script>
								<script src="../js/custom.js"></script>

	</body>

	</html>
