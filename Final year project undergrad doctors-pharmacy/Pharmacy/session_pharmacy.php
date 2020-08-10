<?php
   include('../connection.php');

session_start();
   
   $user_check = $_SESSION['pharmacist_username'];
   
   $ses_sql = mysqli_query($con,"select username from pharmacist where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['pharmacist_username'])){
      header("location:pharmacy.php");
   }
   


 

?>