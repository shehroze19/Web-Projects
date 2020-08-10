<?php
include("connection.php");



$username = "";
$password = "";
 
if(count($_POST)>0){
$username=$_POST['username'];
$password=$_POST['password'];

$query = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'");


$row = mysqli_fetch_array($query);

if(count($row)==0)
{

    echo "{ \"success\":false}";          
}
else{
  echo json_encode($row);

}
}

 ?>