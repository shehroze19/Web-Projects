

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
    <link rel="stylesheet" href="css/sharestyle.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">  
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
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
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="properties.php">News feed</a></li>
                </li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="view_properties.php">Properties</a></li>
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
                <div class="page-title">


                    <nav class="navbar navbar-default btn">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav btn">
                                <li ><a><span>Welcome <?php echo $_SESSION['sess_fname']; ?> </span></a></li>

                                <li ><a href="view_friends.php" ><span>Friend List</span></a></li>
                                <li ><a href="property.php"><span>Add a new Property</span></a></li>
                                <li ><a href="staffmembers.php"><span>Staff Members</span></a></li>
                                <li class="bg-success" ><a href="view_properties.php" ><span>View Properties</span></a></li>
                                <li><a href="activity.php" ><span>Staff Activity</span></a></li>


                            </ul>

                        </div>
                    </nav>

                </div>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->





        <?php


if($_GET){
            
                     $username=$_GET['username'];
                     $uid=$_GET['uid'];
                     $plot_id=$_GET['plot_id'];

                     $query = mysqli_query($con,"SELECT `id` FROM users WHERE username='$username'");
                     if($query){
                        $result_id = mysqli_fetch_array($query);
                        $receiver_id=$result_id['id'];
                        if($receiver_id!=$uid)
                        {
                              $runner= mysqli_query($con,"INSERT INTO `share_plots`(`plot_id`, `reciever_id`, `sender_id`) VALUES ('$plot_id','$receiver_id','$uid')");
                            if($runner)
                            {
                                echo "<div class='btn btn-block btn-success'>Shared successfully</div>";
                                echo " <div class='text-center'>
                                <button class='btn btn-default' onclick='goBack()'>Go Back </button>
                                 </div>";
                           }
                        }
                        else{
                            echo "<div class='btn btn-block btn-danger'>Invalid user!. Can't share it with yourself</div>";
                         echo " <div class='text-center'>
                                <button class='btn btn-default' onclick='goBack()'>Go Back </button>
                                 </div>";
                        }
                     
                     }
                     else {
                        echo "<div class='btn btn-block btn-danger'>Sorry!! No such user found</div>";
                         echo " <div class='text-center'>
                                <button class='btn btn-default' onclick='goBack()'>Go Back </button>
                                 </div>";
                     }

             }
                    

?>




<?php include("footer.php"); ?>

<script>
function goBack() {
    window.history.back();
}
</script>
<script src="assets/js/modernizr-2.6.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/myscripts.js"></script>
<script src="assets/js/jquery-1.10.2.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.js"></script>

<script src="assets/js/easypiechart.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>

</script>
<script src="assets/js/icheck.min.js"></script>
<script src="assets/js/price-range.js"></script>

<script src="assets/js/main.js"></script>

</body>
</html>