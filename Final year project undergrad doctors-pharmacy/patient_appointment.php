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




	<script>
		function getdoctor(val) {
			$.ajax({
				type: "POST",
				url: "get_doctor.php",
				data:'specilizationdata='+val,
				success: function(data){
					$("#doctor").html(data);
				}
			});
		}
	</script>	


	<script>
		function getfee(val) {
			$.ajax({
				type: "POST",
				url: "get_doctor.php",
				data:'doctor='+val,
				success: function(data){
					$("#fees").html(data);
				}
			});
		}
	</script>	
	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap-clockpicker.min.css">


</head>

<body class="bg-info" style="color:black" data-spy="scroll" data-target=".navbar" data-offset="60">

	<?php 
	if(isset($_POST['submit']))
	{

		$specilization=$_POST['Doctorspecialization'];
		$doctor_uname=$_POST['doctor'];
		$patient_uname=$_SESSION['Username'];
		$fees=$_POST['fees'];
		$appdate=$_POST['appdate'];
		$time=$_POST['apptime'];
		$query=mysqli_query($con,"INSERT INTO `appointment`(`doctorSpecialization`, `doctor_uname`, `patient_uname`, `Fees`, `appointmentDate`, `appointmentTime`) VALUES ('$specilization','$doctor_uname','$patient_uname','$fees','$appdate','$time')");




		if($query)
		{
			echo "<div class='btn btn-block btn-success'>Your appointment has been successfully booked</div>";
		}
		else{
			echo "<div class='btn btn-block btn-danger'>Error</div>";

		}

	}


	?>

	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
						</div>
						<div class="banner-text text-center">
							
							<?php 
							$Username=$_SESSION['Username'];

							$result=mysqli_query($con,"select * from patients where username='$Username';");




							$data = mysqli_fetch_assoc($result);


							?>

							
							<div class="bg-primary"> <a href="patient_all_appointments.php"><h3 style="color: white;" >View all Appointments</h3></a></div>
							<div class="bg-primary"> <a href="patient_all_appointments_completed.php"><h3 style="color: white;" >View Completed Appointments</h3></a></div>




														</div>
													</div>
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





						<script src="js/custom.js"></script>

						<script type="text/javascript" src="js/jquery.min.js"></script>
						<script type="text/javascript" src="js/bootstrap.min.js"></script>
						<script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>
						<script type="text/javascript">
							$('.clockpicker').clockpicker()
							.find('input').change(function(){
								console.log(this.value);
							});
							var input = $('#single-input').clockpicker({
								placement: 'bottom',
								align: 'left',
								autoclose: true,
								'default': 'now'
							});

							$('.clockpicker-with-callbacks').clockpicker({
								donetext: 'Done',
								init: function() { 
									console.log("colorpicker initiated");
								},
								beforeShow: function() {
									console.log("before show");
								},
								afterShow: function() {
									console.log("after show");
								},
								beforeHide: function() {
									console.log("before hide");
								},
								afterHide: function() {
									console.log("after hide");
								},
								beforeHourSelect: function() {
									console.log("before hour selected");
								},
								afterHourSelect: function() {
									console.log("after hour selected");
								},
								beforeDone: function() {
									console.log("before done");
								},
								afterDone: function() {
									console.log("after done");
								}
							})
							.find('input').change(function(){
								console.log(this.value);
							});

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
	// Have to stop propagation here
	e.stopPropagation();
	input.clockpicker('show')
	.clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
	$('input').prop('readOnly', true);
}
</script>
<script type="text/javascript" src="js/highlight.min.js"></script>
<script type="text/javascript">
	hljs.configure({tabReplace: '    '});
	hljs.initHighlightingOnLoad();
</script>

</body>

</html>
