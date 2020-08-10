<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['Username'];
   
   $ses_sql = mysqli_query($con,"select uUsername from user where Uusername = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
  $login_session = $row['Username'];
   
   if(!isset($_SESSION['Username'])){
      header("location:login.php#here");
   }
?>