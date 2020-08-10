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
	<link href="css/styles.css" rel="stylesheet">



</head>

<body>

	<div class="container">

      <p>A list of all the Tutors and their respective fields.Select one to know additional information</p>
      <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">



      <table id="myTable" class="table" border="1">
        <tr class="header">
        <th style="width:20%;">Teacher Name</th>
            <th style="width:20%;">Department</th>
            <th style="width:20%;">Subject</th>
            <th style="width:20%;">Date</th>
            <th style="width:20%;">Experience</th>






            <?php
            $query2="SELECT * FROM tutorial_group ";
            $result=mysqli_query($con,$query2);

            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['department'] . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['experience'] . "</td>";





            }
            ?>


        </table>

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
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
