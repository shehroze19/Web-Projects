<?php

require "connection.php";

@$username=$_POST["name"];
@$password=$_POST["password"];
$pass=md5($password);

$query="SELECT * FROM `user` where 'uUsername'='".$username."' AND 'uPassword'='".$pass."';";

$result=mysqli_query($con,$query);
$response = array();
 
while($row = mysqli_fetch_array($result)){
    $response = array("uId"=>$row[0],"uName"=>$row[1],"uEmail"=>$row[2],"uAddress"=>$row[3],"uUsername"=>$row[4],"uPassword"=>$row[5],"phone"=>$row[6],"uDate"=>$row[7]);
}
 
echo json_encode(array("user_data"=>$response));


?>