<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['Username'];
   
   $ses_sql = mysqli_query($con,"select Username from admin_control_panel where Username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['Username'];
   
   if(!isset($_SESSION['Username'])){
      header("location:login.php");
   }
?>