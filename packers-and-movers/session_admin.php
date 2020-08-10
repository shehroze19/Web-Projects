<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['admin_Username'];
   
   $ses_sql = mysqli_query($con,"select aUsername from admin where aUsername = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
 if(!isset($_SESSION['admin_Username'])){
      header("location:login_admin.php#here");
   }
   
?>