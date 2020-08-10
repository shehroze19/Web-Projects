<?php 
include("connection.php");
@include("session.php");

    $user_id=$_SESSION['sess_user_id'];

        if(count($_POST)>0){

            if (isset($_POST['upload'])) {
            $target = "users_images/".basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];
            
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            
            $city=$_POST['city'];
            
            $pnumber=$_POST['pnumber'];
            $video=$_POST['video'];
            $about=$_POST['about'];
            
            


            if (move_uploaded_file($_FILES['image']['tmp_name'], $target) ) {
        
    }else{
    }


            $city_result = mysqli_query($con,"SELECT `id` FROM `city` WHERE city_name='$city'  ");
            $city_row = mysqli_fetch_array($city_result);
            $city_id=$city_row['id'];
            
            $query="UPDATE `users` SET `first_name`='$firstname',`last_name`='$lastname',`profile_video`='$video',`city_id`='$city_id',`profile_picture`='$image',`about`='$about',`mobile`='$pnumber' WHERE id='$user_id'";
            $result=mysqli_query($con, $query);
            }
}
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
                <h1 class="page-title">Edit Profile</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6 alert-warning">
       <?php 
     
            $user_id=$_SESSION['sess_user_id'];
            $result=mysqli_query($con, "SELECT * FROM `users` WHERE id='$user_id'");
            $array=mysqli_fetch_assoc($result);

           

            $img=$array['profile_picture'];
            $fname=$array['first_name'];
            $lname=$array['last_name'];
            $pnum=$array['mobile'];
            $video=$array['profile_video'];
            $about=$array['about'];
            $city_id=$array['city_id'];

            $city_result = mysqli_query($con,"SELECT `city_name` FROM `city` WHERE id='$city_id' ");
            $city_row = mysqli_fetch_array($city_result);
            $city=$city_row['city_name'];

            echo " <div class='box-for overflow'>
            
                <div class='col-md-12 col-xs-12 register-blocks'>
            <h2>Account Details </h2>           
            <form action='#' enctype='multipart/form-data' method='post'>           
           
            <div class='form-group'>
                        <label for='image' class=' form-group '>Profile Image</label>
                        <input type='hidden' name='size' value='1000000' >                  
                        
                        <img id='output' class='img-thumbnail img-responsive form-control' style='width:200px;height:200px;'  />
                        <input class='form-group' name='image' type='file' accept='image/*' onchange='loadFile(event)'>
                        
            </div>
            <div class='form-group'>
            <label for='firstname'>First Name *</label>
            <input type='text' class='form-control' name='firstname' value='".$fname."' placeholder='Muhammad'>
            </div>
            <div class='form-group'>
            <label for='lastname'>Last Name </label>
            <input type='text' class='form-control' name='lastname' value='".$lname."' placeholder='Ali'>
            <input class='hidden' name='active' value=1>
            </div>
           
            <div class='form-group'>
            <label for='city'>City *</label>
            <select class='form-control' style='color:black' name='city' value='".$city."' required>";

                     


                    $result2=mysqli_query($con,'SELECT `city_name` FROM `city`');




                    while($data = mysqli_fetch_assoc($result2)){


                        echo "<option name='city'   value='".$data['city_name']."' >";
                        echo $data['city_name'];
                        
                        echo  '</option>';

                    }
                

                echo "
            </select></div>

           
            <div id='pnum' class='form-group' col-lg-8>
            <label for='pnumber'>Personal number *</label>
            <input type='text' class='form-control' name='pnumber'  value='".$pnum."'>
            
            </div>
            <div class='form-group'>
            <label for='video'>Profile video</label>
            <input type='text' class='form-control' name='video' value='".$video."' placeholder='https://www.youtube.com/profile_video'>
            </div>
            <div class='form-group'>
            <label for='about'>About Yourself</label>
            <textarea id='textarea' rows='4' cols='50' name='about' value='".$about."'>
            </textarea>
            </div>


            <div class='text-center form-group '>
            <button type='submit' name='upload' class='btn btn-default'>Edit</button>
            </div>
            </form>
            </div>
            </div>";

        

      
    ?>
</div>


</div>



<?php include("footer.php"); ?>

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