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
<div class="container">
    <div class="well well-sm">
        <strong>Category Title</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
   
  <?php
    $uid=$_SESSION['sess_user_id'];
    $result=mysqli_query($con,"SELECT `plot_id` FROM `user_plots` WHERE user_id='$uid'" );
    while($runner=mysqli_fetch_assoc($result))
    {
        $plot_id=$runner['plot_id'];
        $data=mysqli_query($con, "SELECT * FROM `plots` WHERE id='$plot_id'");
        $pimages=mysqli_query($con, "SELECT * FROM `plot_images` WHERE plot_id='$plot_id'");
        $image_runner=mysqli_fetch_assoc($pimages);
        while($row=mysqli_fetch_assoc($data)){
            
           
            echo"
            <div id='products' class=' list-group '>
            <div class='item  col-xs-6 col-lg-6'>
            <div class='thumbnail' >

                <img class='group list-group-image' src='plot_images/".$image_runner['path']."' alt='' />
                <div class='caption'>
                    <h4 class='group inner list-group-item-heading'>".$row['title']."</h4>
                    <p class='group inner list-group-item-text'>".$row['description']
                        ."</p>
                    <div class='row'>
                        <div class='col-xs-12 col-md-6'>
                            <p class='lead'>".$row['price']."
                                </p>
                        </div>
                        <div class='col-xs-12 col-md-6'>
                            <div class='button'>
                    <button id='share' onclick='myfuction()'  class='navbar-btn  nav-button wow bounceInRight login'  data-wow-delay='0.25s'>Share Property</button>
<div id='shareform'>
  <label>Enter Username</label> 
  <form action='shareproperty.php' method='get'>
    <input type='text' class='form-control' name='username' id='user' required>
    <input type='hidden' name='plot_id' value='$plot_id'>
    <input type='hidden' name='uid' value='$uid'>
    <input class='btn-default' type='submit' value='Share'> 
  </form>
</div>      
 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </div>

            ";
        }
    } 
?>  

</div>
    




        <iframe name="iframe_check"  onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;"></iframe>





<?php include("footer.php"); ?>


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
<script type="text/javascript">
    function myfuction() {
  
  // contact form animations
 
    $('#shareform').fadeToggle();
  
  $(document).mouseup(function (e) {
    var container = $("#shareform");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
};
</script>
<script src="assets/js/icheck.min.js"></script>
<script src="assets/js/price-range.js"></script>

<script src="assets/js/main.js"></script>

</body>
</html>