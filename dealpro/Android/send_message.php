

<?php
   include("connection.php");


if(count($_POST)>0){

$sender_id = $_POST['sender_id'];
$receiver_id = $_POST['receiver_id'];
$body=$_POST['text'];



                // $sender_id='61';
// $receiver_id='63';   
                    
    $result= mysqli_query($con,"INSERT INTO `chat` (sender_id,receiver_id,body)
                  VALUES ('$sender_id','$receiver_id', '$body')" );

 if($result){
  echo "{
    \"success\":\"true\"
  }";


 }
 else{
  echo "{
    \"success\":\"false\"
  }";
 }
  }
?>  
