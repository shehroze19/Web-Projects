<?php
   include("connection.php");


   if(count($_POST)>0){

$username=$_POST['username'];
                   
                    }
    $user_id= mysqli_query($con,"SELECT `id` FROM `users` WHERE username='$username'" );
   while ($row = mysqli_fetch_assoc($user_id)) {
    $id=$row['id'];
    
}

   $data_array= array();
    $result=mysqli_query($con,"SELECT `plot_id` FROM `user_plots` WHERE user_id='$id'" );
    while($runner=mysqli_fetch_assoc($result))
    {
        $plot_id=$runner['plot_id'];
        $data=mysqli_query($con, "SELECT * FROM `plots` WHERE id='$plot_id'");
        
       
        while($row=mysqli_fetch_assoc($data)){
          array_push($data_array, $row);
       
                    }
                }

    
    $json=json_encode($data_array);
    echo $json;


?>  
