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



<div>
    <!-- property area -->
 <?php
        if(count($_POST)>0){
                $pname=$_POST['pname'];
                $paddress=$_POST['paddress'];
                $area=$_POST['area'];
                $description=$_POST['description'];
                $privacy=$_POST['privacy'];
                $city=$_POST['pcity'];
                $status=$_POST['status'];
                $vlink=$_POST['vlink'];
                $price=$_POST['price'];

               $result=mysqli_query($con,"INSERT INTO `plots` (`address`, `city_id`, `type_id`, `land_area`, `description`, `title`, `privacy_level`, `status`, `video_link`, `price`, `unit`) VALUES ('$paddress',1,1,'$area','$description','$pname','$privacy','$status','$vlink','$price','Square KM')");
        
     }
        
 ?>
  

</div>
</body>

</div>




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