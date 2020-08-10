

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


    $sender= mysqli_query($con,"SELECT * FROM  `users` where `id`=$sender_id");
    $receiver= mysqli_query($con,"SELECT * FROM  `users` where `id`=$receiver_id");

    $contactExistsSender = mysqli_query($con,"SELECT `contacts` FROM  `users` where `contacts` LIKE '%$receiver_id%' AND `id`=$sender_id" );

    $contactExistsReceiver = mysqli_query($con,"SELECT `contacts` FROM  `users` where `contacts` LIKE '%$sender_id%' AND `id`=$receiver_id" );

    $addcontact = "";

    $row = mysqli_fetch_assoc($contactExistsSender);
    if($row == null)
    {
      $receiverRow = mysqli_fetch_assoc($receiver);
      $receiverName = $receiverRow['username'];
      $addcontactsender=mysqli_query($con,"UPDATE `users` SET `contacts` = concat(`contacts`, '^$receiver_id*$receiverName') WHERE `id` = '$sender_id'");
    }
    
    $row = mysqli_fetch_assoc($contactExistsReceiver);
    if($row == null)
    {
      $senderRow = mysqli_fetch_assoc($sender);
      $senderName = $senderRow['username'];
      $addcontactreceiver=mysqli_query($con,"UPDATE `users` SET `contacts` = concat(`contacts`, '^$sender_id*$senderName') WHERE `id` = '$receiver_id'");
    }
    

 if($addcontactsender && $result){
  echo "{
    \"contactAddedStatus\":true,
    \"messageSentStatus\":true
  }";
 }

 else if($result)
 {
  echo "{
    \"contactAddedStatus\":false,
    \"messageSentStatus\":true
  }";
 }
 else{
  echo "{
    \"contactAddedStatus\":false,
    \"messageSentStatus\":false
  }";
 }
  }
?>  
