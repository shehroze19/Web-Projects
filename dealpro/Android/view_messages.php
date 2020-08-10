<?php
   include("connection.php");


if(count($_POST)>0){

$sender_id = $_POST['sender_id'];
$receiver_id = $_POST['receiver_id'];


             
                    
    $result= mysqli_query($con,"SELECT * FROM `chat` where (sender_id='$sender_id' AND receiver_id='$receiver_id') OR (sender_id=$receiver_id AND receiver_id=$sender_id)" );

$data = array();
  while($runner=mysqli_fetch_assoc($result)){
  
    array_push($data, $runner);
}

$json= json_encode($data);
    echo $json;
  }
?>  
