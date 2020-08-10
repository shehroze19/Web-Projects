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

  <title>Profile</title>

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

     <?php if($_SESSION['user_type']=='admin'){
      echo " <!-- Breadcrumbs-->
      <ol class='breadcrumb'>
      <li class='breadcrumb-item'>
      <a href='welcome.php'>Dashboard</a>
      </li>
      <li class='breadcrumb-item active'>All Accounts</li>
      </ol>";

      
      $user=$_SESSION['email'];

      @$state=$_GET['state'];



      echo "<!-- DataTables Example -->
      <div class='card mb-3'>
      <div class='card-header'>
      <i class='fas fa-table'></i>
      All Accounts</div>
      <div class='card-body'>
      <div class='table-responsive'>
      <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
      <thead>
      <tr>
      <th>Account Holder name</th>
      <th>Email</th>
      <th>Cell Phone</th>
      <th>Account Registered on</th>
      <th>Account type</th>
      <th>Delete</th>

      

      </tr>
      </thead>
      <tfoot>
      <tr>
      <th>Account Holder name</th>
      <th>Email</th>
      <th>Cell Phone</th>
      <th>Account Registered on</th>
      <th>Account type</th>
      <th>Delete</th>
      
      </tr>
      </tfoot>
      <tbody>";
      
      $Username=$_SESSION['email'];

      $result=mysqli_query($con,"select * from accounts where type!='admin' ORDER BY name ASC;");






      while($row=$data = mysqli_fetch_assoc($result)){

        echo "  <tr>
        <td> ".$row['name']."</td>
        <td> ".$row['email']."</td>
        <td> ".$row['cell phone']."</td>
        <td> ".$row['account_created']."</td>
        <td> ".$row['type']."</td>

        <td> <a href='delete_account.php?id=".$row['id']."'>Delete</a></td>";


        echo"

        </tr>";
      }

      echo "</tbody>
      </table>
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
