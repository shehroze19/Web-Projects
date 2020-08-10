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
	



</head>

<body>




	<div class="container-fluid">










		<div class="form-group row">
			<div class="panel-heading btn-info">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
						<h3>Change Application Program</h3></a>
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse">
					<div class="panel-body">




						<form action="" method="post" class="jumbotron">

							<div class="form-group row">
								<label  class="col-2 col-form-label">Student ID:</label>
								<div class="col-10">
									<input class="form-group" name="student_id" type="text" required>

								</div>
							</div>

							<div class="form-group row">
								<label  class="col-2 col-form-label">Name</label>
								<div class="col-10">
									<input class="form-group" name="s_name" type="text" required>

								</div>
							</div>

							<div class="form-group row">
								<label  class="col-2 col-form-label">Course/Program</label>
								<div class="col-10">
									<input class="form-group" name="course" type="text" required>

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

<div class="alert-success">
					<?php 


@$studentid=$_POST['student_id'];
@$sname=$_POST['s_name'];
@$course=$_POST['course'];


$getter="select course_title from course_detail where course_detail.course_id=$studentid";

$runnerofget=mysqli_query($con,$getter);

@$array=mysqli_fetch_assoc($runnerofget);



$ourvalue=$array['course_title'];


$query1="INSERT INTO `change_app_program`(`app_id`, `name`, `course`) VALUES ('$studentid','$sname','$ourvalue');";

$run1=mysqli_query($con,$query1);
if(isset($studentid)){
if($run1){
	echo "Thank you for your time! Your application has been updated";

$queryupdat="UPDATE `course_detail` SET `course_title`='$course'  where course_detail.course_id='$studentid' ";
$runer10=mysqli_query($con,$queryupdat);
if($runer10){
	echo "!";
}

}
else{
	echo "error with data! your record already exists";
}}


			?>

</div>

			</div>




			<div class="form-group row">
				<div class="panel-heading btn-info">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
							<h3>Revert Application Program</h3></a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">




							<form action="" method="post" class="jumbotron">

								<div class="form-group row">
									<label  class="col-2 col-form-label">Student ID:</label>
									<div class="col-10">
										<input class="form-group" name="student_id_2" type="text" required>

									</div>
								</div>

								<div class="form-group row">
									<label  class="col-2 col-form-label">Name</label>
									<div class="col-10">
										<input class="form-group" name="student_name_2" type="text" required>

									</div>
								</div>

								<div class="form-group row">
									<label  class="col-2 col-form-label">Revert Course/Program</label>
									<div class="col-10">
										<input type="checkbox" name="reverter" value="yes" required=>

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


@$studentid2=$_POST['student_id_2'];
@$sname2=$_POST['student_name_2'];
@$revert=$_POST['reverter'];



$getter2="select course from change_app_program where change_app_program.app_id=$studentid2";

$runnerofget2=mysqli_query($con,$getter);

@$array2=mysqli_fetch_assoc($runnerofget);



$ourvalue2=$array2['app_id'];



$query2="INSERT INTO `revert_program`(`id`, `name`, `revert_course`) VALUES ('$studentid2','$sname2','$revert');";

$run2=mysqli_query($con,$query2);
if(isset($studentid2)){
if($run2){
	echo "Thank you for your time! Your application has been reverted";

$queryupdat2="UPDATE `course_detail` SET `course_title`='$course'  where course_detail.course_id='$ourvalue2' ";
$runer102=mysqli_query($con,$queryupdat2);
if($runer102){
	echo "!";
}


}
else{
	echo "error with data! your record already exists";
}}



			?>
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
