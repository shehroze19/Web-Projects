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
      

       
                <?php 

        if(count($_POST)>0){
            $cname=$_POST['name'];
            $address=$_POST['address'];
            $owner=$_POST['owner'];
            $designation=$_POST['designation'];
            $email=$_POST['email'];
            $special=$_POST['special'];
            $telephone=$_POST['telephone'];
            $mobile=$_POST['mobile'];
            $city=$_POST['city'];
            /*
            $num_query="INSERT INTO `contacts`(`mobile_number`, `is_active`) VALUES ($mobile,0)";
            $num_runner=mysqli_query($con,$num_query);
            

            $id_query="SELECT id FROM `contacts` WHERE mobile_number=$mobile";
            $id_runner=mysqli_query($con,$id_query);
            if (mysqli_num_rows($id_runner) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($id_runner)) {
        $id=$row["id"];
    }
} else {
    echo "0 results";
}*/         
            $city_result = mysqli_query($con,"SELECT `id` FROM `city` WHERE city_name='$city' ");
            $city_row = mysqli_fetch_array($city_result);
            $city_id=$city_row['id'];
            
            $check_query = mysqli_query($con,"SELECT `mobile` FROM `dealbook` WHERE mobile='$mobile'");
            $check_row = mysqli_fetch_array($check_query);
            if($check_row)
            {
                $query="INSERT INTO `dealbook`(`company_name`, `address`, `owner_name`, `designation`, `email`, `specialty`,`mobile`, `phone`,`city_id`,`used`,`is_active`) VALUES ('$cname','$address','$owner','$designation','$email','$special','$mobile','$telephone','$city_id',0,0)";
            
            $runner=mysqli_query($con,$query);
            if($runner){

                echo "<br>";
                echo "<div class='btn btn-block btn-success'>Company entered successfully</div>";
                echo "<div class='btn btn-block btn-success'>Contact admin for verification</div>";
                echo "<meta http-equiv='refresh' content='4;url=register.php'>";

            }
            else{       
                echo "<div class='btn btn-block btn-danger'>Error! Could not enter the company in deal book</div>";
            }
        }
          /*  else{
                echo "<div class='btn btn-block btn-danger '>Error! This mobile number already exist</div>";
                echo "<a href='dealbook.php'><div class='btn btn-block btn-warning'>Click here to try again</div></a>";
            }*/
            
            

}

        ?>

       

    

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