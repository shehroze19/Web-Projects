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
                                <li class="bg-success"><a><span>Welcome <?php echo $_SESSION['sess_fname']; ?> </span></a></li>
                	
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="properties.php">News feed</a></li>
                </li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="user_dealbook.php">DealBook</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="view_properties.php">Properties</a></li>
                
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

                                <li ><a href="view_friends.php" ><span>Friend List</span></a></li>
                                <li ><a href="inbox.php" ><span>Inbox</span></a></li>

                                <li ><a href="property.php"><span>Add a new Property</span></a></li>
                                <li ><a href="staffmembers.php"><span>Staff Members</span></a></li>
                                <li ><a href="view_properties.php" ><span>View Properties</span></a></li>
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
<div class="slider-area">
    <div class="slider">
        <div id="bg-slider" class="owl-carousel owl-theme">

            
            <div class="item"><img src="assets/img/slide1/2.jpg" alt="bla bla"></div>

        </div>
    </div>

    <div class="slider-content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                <h2 class="btn">Search for a property dealer</h2>
               
                <div class="search-form wow pulse" data-wow-delay="0.8s" style="height: 190px;">

                    <form action="usersearch.php" method="post" class=" form-inline">
                        

                        <div class="form-group col-sm-6">
                            <label style="color: grey;">Username</label><input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group col-sm-6">
                            <label style="color: grey;">Email</label><input type="email" class="form-control" name="email" placeholder="ahmed@gmail.com">
                        </div>
                        <div class="form-group col-sm-6"> 
                        

                             <label style="color: grey;">City</label>                           
                            <select id="lunchBegins" name='city' class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Search by city">
                          <?php       
                     $result2=mysqli_query($con,'SELECT `city_name` FROM `city`');




                     while($data = mysqli_fetch_assoc($result2)){


                        ?> 
                                <option name='city'><?php echo $data['city_name']; }?></option>
                               
                            </select>
                        </div>
                        <div class='form-group col-sm-6'>
            <label for='name'> Company Name</label>
            <select id="lunchBegins" name="cname" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select the company">
                                                        <?php
                                                            $result2=mysqli_query($con,"SELECT `company_name` FROM `dealbook` WHERE company_name!='0'");




                                                            while($data = mysqli_fetch_assoc($result2)){


                                                             echo "<option name='company'   value='".$data['company_name']."' >";
                                                             echo $data['company_name']; 
                                                             echo  '</option>';

                                                   }
                
                                                        ?>
                                                    </select>
            </div>
                        <br>
                       
                        <div class="form-group col-sm-12">
                            <label style="color: grey;">Contact Number</label><input type='text' class='form-control' name='number' placeholder='+923001234567' pattern='+923d{9}'>
                        </div>

                        

           <button class="btn search-btn" type="submit" style="height: 80px;width: 100px;"><i class="fa fa-search"></i></button>                 
                                <br>
                               
                    </div>  

                        </div>                    
                    </form>
                </div>
            </div>
        </div>
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