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

  <script>
                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                        };


                    </script>
    
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
                <h1 class="page-title">Add Property</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


    <!-- property area -->
   
<div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6 alert-warning">
      

       
         

            <div class='box-for overflow'>
            <div class='col-md-12 col-xs-12 register-blocks'>
            <h2>Property Information </h2> 
                  
           
<form action='save_plot.php' enctype='multipart/form-data' method='post'>           
           
            <div class='form-group'>
                        <label for='image' class=' form-group '>Property Image</label>
                        <input type='hidden' name='size' value='1000000' >                  
                        
                        <img id='output' class='img-thumbnail img-responsive form-control' style='width:200px;height:200px;' />
                        <input class='form-group' name='image' type='file' accept='image/*' onchange='loadFile(event)'>
                        
            </div>

            <div class='form-group'>
            <label for='pname'>Property Title *</label>
            <input type='text' class='form-control' name='pname' required placeholder="Zayam Associates G10 plot">
            </div>
            <div class='form-group'>
            <label for='paddress'>Address *</label>
            <input type='text' class='form-control' name='paddress' required placeholder="Plot 10, Street 34, G10, Islamabad">
            </div>
            
            <div class='form-group '>
            <label for='area'>Land Area</label>
            <input type='number' class='form-control ' name='area' placeholder="1200"  >
            </div>
             
             <div class="form-group ">
                                                    <label>Area Unit :</label>
                                                    <select id="basic" name="areaunit" class="selectpicker show-tick form-control">
                                                        
                                                        <option> Square Feet </option>
                                                        <option> Square Yards </option>
                                                        <option> Square Meters </option>
                                                        <option> Marla </option> 
                                                        <option> Kanal </option>    
                                                       
                                                    </select>
                                                </div>
                                                

            <div class='form-group'>
            <label for='description'>Description</label>
            <input type='text' class='form-control' name='description' placeholder="Description">
            </div>
            <div class="form-group">
                                                    <label>Privacy Level  :</label>
                                                    <select id="basic" name="privacy" class="selectpicker show-tick form-control">
                                                        
                                                        <option> Public </option>
                                                        <option> Private </option>  
                                                        <option> Hold </option>
                                                    </select>
                                                </div>
            <div class="form-group">
                                                    <label>Property City :</label>
                                                    <select id="lunchBegins" name="pcity" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                        <?php
                                                            $result2=mysqli_query($con,'SELECT * FROM `city`');




                                                            while($data = mysqli_fetch_assoc($result2)){

                                                                $city_id=$data['id'];
                                                             echo "<option name='city'   value='".$data['city_name']."' >";
                                                             echo $data['city_name']; 
                                                             echo  '</option>';

                                                   }
                
                                                        ?>
                                                    </select>
                                                </div>
            <div class="form-group">
                                                    <label>Property type :</label>
                                                    <select id="lunchBegins" name="ptype" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select property type">
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
            <div class="form-group">
                                                    <label>Property status  :</label>
                                                    <select id="basic" name="status" class="selectpicker show-tick form-control">
                                                        
                                                        <option> Sell </option>
                                                        <option> Rental </option>  
                                                       
                                                    </select>
                                                </div>

            <div class='form-group'>
            <label for='description'>Property Video link</label>
            <input type='text' class='form-control' name='vlink' placeholder="Property Video link">
            </div>
            <div class='form-group'>
            <label for='description'>Price in Rs.</label>
            <input type='number' class='form-control' name='price' placeholder="250000">
            </div>

            
            <div class='text-center'>
            <button type='submit' name="upload" class='btn btn-default'>Add Property</button>
            </div>
            </form>
            </div>
            </div>

       

    

</div>


</div>
<?php include("footer.php"); ?>



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