<?php

include("connection.php");
@include("session.php");

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
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="welcome.php">Home</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="user_dealbook_complete.php">Deal Book</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="verifyusers.php">Verify Users</a></li>
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
                                <li><a href="#" ><span>View Deal Book</span></a></li>
                                <li><a href="#" ><span>Edit Deal Book</span></a></li>


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

                <h3>Companies</h3></a>
            </h4>
        </div>
        <?php
            if(count($_POST)>0){
                $by_name = $_POST['by_name'];
                $by_city = $_POST['by_city'];
                $by_number = $_POST['by_number'];
                
                $city_result = mysqli_query($con,"SELECT `id` FROM `city` WHERE city_name='$by_city' ");
                $city_row = mysqli_fetch_array($city_result);
                $city_id=$city_row['id'];
                
                $query  = "SELECT * FROM `dealbook`";
                $conditions = array();
                if(! empty($by_name)) {
                    $conditions[] = "company_name='$by_name'";
                }
                if(! empty($by_city)) {
                    $conditions[] = "city_id='$city_id'";
                }
                if(! empty($by_number)) {
                    $conditions[] = "mobile='$by_number'";
                }

                $sql = $query;
                if (count($conditions) > 0) {
                $sql .= " WHERE " . implode(' AND ', $conditions);
                 }

                $result=mysqli_query($con,$sql);
               
                
                $cid=$city_row['id'];
                $city_result=mysqli_query($con, "SELECT `city_name` FROM `city` WHERE id='$cid'");
                $city_array = mysqli_fetch_assoc($city_result);
            }
            if(count($result)>0){
                while ($array = mysqli_fetch_assoc($result)) {
                echo "
                <div class='container'>
                    <div class='row'>
                    <div>
                    <div class='col-sm-6'>".$array['company_name']."</div>
                    <div class='col-sm-6'> <a href='show_company.php?id=".$array['id']."'>Show Details</a>
                    </div>
                    </div>
            
                ";
            }
            }
            else{
               echo "
                <div class='container'>
                    <div class='text-center'>
                    <h3>Oops no such record found</h3>
                    </div>
                </div>
            
                ";
            }
            
?>
         <div class='text'>
        <button class='btn btn-default' onclick='goBack()'>Go Back </button>
    </div>
</div>
</div>
<br><br>
            <?php include("footer.php"); ?>

<script>
function goBack() {
    window.history.back();
}
</script>
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