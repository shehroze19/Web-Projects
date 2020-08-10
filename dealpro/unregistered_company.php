<?php

include("connection.php");
@include("session.php");

 if(count($_POST)>0){
    
      $id = $_POST['id'];
      



$sql = "UPDATE `dealbook` SET is_active='1' WHERE id='$id'";
$result = mysqli_query($con,$sql);
}

 ?>

<!DOCTYPE html>

<html> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deal Pro</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="assets/css/price-range.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">  
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>


    <!-- Body content -->

   

    <nav class="navbar navbar-default ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="assets/img/dealpro.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse yamm" id="navigation">
                <div class="button navbar-right">
                    <div class="button navbar-right">
                    <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('logout.php','_self')" data-wow-delay="0.45s">logout</button>
                    
                </div>
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="adminhome.php">Home</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="dealbook.php">Deal Book</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="verifyusers.php">Verify Users</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="verifycompany.php">Verify Company</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="about.php">About</a></li>
                

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->



<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <div class="page-title">


                    <nav class="navbar navbar-default btn">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav btn">
                                <li><a href="unregisteredadmin.php" ><span>Unregistered</span></a></li>
                                <li><a href="registeredadmin.php" ><span>Registered</span></a></li>


                            </ul>

                        </div>
                    </nav>

                </div>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<div class="container">

            <div class="form-group row">

                <h3>Account Details</h3></a>
            </h4>
        </div>
        <?php
            
                $result=mysqli_query($con,"SELECT * FROM `dealbook` WHERE is_active='0'");

       
     
?>
        <form name="formactivate"></form>
        <table  class="table table-responsive">

                <tr class="">
                    <th>Company Name</th>
                    <th>Address</th>
                        <th>Contact number</th>
                    <th>Active/Inactive</th>
                </tr>
                 <?php
                while($row=mysqli_fetch_assoc($result)){
                 
                   echo "<tr>";
                   echo "<td>".$row['company_name']."</td>";
                   echo "<td>".$row['address']."</td>";
                   echo "<td>".$row['mobile']."</td>";
                   echo '<td><form method="post" action="unregistered_company.php">';
                  
                   echo '<input type="hidden" name="id" value='.$row['id'].'>';
                     echo ' <input type="submit" name="name" value="Activate">';
              
                   
                   echo "</td>";
                   echo "</tr>";
               }

            ?>
            </table> 
        

</div> 
</div>



<?php include("footer.php"); ?>


<script src="assets/js/modernizr-2.6.2.min.js"></script>

<script src="assets/js/jquery-1.10.2.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.js"></script>

<script src="assets/js/easypiechart.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>

<script src="assets/js/icheck.min.js"></script>
<script src="assets/js/price-range.js"></script>

<script src="assets/js/main.js"></script>

</body>
</html>