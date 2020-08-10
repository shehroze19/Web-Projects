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

  <title>Dashboard</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php 
  include('login_navbar.php'); ?>
  <div id="content-wrapper">

    <div class="container-fluid">

     <?php if($_SESSION['user_type']=='user'){
      echo " <!-- Breadcrumbs-->
      <ol class='breadcrumb'>
      <li class='breadcrumb-item'>
      <a href='login.php'>Dashboard</a>
      </li>
      <li class='breadcrumb-item active'>Overview</li>
      </ol>";

      
      $user=$_SESSION['email'];

      $id=$_GET['id'];



      echo "<!-- DataTables Example -->
      <div class='card mb-3'>
      <div class='card-header'>
      <i class='fas fa-table'></i>
      All Incidents</div>
      <div class='card-body'>
      <div class='table-responsive'>
      <form action='print_report.php'  target='_blank' method='post'>
      <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
      <thead>
      <tr>
      <th>Assigned to</th>
      <th>Date Assigned </th>
      <th>State</th>
      <th>Changes Made</th>
      <th>Date Changes Made </th>
      <th>Comments</th>


      </tr>
      </thead>
      <tfoot>
      <tr>
      <th>Assigned to</th>
      <th>Date Assigned </th>
      <th>State</th>
      <th>Changes Made</th>
      <th>Date Changes Made </th>
      <th>Comments</th>
   

      </tr>
      </tfoot>
      <tbody>";
      
      $Username=$_SESSION['email'];


      $result3=mysqli_query($con,"select * from incident where id='$id'");

      while($row3 = mysqli_fetch_assoc($result3)){
        $gotten_email=$row3['current_assignee'];
      }



      $result=mysqli_query($con,"select * from case_history where id_of_user='$id'");

     



    while($row=$data = mysqli_fetch_assoc($result)){
      
      echo "  <tr>
      <td> ".$row['assigned_to']."</td>
     
      <td> ".$row['date_assigned']."</td>
      <td> ".$row['state']."</td>
      <td> ".$row['changes_made']."</td>
      <td> ".$row['date_changes_made']."</td>
      <td> ".$row['comments']."</td>";
     
      echo "
     
      </tr>";
    }
    
    echo "</tbody>
    </table>
      </form>
    </div>
    </div>
    </div>

    ";
  }



  ?>


</div>
<!-- /.container-fluid -->

<?php include('footer_login.php'); ?>

</div>
<!-- /.content-wrapper -->



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


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
