<?php
    session_start();
    $rate = 2;
    $extra = 50;
    $fix = 65;
    $above = 110;
    $next=55;
    $min=3;
    $cons = 4;
    //}
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Fare</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Prime Packers and Movers" />
  <meta name="keywords" content="prime,packers,movers,transportation" />

  

  <link href="fonts/mainfont.css" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
<![endif]-->

    <style type="text/css">
    html {
        height: 100%
    }
    body {
        height: 100%;
        margin: 0px;
        padding: 0px;
        font-family:tahoma;
        font-size:8pt;
    }
    #total {
        font-size:large;
        text-align:center;
        font-family:Georgia, “Times New Roman”, Times, serif;
        color:#990000;
        margin:5px 0 10px 0;
        font-size:12px;
        width:374px;
    }
    input {
        margin:5px 0px;
        font-family:tahoma;
        font-size:8pt;
    }
    </style>

    <body>
<?php 

$total_items=$_POST['items'];
$total_distance=$_POST['distance'];


$truck4=40;
$truck3=30;
$truck2=20;
$truck1=10;

$truck40=0;
$truck30=0;
$truck20=0;
$truck10=0;




$x = (int)$total_items;

$cost=20;

$total=$cost*$total_distance;
$total30=($total/100)*3;

$finaltotal=$total+$total30;

$itemscost=$total_items/30;
if($itemscost<1){
  $itemscost=1;
}
else{
  $itemscost=(int)$itemscost;
  round($itemscost,PHP_ROUND_HALF_DOWN);
}

$total_final=$itemscost*$finaltotal;


echo "<div class='btn btn-info text-center'>Total Trucks used =</div>";
echo "<h3>".$itemscost."</h3>";



echo "<br><div class='btn btn-success text-center'>Total Cost with Insurance=</div>";
echo "<h3>".$total_final." Rupees</h3>";




 ?>




  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

    </body>
    </html>