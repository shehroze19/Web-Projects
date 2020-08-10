<?php
$con=mysqli_connect("localhost","root","","dealpro");
session_start();

 $username = "";
 $password = "";
 
if(count($_POST)>0){
$username=$_POST['username'];
$rawpassword=$_POST['password'];
$password=md5($rawpassword);
$query = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'");


$row = mysqli_fetch_array($query);
if(count($row)==0)
{

        $error = "<br><div class='btn btn-block btn-danger'>Your Username or Password is invalid</div>";
          
}
session_regenerate_id();
    $_SESSION['sess_user_id'] = $row['id'];
  $_SESSION['sess_username'] = $row['username'];
  $_SESSION['sess_fname']= $row['first_name'];
        $_SESSION['sess_userrole'] = $row['user_type'];
        $_SESSION['sess_account']=$row['account_type'];

        echo $_SESSION['sess_userrole'];
  session_write_close();

  if( $_SESSION['sess_userrole'] == "admin"){
   header('Location: adminhome.php');
  }
   if( $_SESSION['sess_userrole'] == "user" AND $_SESSION['sess_account'] == "owner"){
   header('Location: welcome.php');
  }
 if( $_SESSION['sess_userrole'] == "user" AND $_SESSION['sess_account'] == "staff"){
   header('Location: staffwelcome.php');
  }
}
 ?>
 
<!DOCTYPE html>

<html> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deal Pro</title>
    <meta name="description" content="Real Estate project">
    <meta name="author" content="Ali, Abdullah">
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
                    <li class="wow fadeInDown " data-wow-delay="0.1s"><a class="" href="index.php">Home</a></li>
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
                <h1 class="wow fadeInLeft" data-wow-delay="0.2s">Login</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<div class="row container">

    <div class="col-md-4"></div>

    <div class="col-md-6 alert-info">
        <div class="box-for overflow">                         
            <div class="col-md-12 col-xs-12 login-blocks">
                <h2>Login : </h2> 
                <form action="" method="post">
                    <div class="form-group">
                        <label for="user">Username</label>
                        <input type="text" class="form-control" name="username" id="user" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="text-right">
                        <a href="forgot_password.php">Forgot Password?</a>
                        <br>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-default wow fadeInDown"  data-wow-delay="0.5s"> Log in</button>
                    </div>
                    <?php echo @$error; ?>
                </form>
                <br>


            </div>

        </div>
    </div>


</div>

</br
>

<?php include("footer.php"); ?>
<script type="text/javascript">
  var input = document.getElementById('user');
input.focus();
input.select();  
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