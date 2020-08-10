<?php 
include("connection.php");
@include("session.php");

if(count($_POST)>0){
	$ppassword=$_POST['ppass'];
	$encryptpass=md5($ppassword);
	$id=$_SESSION['sess_user_id'];
$result=mysqli_query($con, "SELECT `password` FROM `users` WHERE id='$id'");
$array = mysqli_fetch_assoc($result);

if($array['password']=$ppassword)
{
	$newpass=$_POST['password'];
$confpass=$_POST['confirmpassword'];

if($newpass== $confpass)
{
	$epass=md5($newpass);
	$query = mysqli_query($con,"UPDATE `users` SET `password`='$epass' WHERE id='$id'");
}
else{
	echo "Please enter same confim password";
}

}


}
?>