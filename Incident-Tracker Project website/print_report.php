<?php
include('connection.php');
session_start();
@include('session.php');







?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Incident Report</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body >

<?php 



if(isset($_POST['checkbox'])){
  $checkbox = $_POST['checkbox'];

$email=$_SESSION['email'];
echo "<b>Report Generated by : ".$email."</b>";

echo "<div class='table-responsive'>
      <table class='table table-bordered'  cellspacing='0'>
      <thead>
      <tr>
      
      <th>Category</th>
      <th>Description</th>
      <th>Date created</th>
      <th>Date resolved</th>
      <th>State </th>
      <th>Point of contact</th>
      <th>Tags</th>
      <th>Current assignee</th>
   

      </tr>
      ";
 
  for($i=0;$i<count($checkbox);$i++){

    $update_id = $checkbox[$i];

    $sql = "SELECT * FROM `incident` WHERE `id`='$update_id' ";
    $result = mysqli_query($con,$sql);

    while($row=$data = mysqli_fetch_assoc($result)){
      
      echo "  <tr>
      <td> ".$row['category']."</td>
      <td> ".$row['description']."</td>
      <td> ".$row['date_created']."</td>
      <td> ".$row['date_resolved']."</td>
      <td> ".$row['state']."</td>
      <td> ".$row['point_of_contact']."</td>
      <td> ".$row['tags']."</td>
      <td> ".$row['current_assignee']."</td></tr>";

     
    }

  }

 echo "</tbody>
    </table>
    </div>";
 

}



 ?>


<script>window.print();</script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
