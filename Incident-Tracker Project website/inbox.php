<?php
include('connection.php');
session_start();
@include('session.php');



if(count($_POST)>0){

$sender_id = $_POST['sender_id'];
$receiver_id = $_POST['receiver_id'];
$body=$_POST['text'];



                if($body!=null or $body!=""){    
    $result= mysqli_query($con,"INSERT INTO `chat` ( `message`, `user_email`, `employee_email`)
                  VALUES ('$body','$sender_id','$receiver_id' )" );

 if($result){
 

 }
 else{

 }
  }
  else{



}

}




?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <?php 
    include('login_navbar.php'); ?>
      <div id="content-wrapper">

        <div class="container-fluid">



<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="btn-panel btn-panel-conversation">
                <a href="" class="btn  col-md-12 send-message-btn " role="button"><i class="fa fa-search"></i> Reload Page</a>
            </div>
        </div>

        <div class="col-md-offset-1 col-md-7">
            <div class="btn-panel btn-panel-msg">

            </div>
        </div>
    </div>
    <div class="row">

        <div class="conversation-wrap col-md-3">

            
    
      <input type="text" type="text" id="myInput" onkeyup="myFunction();"  class="form-control text-center" placeholder="Search a assigned employee" style="color: black;">

      <br>
      <h6 class="text-center">Chat</h6>
      <table id="myTable"  class="table table-condensed" >
         
        <?php 



        $count=0;
        $my_email=$_SESSION['email'];
        $run=mysqli_query($con,"SELECT DISTINCT `current_assignee` from `incident` WHERE `current_assignee`!='' and `email`='$my_email' ");

        while($run2=mysqli_fetch_assoc($run)){
            $reciv_email=$run2['current_assignee'];

            $count++;


            $result22=mysqli_query($con,"SELECT DISTINCT `current_assignee` from `incident` WHERE `current_assignee`!='' and `email`='$my_email' ");
            while($runner22=mysqli_fetch_assoc($result22)){

             $name22= $runner22['current_assignee'];



            echo "<tr><td class='text-center'> <a href='inbox.php?email=".$reciv_email."#send'><div class='btn btn-info btn-block'>By: ".$name22."</div></a><br>";







            $result=mysqli_query($con,"SELECT * FROM `chat` where (`user_email`='$my_email' AND `employee_email`='$name22')  ORDER BY `time` DESC limit 1");


            while($runner22=mysqli_fetch_assoc($result)){ 
                echo "Recent Message:  ".$runner22['message']."<br>";
                echo "Time : ".date('h:i:s a m/d/Y', strtotime($runner22['time']))."</td></tr><hr>";


            }



        }



        

    }                   
    echo "<p class='text-center'>Total Assigned : ".$count."</p>";

    ?>
    
</table>



        </div>



        <div class="message-wrap col-md-8">
            <div class="msg-wrap">
<?php 

           if (isset($_GET['email']) && $_GET['email']!=$my_email ){


            $email =  $_SESSION['email'];

$receiver_uname = $_GET['email'];



           $result=mysqli_query($con,"SELECT * FROM `chat` where (user_email='$email' AND employee_email='$receiver_uname') OR (user_email='$receiver_uname' AND employee_email='$email') ORDER BY `time` ASC");




echo "
                <div class='alert alert-info msg-date'>
                    <strong style='color: black;'>Chat with  ".$name22."</strong>
                </div>";




 while($runner=mysqli_fetch_assoc($result)){
            
           

                    

if($runner['user_email']==$email){

echo "<br> <div class='media msg table-bordered alert-success' >
                    <a class='pull-left' href='#'>
                       
                    </a>
                    <div class='media-body'>
                        <small class='pull-right time'><i class='fa fa-clock-o'></i>".date('h:i:s a m/d/Y', strtotime($runner['time']))."</small>

                        <h5 class='media-heading'>Sent by You</h5>
                        <small class='col-md-10 table-bordered'>".$runner['message']."</small>
                    </div>
                </div>";


}
elseif($runner['employee_email']==$email){
  echo "<br> <div class='media msg table-bordered alert-primary'>
                  
                    <div class='media-body'>
                        <small class='pull-right time'><i class='fa fa-clock-o'></i>".date('h:i:s a m/d/Y', strtotime($runner['time']))."</small>

                        <h5 class='media-heading'>Sent by  ".$name22."</h5>
                        <small class='col-md-10 table-bordered'>".$runner['message']."</small>
                    </div>
                </div>";
}


}
echo "<div id='send'></div>";


echo "


<form  action='' method='post'><input type='hidden' name='sender_id' value='".$email."'>
                <input type='hidden' name='receiver_id' value='".$name22."'>
                
            </div>

            <div class='send-wrap '>

                <textarea  name='text' class='form-control send-message' rows='3' placeholder='Write a reply...'></textarea>


            </div>
            <div class='btn-panel'>
                <button type='submit' class=' col-md-12 text-right btn   send-message-btn btn-info' style='color: black;' role='button'><i class='fa fa-plus'></i> Send Message</button></form>
            </div>
        </div>
    </div>
</div>
";



                }
 ?>

           
  









        </div>
        <!-- /.container-fluid -->

   <?php include('footer_login.php'); ?>
    

      </div>
      <!-- /.content-wrapper -->

    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
