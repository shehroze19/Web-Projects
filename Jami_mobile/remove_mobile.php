<?php
include('session.php');
include('connection.php');





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze" content="">



	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.css" />

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap-clockpicker.min.css">

	<!-- Custom styles for this template -->
	<link href="css/acp.css" rel="stylesheet">



	<style type="text/css">

		.footer {
			border-top: 1px solid #eee;
			margin-top: 40px;
			padding: 40px 0;
		}
		.input-group {
			width: 110px;
			margin-bottom: 10px;
		}
		.pull-center {
			margin-left: auto;
			margin-right: auto;
		}
		@media (min-width: 768px) {
			.container {
				max-width: 730px;
			}
		}
		@media (max-width: 767px) {
			.pull-center {
				float: right;
			}
		}

		#output,#output2{
			border: 0;
			width: 300px;
			height: 300px;
		}
		body{
			padding-top: 50px;
		}
	</style>


</head>

<body>




	<div class="container-fluid">
		
		<?php 

		if(isset($_POST['checked']))
		{


			if(isset($_POST['checkbox'])){

				$checkbox = $_POST['checkbox'];


				for($i=0;$i<count($checkbox);$i++){

					$update_id = $checkbox[$i];
					$sql = "DELETE FROM  `mobiles` WHERE `id`='$update_id'";
					$result = mysqli_query($con,$sql);
				}


				if($result){
					echo "<div class='btn btn-block alert-success'>Mobiles Deleted</div>";
				}
				else
				{
					echo "Error";
				}

			}


		}


		?>


		<div class="page-header text-center">
			<h2 style="color:white;">All Mobiles</h2>


		</div>



		<input style="color:black;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by names" title="Type in a name">
		


		<script type="text/javascript">
			function toggle(source) {
				checkboxes = document.getElementsByName('checkbox[]');
				for(var i=0, n=checkboxes.length;i<n;i++) {
					checkboxes[i].checked = source.checked;
				}
			}
		</script>

		<form action="" method="post">

			<table id="myTable" class="table-responsive" border="3">
				<tr class="header">

					<th class="text-center active" style="width:15%;">Mobile Name</th>
					<th class="text-center active" style="width:15%;">Brand Name</th>
					<th class="text-center active" style="width:60%;">Image</th>

					<th class="text-center active" style="width:10%;">PENDING <input type="checkbox" onClick="toggle(this)" />Select All<br/></th>



					<?php
					$query2="SELECT * FROM `mobiles` ";
					$result=mysqli_query($con,$query2);

					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr class='active'>";


						echo "<td class='text-center'>" .  $row['Name'] . "</td>";
						echo "<td class='text-center'>" .  $row['brand'] . "</td>";
						echo "<td class='text-center'><img src='mobile_images/" .  $row['image'] . "'></img></td>";


						echo "<td class='text-center'>";

						echo "<input type='checkbox' name='checkbox[]' value='".$row['id']."'</td>";

						echo "</td>";

						echo "</tr>";



					}
					?>










				</table>
				<div class="form-group"><input type="Submit" name="checked" value="Delete Selected Mobiles" class="btn btn-block alert-success"></div>

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










			</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"></script>



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
