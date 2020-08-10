<?php 
session_start();
include("connection.php");
$phone=$_SESSION["phone"];
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
    <script>
                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                        };


                    </script>
    <style type="text/css">
        #textarea{
            border: 1px,solid;
            color: #838383;
            border-radius: 0px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        }
    </style>

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
                <h1 class="page-title">Register Your Company</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6 alert-warning">
      

       
         

           <div class='box-for overflow'>
            <div class='col-md-12 col-xs-12 register-blocks'>
            <h2>Company Information </h2> 
            <form action='usercompany_complete.php ' method='post'>
                <div class='row'>
            <div class='form-group col-sm-6'>
            <label for='name'>Company name *</label>
            <input type='text' class='form-control' name='name' required placeholder="Zayam Associates">
            </div>
            <div class='form-group col-sm-6'>
            <label for='owner'>Company Owner Name</label>
            <input type='text' class='form-control' name='owner' placeholder="Zayam Ahmed" >
            </div>
            <div class='form-group col-sm-12'>
            <label for='address'>Address *</label>
            <input type='text' class='form-control' name='address' required placeholder="CIIT, Park Road, Islamabad">
            </div>
            
            <div class='form-group col-sm-6'>
            <label for='designation'>Owner Designation</label>
            <input type='text' class='form-control' name='designation' placeholder="CEO">
            </div>
            <div class='form-group col-sm-6'>
            <label for='email'>Email</label>
            <input type='email' class='form-control' name='email' placeholder="something@outlook.com" >
            </div>
            <div class='form-group col-sm-6'>
            <label for='city'>City *</label>
            <select id="lunchBegins" name="city" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select the city" required>";

                    <?php 


                    $result2=mysqli_query($con,'SELECT `city_name` FROM `city`');




                    while($data = mysqli_fetch_assoc($result2)){


                        echo "<option name='city'   value='".$data['city_name']."' >";
                        echo $data['city_name'];
                        
                        echo  '</option>';

                    }
                

               ?>
            </select></div>
            <div class='form-group col-sm-6'>
            <label for='special'>Company Location(s) Speciality</label>
            <input type='text' class='form-control' name='special' placeholder="i-10,i-9,i-15">
            </div>
            <div class='form-group col-sm-6'>
            <label for='telephone'>Landline Number</label>
            <input type="Number" class='form-control' name='telephone' placeholder="090078601">
            
            </div>
            <div class='form-group col-sm-6'>
            <label for='mobile'>Mobile Number *</label>
            <input  class='form-control' name='mobile' value="<?php echo $phone ?>" readonly>
            </div>
        </div>
            <div class='text-center'>
            <button type='submit' class='btn btn-default'>Add Entry</button>
            </div>
            </form>
            </div>
            </div>

       

    

</div>


</div>

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