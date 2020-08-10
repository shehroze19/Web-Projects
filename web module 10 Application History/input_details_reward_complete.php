<?php 
include("Connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- our own js  -->
	<script src="js/scripts.js"></script>
	<!-- Custom styles for this template -->
	<link href="css/styles.css" rel="stylesheet">





</head>


<body>




	<div class="jumbotron">
		<div class="container">
			


			<h3 align="center">View Student Details</h3>


			<form class="form-group row">

				<select class="form-control" onchange="file(this.value)">
				<option>Choose From the Student IDs Below</option>
					<?php 


					$result=mysqli_query($con,"select id from personal_detail");

					$runner=mysqli_query($con,$query);



					while($data = mysqli_fetch_assoc($result)){


						echo "<option name='ourvalue' value='".$data['id']."' class='form-control'>".$data['id']."</option>";
					}

					?>	

				</select>

				<div class="form-group text-center">
					<input type="button" class="btn btn-group" id="display" value="Display All Data" /> 
				</div>


			
			</form>


			<div id="our" align="center">

			</div>


		</div>
	</div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript">



 $(document).ready(function() {

    $("#display").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "displayall.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#our").html(response); 
            //alert(response);
        }

    });
});
});


function file(str){
			var a = new XMLHttpRequest();

			a.onreadystatechange = function(){
				if(a.readyState == 4 && a.status ==200){
					document.getElementById("our").innerHTML = a.responseText;
				}

			}


			a.open("GET","awards_system.php?id="+str,true);
			a.send();
		}






  </script>

</body>
</html>