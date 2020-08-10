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
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="properties.php">News feed</a></li>
                </li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="user_dealbook.php">DealBook</a></li>
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
                                <li class="bg-success"><a><span>Welcome <?php echo $_SESSION['sess_fname']; ?> </span></a></li>

                                <li ><a href="view_friends.php" ><span>Friend List</span></a></li>
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
                <h2 class="btn">Looking for a Property</h2>
               
                <div class="search-form wow pulse row" data-wow-delay="0.8s" style="height: 300px;">

                    <form action="prop_search_complete.php" method="post" class=" form-inline">
                        <div class="col-sm-12">
                            <div class="form-group col-sm-4"> 
                        

                             <label style="color: grey;">City</label>                           
                            <select id="lunchBegins" name='city' class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Search by city">
                          <?php       
                            $result2=mysqli_query($con,'SELECT `city_name` FROM `city`');




                            while($data = mysqli_fetch_assoc($result2)){


                            ?> 
                                <option name='city'><?php echo $data['city_name']; }?></option>
                               
                            </select>
                        </div>

                            <div class="form-group col-sm-4">
                                <label style="color: grey;">Address</label><input type="text" class="form-control" name="address" placeholder="CIIT, Park Road, Islamabad.">
                            </div>

                            <div class="form-group col-sm-4">
                                                    <label style="color: grey;">Property type :</label>
                                                    <select id="lunchBegins" name="type" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select property type">
                                                        <?php
                                                            $result_property=mysqli_query($con,'SELECT * FROM `plot_types`');




                                                            while($data = mysqli_fetch_assoc($result_property)){

                                                                $type_id=$data['id'];
                                                             echo "<option name='type'   value='".$data['type_name']."' >";
                                                             echo $data['type_name']; 
                                                             echo  '</option>';

                                                   }
                
                                                        ?>
                                                    </select>
                                                </div>

                        </div>
                        
<br>
                        
                        <div class="col-sm-4" >
                          Price
                         <div class="col-sm-6" style="display: inline;">
                            <label style="color: grey;">
                                Price 

                            </label>
                            <br>
                            <label style="color: grey;">Min</label><input width="10px" type="number" class="form-control" name="pmin" placeholder="0">
                            <div>
                                <label style="color: grey;">to</label>
                                <label style="color: grey;">Max</label>
                            <input width="10px" type="number" class="form-control" name="pmax" placeholder="10000"> 
                            </div>
                                
                               
                           </div>
                        </div>
                        
                        <div class="col-sm-4" >
                          Area
                         <div class="col-sm-6" style="display: inline;">
                            <label style="color: grey;">
                                Area 

                            </label>
                            <br>
                            <div></div>
                            <label style="color: grey;">Min</label><input width="10px" type="number" class="form-control" name="amin" placeholder="0">
                            <div>
                                <label style="color: grey;">to</label>
                                <label style="color: grey;">Max</label>
                            <input width="10px" type="number" class="form-control" name="amax" placeholder="10000"> 
                            </div>
                                
                               
                           </div>

                           <div class="col-sm-6">
                                     <div class="form-group">
                                                    <label style="color: grey;">Area Unit :</label>
                                                    <select id="basic" name="areaunit" class="selectpicker show-tick form-control">
                                                        
                                                        <option> Square Feet </option>
                                                        <option> Square Yards </option>
                                                        <option> Square Meters </option>
                                                        <option> Marla </option> 
                                                        <option> Kanal </option>    
                                                       
                                                    </select>
                                                </div>
                           </div>
                        </div>
                        <div class="">
                            
                        </div>
                       
                        <br>
                       

                        

                            
                                <br>
                               
                    </div>  
                    <button class="btn search-btn" type="submit" style="height: 50px;width: 200px;">Search</button>

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