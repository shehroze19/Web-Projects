<?php 
include("connection.php");




       
            
              //  $result=mysqli_query($con,"SELECT * FROM `plots` WHERE privacy_level='Public'");

                $result = mysqli_query($con,"SELECT * FROM `dealbook` WHERE  `company_name`!='0'");
               $data_array= array();
   
    while($row=mysqli_fetch_assoc($result))
    {
       
       
          array_push($data_array, $row);
       
                                   }

    
    $json=json_encode($data_array);
    echo $json;


            ?>
          