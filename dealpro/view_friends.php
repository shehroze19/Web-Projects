<?php 
include('connection.php');
@include('session.php');

?>
<!DOCTYPE html>

<html> 
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Deal Pro</title>
    <meta name='description' content='Real Estate project'>
    <meta name='author' content='Ali, Abdullah'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>


    <link rel='stylesheet' href='assets/css/normalize.css'>
    <link rel='stylesheet' href='assets/css/font-awesome.min.css'>
    <link rel='stylesheet' href='assets/css/fontello.css'>
    <link href='assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css' rel='stylesheet'>
    <link href='assets/fonts/icon-7-stroke/css/helper.css' rel='stylesheet'>
    <link href='assets/css/animate.css' rel='stylesheet' media='screen'>
    <link rel='stylesheet' href='assets/css/bootstrap-select.min.css'> 
    <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/icheck.min_all.css'>
    <link rel='stylesheet' href='assets/css/price-range.css'>
    <link rel='stylesheet' href='assets/css/owl.carousel.css'>  
    <link rel='stylesheet' href='assets/css/owl.theme.css'>
    <link rel='stylesheet' href='assets/css/owl.transitions.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    <link rel='stylesheet' href='assets/css/responsive.css'>
</head>
<body>


    <nav class='navbar navbar-default '>
        <div class='container'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navigation'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='welcome.php'><img src='assets/img/dealpro.png' alt=''></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse yamm' id='navigation'>
                 <div class='button navbar-right'>
                    <button class='navbar-btn nav-button wow bounceInRight login' onclick=' window.open('logout.php','_self')' data-wow-delay='0.45s'>logout</button>
                    
                </div>
                <ul class='main-nav nav navbar-nav navbar-right'>
                    <li class='wow fadeInDown ' data-wow-delay='0.1s'><a class='' href='welcome.php'>Home</a></li>
                    <li class='wow fadeInDown' data-wow-delay='0.1s'><a class='' href='dealbook.php'>Deal Book</a></li>
                </li>

                <li class='wow fadeInDown' data-wow-delay='0.2s'><a class='' href='properties.php'>Properties</a></li>


                <li class='wow fadeInDown' data-wow-delay='0.5s'><a href='about.php'>About</a></li>
                <li class='wow fadeInDown' data-wow-delay='0.6s'><a href='contact.php'>Contact</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->



<div class='page-head'> 
    <div class='container'>
        <div class='row'>
            <div class='page-head-content'>
                <h1 class='page-title'>Result</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->



                 
                  
<div class='container'>
  <div class='top'>
    <h2>Friend's List</h2>
  </div>
  <div class='row'>

    <div class='shadow'>
     <?php
     $id=$_SESSION['sess_user_id'];
     $result=mysqli_query($con, "SELECT `friend_id` FROM `friends` WHERE user_id='$id'");
     while($array=mysqli_fetch_assoc($result))
     {
        $uid=$array['friend_id'];
        $info=mysqli_query($con, "SELECT * FROM `users` WHERE id='$uid'");
        $info_array=mysqli_fetch_assoc($info);
        $img=$info_array['profile_picture'];
        $string= "users_images/".$img;
         echo "
      <div class='col-sm-12'>
        <div class='col-sm-1'>
          <img src='".$string."' class='img-thumbnail' width='100px'>
        </div>
        <div class='col-sm-7'>
          <h5><a href='#'>".$info_array['first_name']." ".$info_array['last_name']."</a></h5>
          <p><a href='#'>".$info_array['date_added']."</a></p>
        </div>
        <div class='col-sm-4'>  
          <br>
          <a href='#'>Show Profile</a>
        </div>
      </div>";
     }

     
    
      ?>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>


<script src='assets/js/modernizr-2.6.2.min.js'></script>

<script src='assets/js/jquery-1.10.2.min.js'></script> 
<script src='bootstrap/js/bootstrap.min.js'></script>
<script src='assets/js/bootstrap-select.min.js'></script>
<script src='assets/js/bootstrap-hover-dropdown.js'></script>

<script src='assets/js/easypiechart.min.js'></script>
<script src='assets/js/jquery.easypiechart.min.js'></script>

<script src='assets/js/owl.carousel.min.js'></script>
<script src='assets/js/wow.js'></script>

<script src='assets/js/icheck.min.js'></script>
<script src='assets/js/price-range.js'></script>

<script src='assets/js/main.js'></script>

</body>
</html>