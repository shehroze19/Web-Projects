<?php
include('connection.php');
session_start();
@include('session.php');





if(isset($_POST['checkbox'])){
  $checkbox = $_POST['checkbox'];



  for($i=0;$i<count($checkbox);$i++){

    $update_id = $checkbox[$i];
    echo $update_id;

    $sql = "SELECT * FROM `incident` WHERE `id`='$update_id' ";
    $result = mysqli_query($con,$sql);
  }


  if($result){
  }
  else
  {
  }

}


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

  <script type="text/javascript">
    function toggle(source) {
      checkboxes = document.getElementsByName('checkbox[]');
      for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
      }
    }
  </script>


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

      $query1="SELECT * FROM `incident` WHERE `email`='$user'  and `state`='open'";
      $result1=mysqli_query($con,$query1);


      $count1 = mysqli_num_rows($result1);





      $query2="SELECT * FROM `incident` WHERE `email`='$user'  and `state`='assigned'";
      $result2=mysqli_query($con,$query2);


      $count2 = mysqli_num_rows($result2);





      $query3="SELECT * FROM `incident` WHERE `email`='$user'  and `state`='completed'";
      $result3=mysqli_query($con,$query3);


      $count3 = mysqli_num_rows($result3);





      $query4="SELECT * FROM `incident` WHERE `email`='$user'  and `state`='unresolved'";
      $result4=mysqli_query($con,$query4);


      $count4 = mysqli_num_rows($result4);


      echo "<!-- Icon Cards-->
      <div class='row'>
      <div class='col-xl-3 col-sm-6 mb-3'>
      <div class='card text-white bg-primary o-hidden h-100'>
      <div class='card-body'>
      <div class='card-body-icon'>
      <i class='fas fa-fw fa-comments'></i>
      </div>
      <div class='mr-5'>".$count1." Open Incidents</div>
      </div>
      <a class='card-footer text-white clearfix small z-1' href='incident_view.php?state=open'>
      <span class='float-left'>View Details</span>
      <span class='float-right'>
      <i class='fas fa-angle-right'></i>
      </span>
      </a>
      </div>
      </div>
      <div class='col-xl-3 col-sm-6 mb-3'>
      <div class='card text-white bg-warning o-hidden h-100'>
      <div class='card-body'>
      <div class='card-body-icon'>
      <i class='fas fa-fw fa-list'></i>
      </div>
      <div class='mr-5'>".$count2." Assigned Incidents</div>
      </div>
      <a class='card-footer text-white clearfix small z-1' href='incident_view.php?state=assigned'>
      <span class='float-left'>View Details</span>
      <span class='float-right'>
      <i class='fas fa-angle-right'></i>
      </span>
      </a>
      </div>
      </div>
      <div class='col-xl-3 col-sm-6 mb-3'>
      <div class='card text-white bg-success o-hidden h-100'>
      <div class='card-body'>
      <div class='card-body-icon'>
      <i class='fas fa-fw fa-shopping-cart'></i>
      </div>
      <div class='mr-5'>".$count3." Completed Incidents</div>
      </div>
      <a class='card-footer text-white clearfix small z-1' href='incident_view.php?state=completed'>
      <span class='float-left'>View Details</span>
      <span class='float-right'>
      <i class='fas fa-angle-right'></i>
      </span>
      </a>
      </div>
      </div>
      <div class='col-xl-3 col-sm-6 mb-3'>
      <div class='card text-white bg-danger o-hidden h-100'>
      <div class='card-body'>
      <div class='card-body-icon'>
      <i class='fas fa-fw fa-life-ring'></i>
      </div>
      <div class='mr-5'>".$count4." Unresolved Incidents</div>
      </div>
      <a class='card-footer text-white clearfix small z-1'href='incident_view.php?state=unresolved'>
      <span class='float-left'>View Details</span>
      <span class='float-right'>
      <i class='fas fa-angle-right'></i>
      </span>
      </a>
      </div>
      </div>
      </div>";




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
      <th>Category</th>
      <th>Description</th>
      <th>Date created</th>
      <th>Date resolved</th>
      <th>State </th>
      <th>Point of contact</th>
      <th>Tags</th>
      <th>Current assignee</th>
      <th>Case history</th>
      <th>Edit</th>
      <th ><input type='checkbox' onClick='toggle(this)' >All</th>


      </tr>
      </thead>
      <tfoot>
      <tr>
      <th>Category</th>
      <th>Description</th>
      <th>Date created</th>
      <th>Date resolved</th>
      <th>State </th>
      <th>Point of contact</th>
      <th>Tags</th>
      <th>Current assignee</th>
      <th>Case history</th>
      <th>Edit</th>
      <th  ><input type='checkbox' onClick='toggle(this)' >All</th>

      </tr>
      </tfoot>
      <tbody>";

      $Username=$_SESSION['email'];

      $result=mysqli_query($con,"select * from incident where email='$Username' ORDER BY date_created DESC;");

      while($row=$data = mysqli_fetch_assoc($result)){

        echo "  <tr>
        <td> ".$row['category']."</td>
        <td> ".$row['description']."</td>
        <td> ".$row['date_created']."</td>
        <td> ".$row['date_resolved']."</td>
        <td> ".$row['state']."</td>
        <td> ".$row['point_of_contact']."</td>
        <td> ".$row['tags']."</td>
        <td> ".$row['current_assignee']."</td>
        <td> <a href='history.php?id=".$row['id']."'>Check</a></td>
        ";


        $state=$row['state'];
        if($state=='open' ){
          echo "<td> <a href='incident_edit.php?id=".$row['id']."'>Edit</a></td>";
        }else{
          echo "<td></td>";
        }
        echo"
        <td> <input type='checkbox' name='checkbox[]' value='".$row['id']."'</td>
        </tr>";
      }

      echo "</tbody>
      </table>
      <div class='form-group'><input type='Submit' name='checked' value='Print Reports'  class='btn btn-block alert-success'></div>
      </form>
      </div>
      </div>
      </div>

      ";
    }
    if($_SESSION['user_type']=='admin'){
      echo "<nav class='navbar navbar-expand-lg navbar-dark bg-primary'>
      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
      </button>

      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
      <ul class='navbar-nav mr-auto'>
      <li class='nav-item active'>
      <a class='nav-link' href='all_accounts.php'>View All Accounts |  <span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item active'>
      <a class='nav-link' href='category.php'>Add a Category |  <span class='sr-only'>(current)</span></a>
      </li>
      
      </ul>

      </div>
      </nav>";
    }
















    if($_SESSION['user_type']=='employee'){
      echo " <!-- Breadcrumbs-->
      <ol class='breadcrumb'>
      <li class='breadcrumb-item'>
      <a href='login.php'>Dashboard</a>
      </li>
      <li class='breadcrumb-item active'>Overview</li>
      </ol>";


      $user=$_SESSION['email'];

      $query1="SELECT * FROM `incident` WHERE    `state`='open' ";
      $result1=mysqli_query($con,$query1);


      $count1 = mysqli_num_rows($result1);





      $query2="SELECT * FROM `incident` WHERE `email`='$user'  and `state`='assigned'";
      $result2=mysqli_query($con,$query2);


      $count2 = mysqli_num_rows($result2);





      $query3="SELECT * FROM `incident` WHERE `email`='$user'  and `state`='completed'";
      $result3=mysqli_query($con,$query3);


      $count3 = mysqli_num_rows($result3);





      $query4="SELECT * FROM `incident` WHERE `email`='$user'  and `state`='unresolved'";
      $result4=mysqli_query($con,$query4);


      $count4 = mysqli_num_rows($result4);


      echo "<!-- Icon Cards-->
      <div class='row'>
      <div class='col-xl-3 col-sm-6 mb-3'>
      <div class='card text-white bg-primary o-hidden h-100'>
      <div class='card-body'>
      <div class='card-body-icon'>
      <i class='fas fa-fw fa-comments'></i>
      </div>
      <div class='mr-5'>".$count1." Open Incidents</div>
      </div>
      <a class='card-footer text-white clearfix small z-1' href='incident_view_employee.php?state=open'>
      <span class='float-left'>View Details</span>
      <span class='float-right'>
      <i class='fas fa-angle-right'></i>
      </span>
      </a>
      </div>
      </div>
      <div class='col-xl-3 col-sm-6 mb-3'>
      <div class='card text-white bg-warning o-hidden h-100'>
      <div class='card-body'>
      <div class='card-body-icon'>
      <i class='fas fa-fw fa-list'></i>
      </div>
      <div class='mr-5'>".$count2." Assigned Incidents</div>
      </div>
      <a class='card-footer text-white clearfix small z-1' href='incident_view_employee.php?state=assigned'>
      <span class='float-left'>View Details</span>
      <span class='float-right'>
      <i class='fas fa-angle-right'></i>
      </span>
      </a>
      </div>
      </div>
      <div class='col-xl-3 col-sm-6 mb-3'>
      <div class='card text-white bg-success o-hidden h-100'>
      <div class='card-body'>
      <div class='card-body-icon'>
      <i class='fas fa-fw fa-shopping-cart'></i>
      </div>
      <div class='mr-5'>".$count3." Completed Incidents</div>
      </div>
      <a class='card-footer text-white clearfix small z-1' href='incident_view_employee.php?state=completed'>
      <span class='float-left'>View Details</span>
      <span class='float-right'>
      <i class='fas fa-angle-right'></i>
      </span>
      </a>
      </div>
      </div>
      <div class='col-xl-3 col-sm-6 mb-3'>
      <div class='card text-white bg-danger o-hidden h-100'>
      <div class='card-body'>
      <div class='card-body-icon'>
      <i class='fas fa-fw fa-life-ring'></i>
      </div>
      <div class='mr-5'>".$count4." Unresolved Incidents</div>
      </div>
      <a class='card-footer text-white clearfix small z-1'href='incident_view_employee.php?state=unresolved'>
      <span class='float-left'>View Details</span>
      <span class='float-right'>
      <i class='fas fa-angle-right'></i>
      </span>
      </a>
      </div>
      </div>
      </div>";




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

      <th>Reported by</th>

      <th>Category</th>
      <th>Description</th>
      <th>Date created</th>
      <th>Date resolved</th>
      <th>State </th>
      <th>Point of contact</th>
      <th>Tags</th>
      <th>Make Changes</th>
      
      <th ><input type='checkbox' onClick='toggle(this)' >All</th>


      </tr>
      </thead>
      <tfoot>
      <tr>

      <th>Reported by</th>

      <th>Category</th>
      <th>Description</th>
      <th>Date created</th>
      <th>Date resolved</th>
      <th>State </th>
      <th>Point of contact</th>
      <th>Tags</th>
      <th>Make Changes</th>
      <th  ><input type='checkbox' onClick='toggle(this)' >All</th>

      </tr>
      </tfoot>
      <tbody>";

      $Username=$_SESSION['email'];

      $result=mysqli_query($con,"select * from incident where email='$Username' or state='open' or `current_assignee`='$user' ORDER BY date_created DESC;");

      while($row=$data = mysqli_fetch_assoc($result)){

        echo "  <tr>
        <td> ".$row['email']."</td>

        <td> ".$row['category']."</td>
        <td> ".$row['description']."</td>
        <td> ".$row['date_created']."</td>
        <td> ".$row['date_resolved']."</td>
        <td> ".$row['state']."</td>
        <td> ".$row['point_of_contact']."</td>
        <td> ".$row['tags']."</td>";
       

        $current_assignee=$row['current_assignee'];
        $state=$row['state'];
        if($state=='open' or $current_assignee='$user' ){
          echo "<td> <a href='incident_employee_changes.php?id=".$row['id']."'>Change</a></td>";
        }else{
          echo "<td></td>";
        }
        echo"
        <td> <input type='checkbox' name='checkbox[]' value='".$row['id']."'</td>
        </tr>";
      }

      echo "</tbody>
      </table>
      <div class='form-group'><input type='Submit' name='checked' value='Print Reports'  class='btn btn-block alert-success'></div>
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
