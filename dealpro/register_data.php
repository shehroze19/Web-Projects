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
                <h1 class="page-title">Register Account</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6 alert-warning">
       <?php 
    $check_query=mysqli_query($con, "SELECT `is_active` FROM `dealbook` WHERE mobile='$phone'");    
      $result=mysqli_fetch_array($check_query);
      $is_active=$result['is_active'];
      if($is_active==1)
      {
       $cname="";
       $address="";
       $email="";
       
           $query = mysqli_query($con,"SELECT `company_name`, `address`, `email`, `mobile`,`used` FROM `dealbook` WHERE mobile=$phone");   
            $row = mysqli_fetch_array($query);
   
           if(count($row)>0)
           {
           $result=mysqli_query($con,"select `company_name`, `address`,  `email`, `mobile` FROM `dealbook` where mobile = '$phone' ");
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row2 = mysqli_fetch_assoc($result)) {
             $cname=$row2['company_name'];
             $address=$row2['address'];
             $email=$row2['email'];
             }
            } else {
             echo "Register as an owner";
                }  

                
            echo "<div class='btn btn-block btn-success'>Number ".$phone." is Registered! Start creating your Account</div></a>";

            echo " <div class='box-for overflow'>
            
                <div class='col-md-12 col-xs-12 register-blocks'>
            <h2>Account Details </h2>           
            <form action='register_data_complete.php' enctype='multipart/form-data' method='post'>           
        
            <div class='form-group col-sm-6'>
            
                        <label for='image' class=' form-group '>Profile Image</label>
                        <input type='hidden' name='size' value='1000000' >                  
                        
                        <img id='output' class='img-thumbnail img-responsive form-control' style='width:200px;height:200px;' />
                        <input class='form-group' name='image' type='file' accept='image/*' onchange='loadFile(event)'>
                        
            </div>
            <div class='form-group col-sm-6'>
                <div class='form-group '>
                    <label for='firstname'>First Name *</label>
                    <input type='text' class='form-control' name='firstname' required placeholder='Muhammad'>
                </div>
                <div class='form-group '>
                    <label for='lastname'>Last Name </label>
                    <input type='text' class='form-control' name='lastname' placeholder='Ali'>
                    <input class='hidden' name='active' value=1>
                </div>
            </div>
            
            <div class='form-group col-sm-6'>
            <label for='city'>City *</label>
                <select class='form-control' style='color:black' name='city' required>";

                         


                        $result2=mysqli_query($con,'SELECT `city_name` FROM `city`');




                        while($data = mysqli_fetch_assoc($result2)){


                            echo "<option name='city'   value='".$data['city_name']."' >";
                            echo $data['city_name'];
                            
                            echo  '</option>';

                        }
                    

                    echo "
                </select>
            </div>
            <div class='form-group col-sm-6'>
                <label for='atype'>Account type *</label> &nbsp &nbsp
                <select name='atype' required>
                <option value='owner'> owner </option>
                <option value='staff'> staff </option>
                </select>
            </div>
            <div class='form-group'>
            <label for='name'>Company name</label>
            <input  class='form-control' value='".$cname."' name='company_name' readonly>
            
            
            </div>
            <div class='form-group'>
            <label for='email'>Company Email</label>
            <input  class='form-control' type='email' value=".$email." name='email' readonly>
            
            </div>
            <div class='form-group'>
            <label for='address'>Address</label>
            <input  class='form-control' value=".$address." name='address' readonly>
            </div>
            <div class='form-group'>
            <label>Phone Number</label>
            <input  class='form-control' value=".$phone." name='phone' readonly>
            </div>
            <div class='form-group'>
            <label for='user'>Username *</label>
            <input type='text' class='form-control' name='user' required>
            </div>
            <div class='form-group'>
            <label for='password'>Password *</label>
            <input type='password' class='form-control' name='password' required>
            </div>
            <div id='pnum' class='form-group' col-lg-8>
            <label for='pnumber'>Personal number *</label>
            <input type='text' class='form-control' name='pnumber' placeholder='+923001234567' pattern='+923d{9}'>
           
            </div>
            <div class='form-group'>
            <label for='video'>Profile video</label>
            <input type='text' class='form-control' name='video' placeholder='https://www.youtube.com/profile_video'>
            </div>
            <div class='form-group'>
            <label for='about'>About Yourself</label>
            <textarea id='textarea' rows='4' cols='50' name='about'>
            </textarea>
            </div>


            <div class='text-center form-group '>
            <button type='submit' name='upload' class='btn btn-default'>Register</button>
            </div>
            
            </form>
            </div>
            </div>";

        }

      //  <--------------------------------------------------------------------------------------------------->
        else{
            
               echo "<div class='btn btn-block btn-danger'>Sorry! Account not activated. Please contact Admin.</div>";
     echo "<meta http-equiv='refresh' content='5;url=index.php'>";
        }
}
else {
    
     header("Location: usercompany.php");
    
}

    ?>
</div>


</div>



<?php include("footer.php"); ?>
<script >
    function addNumber() {
    var input = document.createElement("input");
    input.type="text";
    input.class="form-control";
    document.getElementById("pnum").appendChild(input);
}
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