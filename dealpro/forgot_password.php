<?php 

include("connection.php");
session_start();
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
                    <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('login.php','_self')" data-wow-delay="0.45s">Login</button>
                    <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('register.php','_self')" data-wow-delay="0.48s">Register</button>
                </div>
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="index.php">Home</a></li>


                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="about.php">About</a></li>
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
                <h1 class="page-title">Recover Password</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6 alert-warning">
        <div class="box-for overflow">
            <div class="col-md-12 col-xs-12 register-blocks">
                <h2>Account Recovery</h2> 
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Enter email address</label>
                        <input type="email" class="form-control" name="email" placeholder="www.myemail@yahoo.com"  >
                    </div>
                   
                    <div class="text-center">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                    <?php
                    
                    if(count($_POST)>0){
   
           $email=$_POST['email'];
           $_SESSION['email']=$email;
           
           $check=mysqli_query($con, "SELECT `id`,`email` FROM `users` WHERE email='$email'");
           $array=mysqli_fetch_array($check);
           $_SESSION['id']=$array['id'];
          if(count($array)>0)
           {
            $code=rand(1111,9999);
           $_SESSION["code"]=$code;
/*
            $to      = $email;
            $subject = 'Password Recovery';
            $message = 'Your verification number is '.$code;


            mail($to, $subject, $message);*/
            echo "<div class='btn btn-block btn-success'>Recovery email has been sent to your email address</div>";
            
            echo "<meta http-equiv='refresh' content='3;url=verify_email.php'>";
           
}
else{
    echo "<div class='btn btn-block btn-success'>Recovery email  has been sent to your email address</div>";
    echo "<meta http-equiv='refresh' content='3;url=login.php'>";
}

}
                    ?>
                </form>
            </div>
        </div>
    </div>


</div>

</br>
</br>
</br>
</br>


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