<?php
include('connection.php');
session_start();
@include('session.php');

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

           <!-- Breadcrumbs-->
          <ol class='breadcrumb'>
            <li class='breadcrumb-item'>
              <a href='welcome.php'>Dashboard</a>
            </li>
            <li class='breadcrumb-item active'>Report Incident</li>
          </ol>




        <div class="card card-signin my-5">
          <div class="card-body">



            <h5 class="card-title text-center" style="color: black;">Report Incident</h5>
            <form  action="incident_report_complete.php" method="post" class="form-signin">
              
            
              
              <div class="form-group "><label  >Category </label>
                        <select class="form-control" name="category">

                          <?php 


                          $result=mysqli_query($con,"select category_name from category");

                          $runner=mysqli_query($con,$query);



                          while($data = mysqli_fetch_assoc($result)){


                            echo "<option name='category' value=";
                            echo $data['category_name'];
                            echo ">";
                            echo $data['category_name'];
                            echo  "</option>";


                          }

                          ?>  

                        </select>


                      </div>




               <div class="form-group">
                <label for="cell">Description</label>
                <textarea type="text" name="description" class="form-control" required autofocus></textarea>
                
              </div>

<br>


              <div class="form-label-group">
                <input type="text" name="tag" class="form-control" >
                <label >Tags (optional)</label>
              </div>

<br>

 <div class="form-group">
                <label >Explanation (optional)</label>

                <textarea type="text" name="explanation" class="form-control"  autofocus></textarea>
              </div>


<br>

 <div class="form-group">
                <label >Action to be taken (optional)</label>

                <input type="text" name="action_to_be_taken" class="form-control" >
              </div>


<br>


 <div class="form-label-group">
                <input type="date" name="date" class="form-control" >
                <label >Date of incident</label>
              </div>


<br>

 <div class="form-label-group">
                <input type="text" name="point_of_contact" class="form-control" >
                <label >Point of contact</label>
              </div>


<br>


             
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Report Incident</button>
              <hr  class="my-4">
            </form>
          </div>
        </div>
    </div>
  </div>
      </div>
    </header>







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
