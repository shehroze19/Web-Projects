<?php 
include("connection.php");
@include("session.php");
if(count($_POST)>0){
    $ppassword=$_POST['ppass'];
    $encryptpass=md5($ppassword);
    $id=$_SESSION['sess_user_id'];
$result=mysqli_query($con, "SELECT `password` FROM `users` WHERE id='$id'");
$array = mysqli_fetch_assoc($result);

if($array['password']=$ppassword)
{
    $newpass=$_POST['password'];
$confpass=$_POST['confirmpassword'];

if($newpass== $confpass)
{
    $epass=md5($newpass);
    $query = mysqli_query($con,"UPDATE `users` SET `password`='$epass' WHERE id='$id'");
}
else{
    echo "Please enter same confim password";
}

}


}
?>
<!DOCTYPE html>

<html> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deal Pro</title>
    <meta name="description" content="Deal Pro">
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
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="about.php">News</a></li>
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
                <h1 class="page-title">Profile Details</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->



<div class="banner-text text-center">

        <?php 
        $Username=$_SESSION['sess_username'];

        $result=mysqli_query($con,"select * from users where username='$Username';");

        $array = mysqli_fetch_assoc($result);


        ?>

        <div class="container">

            <div class="form-group row">

                <h3>Account Details</h3></a>
            </h4>
        </div>

        <div class="panel-body text-center">



            <table  class="table table-responsive">

                <tr class="">
                    <th >Name</th>
                    <td> <?php  echo $array['first_name']." ".$array['last_name'] ?></td>
                </tr>

                <tr >
                    <th class="black">Username</th>
                    <td> <?php  echo $array['username'] ?></td>
                </tr>

                <tr >
                    <th class="black">email</th>
                    <td><?php  echo $array['email'] ?></td>
                </tr>
                <tr >
                    <th class="black">City</th>
                    <td><?php  echo $array['email'] ?></td>
                </tr>
                
            </table> 
            <div class="col-sm-10 col-sm-offset-1">
                        
            <form action="edit_profile.php">
                    <input type='submit' class='btn btn-finish btn-primary pull-right' name='update' value='Edit Profile' />
            </form>
            </div>
            
<br><br>

            <form action="#" method="post">

                <div class="profiel-header">
                    <h3>
                        <b>UPDATE</b> YOUR PASSWORD <br>
                    </h3>
                </div>

                <div class="clear">

                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                            <label>Previous Password <small>(required)</small></label>
                            <input name="ppass" type="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>New Password <small>(required)</small></label>
                            <input name="password" type="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm password : <small>(required)</small></label>
                            <input name="confirmpassword" type="password" class="form-control" required>
                        </div> 
                    </div>
                    <div class="col-sm-10 col-sm-offset-1">
                         <button type="submit" class="btn btn-default " > Update Password</button>
                    </div>

                </div>


            </form>

        </div>


    </div>





        <iframe name="iframe_check"  onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;"></iframe>





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