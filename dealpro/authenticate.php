<?php 
 $con=mysqli_connect("localhost","root","","dealpro");

 session_start();

 $username = "";
 $password = "";
 
if(count($_POST)>0){
$username=$_POST['username'];
$password=$_POST['password'];

$query = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'");


$row = mysqli_fetch_array($query);
if(count($row)==0)
{

        $error = "<br><div class='btn btn-block btn-danger'>Your Username or Password is invalid</div>";
    	 echo $error; 
}
session_regenerate_id();
	$_SESSION['sess_user_id'] = $row['id'];
  $_SESSION['sess_username'] = $row['username'];
  $_SESSION['sess_userrole'] = $row['user_type'];

        
  session_write_close();

  if( $_SESSION['sess_userrole'] == "admin"){
   header('Location: adminhome.php');
  }
   if( $_SESSION['sess_userrole'] == "user"){
   header('Location: welcome.php');
  }
}
 ?>