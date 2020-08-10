<?php 
include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze" content="">


	<title>Details</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	<!-- Custom styles for this template -->
	
	<style type="text/css">
		body {

			background:url(../img/iframe_back.jpg) no-repeat top center; 
		}

	</style>


</head>

<body>


	




	<div class="container-fluid">

		<div class="form-group row">
			<div class="panel-heading btn-info">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse0">
						<h3>Write an Appeal</h3></a>
					</h4>
				</div>
				<div id="collapse0" class="panel-collapse collapse">
					<div class="panel-body">




						<form action="" method="post" class="jumbotron">

							




								<div class="form-group row">
									<label  class="col-2 col-form-label">Student ID</label>
									<div class="col-10">
										<input class="form-group" type="text" name="student_id">
										
									</div>
								</div>



								<div class="form-group row">
									<label  class="col-2 col-form-label">Name</label>
									<div class="col-10">
										<input class="form-group" type="text" name="student_name">

									</div>
								</div>



								<div class="form-group row">
									<label  class="col-2 col-form-label">Appeal: </label>
									
							
								<div class="col-10">
									<textarea name="appeal" class="form-control"></textarea>

								</div>
							</div>


							<div class="form-group row">
								<div class="col-10">
									<input class="btn btn-info" type="Submit" value="Submit">
								</div>
							</div>


						</form>

					</div>
				</div>
			</div>



<div class="alert-success">
					<?php 


@$studentid=$_POST['student_id'];
@$sname=$_POST['student_name'];
@$appeal=$_POST['appeal'];



$query1="INSERT INTO `appeal`(`a_id`, `name`, `appeal`) VALUES ('$studentid','$sname','$appeal');";

$run1=mysqli_query($con,$query1);

if(isset($studentid)){
if($run1){
	echo "Thank you for your time! We will look into your appeal";


}
else{
	echo "error with data! your record already exists";
}}


			?>

</div>







			<div class="form-group row">
				<div class="panel-heading btn-info">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
							<h3>Check Appeal Status</h3></a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<div class="panel-body">



<table class="table" border="2">
									<th>Student ID</th>
									<th>Student Name</th>
									<th>Appeal</th>
									<th>Status</th>
									


									<?php
									$query2="SELECT * FROM appeal";
									$result=mysqli_query($con,$query2);

									while($row = mysqli_fetch_array($result))
									{
										echo "<tr>";
										echo "<td>" . $row['a_id'] . "</td>";
										echo "<td>" . $row['name'] . "</td>";
										echo "<td>" . $row['appeal'] . "</td>";
										echo "<td>Pending</td>";

		
									}
									?>

								</table>

						</div>
					</div>
				</div>


								

			</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
