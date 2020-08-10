<?php
include('connection.php');
session_start();
@include('session.php');







if(count($_POST)>0){


  $email=$_SESSION['email'];

  $category=$_POST['category'];
  $description=$_POST['description'];
  $tag=$_POST['tag'];
  $explanation=$_POST['explanation'];
  $action_to_be_taken=$_POST['action_to_be_taken'];
  $date=$_POST['date'];
  $point_of_contact=$_POST['point_of_contact'];
  $id=$_POST['id'];
  $state=$_POST['state'];
  $comments=$_POST['comments'];

$date_resolved='';
  if($state=='completed'){
    $currentDateTime = date('Y-m-d H:i:s');
   
$date_resolved=$currentDateTime;

  }




  $query="UPDATE `incident` SET `current_assignee`='$email', `state`='$state',`date_resolved`='$date_resolved', `category`='$category',`description`='$description',`explanation`='$explanation',`action_to_be_taken`='$action_to_be_taken',`date_of_incident`='$date',`point_of_contact`='$point_of_contact',`tags`='$tag' WHERE id=$id;";


  $runner=mysqli_query($con,$query);


  if($runner ){




    $query="INSERT INTO `case_history`(`id_of_user`,`assigned_to`, `date_assigned`, `state`,  `changes_made`,`comments`) VALUES ('$id','$email','$date','$state','State Changed','$comments')";


    mysqli_query($con,$query);



    echo "<a href='login.php'><div class='text-center btn btn-block btn-success'>Incident Updated to view all incidents</div></a>";

  }
  else{
   echo "<div class='text-center btn btn-block btn-danger'>Error while updating the incident</div>";

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

     <!-- Breadcrumbs-->
     <ol class='breadcrumb'>
      <li class='breadcrumb-item'>
        <a href='welcome.php'>Dashboard</a>
      </li>
      <li class='breadcrumb-item active'>Change Incident</li>
    </ol>

    <?php 

    $id=$_GET['id'];

    $email=$_SESSION['email'];

    $result=mysqli_query($con,"SELECT * FROM `incident` WHERE   `id`= $id ");



    $array = mysqli_fetch_array($result);
    $email_r= $array['email'];
    $category= $array['category'];
    $description= $array['description'];
    $tag=$array['tags'];
    $explanation=$array['explanation'];
    $action_to_be_taken=$array['action_to_be_taken'];
    $date_of_incident=$array['date_of_incident'];
    $point_of_contact=$array['point_of_contact'];


    if($array){

      echo "  <div class='card card-signin my-5'>
      <div class='card-body'>



      <div class='form-group'>
      <label >Reported By</label>

      <input type='text' name='tag' value='".$email_r."' readonly class='form-control' >
      </div>








      <form  action='' method='post' class='form-signin'>



      <div class='form-group '><label  >Category </label>
      <select class='form-control' readonly name='category'>";







      


      $result2=mysqli_query($con,"select category_name from category");

      $runner2=mysqli_query($con,$query2);


      echo "<option name='category' value='".$category."' readonly>".$category."</option>";




      echo "    </select>


      </div>


      <div class='form-group'>
      <label for='cell'>Description</label>
      <textarea type='text' name='description'  class='form-control' required autofocus readonly>".$description."</textarea>

      </div>

      <br>


      <div class='form-label-group'>
      <input type='text' name='tag' value='".$tag."' readonly class='form-control' >
      <label >Tags (optional)</label>
      </div>

      <br>

      <div class='form-group'>
      <label >Explanation (optional)</label>

      <textarea type='text' name='explanation'   class='form-control'  autofocus readonly>".$explanation."</textarea>
      </div>


      <br>


      <div class='form-group'>
      <label >Action to be taken (optional)</label>

      <input type='text' name='action_to_be_taken' value='".$action_to_be_taken."' class='form-control' readonly >
      </div>


      <br>


      <div class='form-label-group'>
      <input type='date' name='date' value='".$date_of_incident."' class='form-control' readonly>
      <label >Date of incident</label>
      </div>


      <br>

      <div class='form-label-group'>
      <input type='text' name='point_of_contact' value='".$point_of_contact."' class='form-control' readonly>
      <label >Point of contact</label>
      </div>


      <br>

      <div class='form-group'>
      <label>Comments</label>
      <textarea  type='text' name='comments' class='form-control' ></textarea>
      </div>


      <br>


    <div class='form-group '><label  >Category </label>
      <select class='form-control'  name='state'>
      <option name='state' value='assigned'>assigned</option>
      <option name='state' value='completed'>completed</option>
      <option name='state' value='unresolved'>unresolved</option>
      </select>




      <br>

      <input type='hidden' name='id' value='".$id."'  >


      <button class='btn btn-lg btn-primary btn-block text-uppercase' type='submit'>Report Incident</button>




      <hr  class='my-4'>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      </header>
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
