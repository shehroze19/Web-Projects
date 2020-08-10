<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($con,"select username from doctors where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['username'];
   
    
   if(!isset($_SESSION['username'])){
      header("location:login_doctor.php");
   }
   



?>