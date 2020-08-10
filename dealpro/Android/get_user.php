<?php
   include("connection.php");


   
    
    


   $data_array= array();
    $result=mysqli_query($con,"SELECT * FROM `users`" );
    while($row=mysqli_fetch_assoc($result))
    {
       
       
          array_push($data_array, $row);
       
                                   }

    
    $json=json_encode($data_array);
    echo $json;


?>  
