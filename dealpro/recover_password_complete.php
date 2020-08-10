<?php
session_start();
	$email=$_GET['email'];
echo $email;
include("connection.php");
if(count($_POST)>0){
    $newpass=$_POST['newpassword'];
    $confpass=$_POST['confirmpassword'];


if($newpass== $confpass)
{
    $epass=md5($newpass);
     
    

    $query = 
    mysqli_query($con,"UPDATE `users` SET `password`='$epass' WHERE email='$email'");
    if($query)
    {
     echo "<div class='btn btn-block btn-success'>Password changed successfully</div>";   
    }
     
      //  echo "<meta http-equiv='refresh' content='3;url=login.php'>";
}
else{
    echo "Please enter same confim password";
}
    }
 

?>