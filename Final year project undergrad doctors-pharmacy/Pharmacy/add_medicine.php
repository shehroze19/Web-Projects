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


<?php 


if(isset($_POST['submit'])){
$drug_name=$_POST['drug_name'];
$pharmacy_n=$_SESSION['pharmacist_name'];
$category=$_POST['category'];
$description=$_POST['description'];
$company=$_POST['company'];
$supplier=$_POST['supplier'];
$quantity=$_POST['quantity'];
$cost=$_POST['cost'];


$sql=mysqli_query($con,"INSERT INTO pharmacy_stock(`pharmacy_name`, `drug_name`, `category`, `description`, `company`, `supplier`, `quantity`, `cost`)
VALUES('$pharmacy_n','$drug_name','$category','$description','$company','$supplier',$quantity,$cost)");

if($sql) { $error="<div class='text-center btn btn-block btn-success'>Medicine Added</div>";
}else{

$error="<div class='text-center btn btn-block btn-danger'>Error While adding Medicine</div>";
}
	}




 ?>

	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container-fluid">
				
						<div class="banner-text text-center">
							
							<div class="form-group row">
								<div class="container">
									<?php echo @$error; ?>
									<h3>Add Medicine</h3>

<form action="add_medicine.php" method="post" >
			<table  class="table" border="2" >	
				<tr><td align="center"><input name="drug_name" type="text" class="form-control" placeholder="Drug Name" required="required" id="drug_name" /></td></tr>
				<tr><td ><input name="category" type="text" class="form-control" placeholder="Category" required="required" id="category"/></td></tr>
				<tr><td ><input name="description" type="text" class="form-control" placeholder="Description" required="required" id="description" /></td></tr>
				<tr><td ><input name="company" type="text" class="form-control" placeholder="Manufacturing Company"  required="required" id="company" /></td></tr>  
				<tr><td ><input name="supplier" type="text" class="form-control" placeholder="Supplier" required="required" id="supplier" /></td></tr>  
				<tr><td ><input name="quantity" type="number" class="form-control" placeholder="Quantity" required="required" id="quantity" /></td></tr>  
				<tr><td ><input name="cost" type="number" class="form-control" placeholder="Unit Cost" required="required" id="cost" /></td></tr>  
				<tr><td ><input name="submit" type="submit" class="btn btn-block btn-success" value="Submit" id="submit"/></td></tr>
            </table>
		</form>


								</div>


							</div>


							
						</div>
					</div>
				
		</section>


			<script src="../js/jquery.min.js"></script>
								<script src="../js/bootstrap.min.js"></script>
								<script src="../js/custom.js"></script>

	</body>

	</html>
