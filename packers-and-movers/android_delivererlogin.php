<?php

require "connection.php";

@$username=$_POST["name"];
@$password=$_POST["password"];

$query="SELECT * FROM `deliverer` WHERE `dUsername`='."$username".' AND `dPassword`='."$password".';";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$result=mysqli_query($con,$query);
$response = array();
 
while($row = mysqli_fetch_array($result)){
    $response = array("dId"=>$row[0],"dName"=>$row[1],"dUsername"=>$row[2],"dPassword"=>$row[3],"phone"=>$row[4],"longitude"=>$row[5],"latitude"=>$row[6]);
}
 
echo json_encode(array("deliverer_data"=>$response));


?>