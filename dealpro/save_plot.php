<?php 
include("connection.php");
@include("session.php");

?>
<!DOCTYPE html>

<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>



    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="assets/css/price-range.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">  
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css"> 
    <link rel="stylesheet" href="assets/css/wizard.css"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

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
                <a class="navbar-brand" href="welcome.php"><img src="assets/img/dealpro.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse yamm" id="navigation">
                <div class="button navbar-right">
                    <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('details.php','_self')" data-wow-delay="0.45s">Settings</button>
                    <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('logout.php','_self')" data-wow-delay="0.45s">logout</button>
                    
                </div>
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="dealbook.php">News feed</a></li>
                </li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="properties.php">Properties</a></li>
                
                <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="contact.php">Contact</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->

<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Property Information</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<div>
    <!-- property area -->
 <?php
        if(count($_POST)>0){

                if (isset($_POST['upload'])) {
            $target = "plot_images/".basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];


                $pname=$_POST['pname'];
                $paddress=$_POST['paddress'];
                $area=$_POST['area'];
                $areaunit=$_POST['areaunit'];
                $description=$_POST['description'];
                $privacy=$_POST['privacy'];
                $city=$_POST['pcity'];
                $type=$_POST['ptype'];
                $status=$_POST['status'];
                $vlink=$_POST['vlink'];
                $price=$_POST['price'];
                

               $cityid=mysqli_query($con, "SELECT `id` FROM `city` WHERE city_name='$city'");
               $cityarray = mysqli_fetch_assoc($cityid);
               $cid=$cityarray['id'];
               
               $typeid=mysqli_query($con, "SELECT `id` FROM `plot_types` WHERE type_name='$type'");
               $typearray = mysqli_fetch_assoc($typeid);
               $tid=$typearray['id'];
              

               
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $query="INSERT INTO `plots`(`address`, `city_id`, `type_id`, `land_area`, `description`, `title`, `privacy_level`, `status`, `video_link`, `price`, `unit`, `image_path`)
                VALUES ('$paddress','$cid','$tid','$area','$description','$pname','$privacy','$status','$vlink','$price','$areaunit','$image')";
               $trunner=mysqli_query($con,$query);

               $pid=mysqli_query($con, "SELECT `id` FROM `plots` WHERE address='$paddress'");
               $parray= mysqli_fetch_assoc($pid);
               $plotid=$parray['id'];
               $user_id=$_SESSION['sess_user_id'];
               if($trunner){mysqli_query($con, "INSERT INTO `user_plots`(`user_id`, `plot_id`) VALUES ('$user_id','$plotid')");}
               
               $runner1=mysqli_query($con,"INSERT INTO `plot_images`(`plot_id`, `path`) VALUES ('$plotid','$image')");
               if($trunner)
               {
                  echo "<div class='btn btn-block btn-success'>Plot added successfully</div>";  

          echo"  <form action='property.php'>
                    <input type='submit' class='btn btn-finish btn-primary pull-right' name='update' value='Add another property' />
            </form>";
               }
              
              if (move_uploaded_file($_FILES['image']['tmp_name'], $target) ) {
        
    }
    else{
    }
    
              if($trunner AND $_SESSION['sess_account'] == "staff" AND $privacy !="Hold")
               {
                echo "<div class='btn btn-block btn-success'>Plot added successfully</div>";
                $report="User ".$_SESSION['sess_username']." added a plot titled ".$pname;
                $uid=$_SESSION['sess_user_id'];
                
                mysqli_query($con, "INSERT INTO `activities`(`user_id`, `description`) VALUES ('$uid','$report')");


               }
               
               
        
     }
   }
     
        
 ?>
  

</div>
</body>

</div>
<br><br><br><br><br><br><br><br><br><br><br>

<?php include("footer.php"); ?>


    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="assets/js//jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="assets/js/easypiechart.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/icheck.min.js"></script>

    <script src="assets/js/price-range.js"></script> 
    <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/wizard.js"></script>

    <script src="assets/js/main.js"></script>


</body>
</html>