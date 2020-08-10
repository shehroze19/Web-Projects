<?php 
include('connection.php');

@include('session.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Delivery 2</title>

  

    <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Custom styles for this template -->

  <link href="css/welcome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">






<body>
 
 <?php 


     if(count($_POST)>0){
                  @$distance=$_POST['distance'];
                  if(@$distance<1){
                    @$distance=1;
                  }
                  @$from=$_POST['from'];
                  @$to=$_POST['to'];






                }

  else{
    echo "<a href='all_pharmacy_search.php'><div class='btn btn-danger text-center'>Error While leading Please click here and try again from begining</div></a>";
  }



if(isset($_POST['checked'])){
  



    if(isset($_POST['checkbox'])){


      $checkbox0 = $_POST['time'];

      $checkbox = $_POST['checkbox'];
      $checkbox2 = $_POST['doc'];
      $checkbox3 = $_POST['medicine'];
      $checkbox4 = $_POST['dosage'];
      $checkbox5 = $_POST['timing'];

      for($i=0;$i<count($checkbox);$i++){


        $update_id0 = $checkbox0[$i];

        $update_id = $checkbox[$i];
        $update_id2 = $checkbox2[$i];
        $update_id3 = $checkbox3[$i];
        $update_id4 = $checkbox4[$i];
        $update_id5 = $checkbox5[$i];
        $uname=$_SESSION['Username'];
        $cost=$distance*6+50;

        $sql = "INSERT INTO `pharmacy_prescription`(`prescription_id`, `patient_uname`, `time`, `docname`, `medicine`, `dosage`, `timing`,`cost`) VALUES ('$update_id','$uname','$update_id0','$update_id2','$update_id3','$update_id4','$update_id5','$cost')";
        $result = mysqli_query($con,$sql);
      }


      if($result){
        echo "<div class='btn btn-block alert-success'>Delivery Confirmed</div>";
      }
      else
      {
        echo "<div class='btn btn-block alert-danger'>Delivery Error</div>";
      
      }

    }
}

           
                ?>

  <script type="text/javascript">
      function toggle(source) {
        checkboxes = document.getElementsByName('checkbox[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
          checkboxes[i].checked = source.checked;
        }
      }
    </script>



  <div class="container-fluid">
    <form action="" method="post">


                  <table  class="table" border="2">
<tr>
                      <th class='bg-primary text-center'>Time</th>
                      <th class='bg-primary text-center'>Doctor Name</th>
                      <th class='bg-primary text-center'>Medicine</th>
                      <th class='bg-primary text-center'>Dosage</th>
                      <th class='bg-primary text-center'>Timing</th>
          <th class='bg-primary text-center' >Selcect <input type="checkbox" onClick="toggle(this)" />Select All<br/></th>


                      </tr>
                    <?php 
                    $Username=$_SESSION['Username'];

                    $result=mysqli_query($con,"select * from prescription where patient_uname='$Username';");



                    while($row=$data = mysqli_fetch_assoc($result)){
                      ;
                      echo "  
                      <tr>
                      <td class='text-center' style='color:black;'><input type='hidden' value=' ".$row['postingDate']."' name='time[]'  >".$row['postingDate']."</td>
                      <td class='text-center' style='color:black;'><input type='hidden' value=' ".$row['doctor_uname']."' name='doc[]'  > ".$row['doctor_uname']."</td>
                      <td class='text-center' style='color:black;'><input type='hidden' value=' ".$row['medicine_name']."' name='medicine[]'  > ".$row['medicine_name']."</td>
                      <td class='text-center' style='color:black;'><input type='hidden' value=' ".$row['dosage']."' name='dosage[]'  > ".$row['dosage']."</td>
                      <td class='text-center' style='color:black;'><input type='hidden' value=' ".$row['time']."' name='timing[]'  > ".$row['time']."</td>
              <td><input type='checkbox' name='checkbox[]' value='".$row['id']."'</td>


                      </tr>";

                    }



                    ?>




                  </table> 

<div class="form-group"><input type="Submit" name="checked" value="Approve Selected" class="btn btn-block alert-success"></div>




  </div>



 



      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="js/bootstrap.min.js"></script>
  
      <script src="js/main.js"></script>


</body>
</html>