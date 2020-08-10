
<?php 
include("connection.php");
@include("session.php");



if(count($_POST)>0){

    $sender_id = $_POST['sender_id'];
    $receiver_id = $_POST['receiver_id'];
    $body=$_POST['text'];




    $result= mysqli_query($con,"INSERT INTO `chat` (sender_id,receiver_id,body)
      VALUES ('$sender_id','$receiver_id', '$body')" );

    if($result){


    }
    else{

    }
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


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


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body{
        background:#eee;
    }
    .row.row-broken {
        padding-bottom: 0;
    }
    .col-inside-lg {
        padding: 20px;
    }
    .chat {
        height: calc(100vh - 180px);
    }
    .decor-default {
        background-color: #ffffff;
    }
    .chat-users h6 {
        font-size: 20px;
        margin: 0 0 20px;
    }
    .chat-users .user {
        position: relative;
        padding: 0 0 0 50px;
        display: block;
        cursor: pointer;
        margin: 0 0 20px;
    }
    .chat-users .user .avatar {
        top: 0;
        left: 0;
    }
    .chat .avatar {
        width: 40px;
        height: 40px;
        position: absolute;
    }
    .chat .avatar img {
        display: block;
        border-radius: 20px;
        height: 100%;
    }
    .chat .avatar .status.off {
        border: 1px solid #5a5a5a;
        background: #ffffff;
    }
    .chat .avatar .status.online {
        background: #4caf50;
    }
    .chat .avatar .status.busy {
        background: #ffc107;
    }
    .chat .avatar .status.offline {
        background: #ed4e6e;
    }
    .chat-users .user .status {
        bottom: 0;
        left: 28px;
    }
    .chat .avatar .status {
        width: 10px;
        height: 10px;
        border-radius: 5px;
        position: absolute;
    }
    .chat-users .user .name {
        font-size: 14px;
        font-weight: bold;
        line-height: 20px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .chat-users .user .mood {
        font: 200 14px/20px "Raleway", sans-serif;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /*****************CHAT BODY *******************/
    .chat-body h6 {
        font-size: 20px;
        margin: 0 0 20px;
    }
    .chat-body .answer.left {
        padding: 0 0 0 58px;
        text-align: left;
        float: left;
    }
    .chat-body .answer {
        position: relative;
        max-width: 600px;
        overflow: hidden;
        clear: both;
    }
    .chat-body .answer.left .avatar {
        left: 0;
    }
    .chat-body .answer .avatar {
        bottom: 36px;
    }
    .chat .avatar {
        width: 40px;
        height: 40px;
        position: absolute;
    }
    .chat .avatar img {
        display: block;
        border-radius: 20px;
        height: 100%;
    }
    .chat-body .answer .name {
        font-size: 14px;
        line-height: 36px;
    }
    .chat-body .answer.left .avatar .status {
        right: 4px;
    }
    .chat-body .answer .avatar .status {
        bottom: 0;
    }
    .chat-body .answer.left .text {
        background: #ebebeb;
        color: #333333;
        border-radius: 8px 8px 8px 0;
    }
    .chat-body .answer .text {
        padding: 12px;
        font-size: 16px;
        line-height: 26px;
        position: relative;
    }
    .chat-body .answer.left .text:before {
        left: -30px;
        border-right-color: #ebebeb;
        border-right-width: 12px;
    }
    .chat-body .answer .text:before {
        content: '';
        display: block;
        position: absolute;
        bottom: 0;
        border: 18px solid transparent;
        border-bottom-width: 0;
    }
    .chat-body .answer.left .time {
        padding-left: 12px;
        color: #333333;
    }
    .chat-body .answer .time {
        font-size: 16px;
        line-height: 36px;
        position: relative;
        padding-bottom: 1px;
    }
    /*RIGHT*/
    .chat-body .answer.right {
        padding: 0 58px 0 0;
        text-align: right;
        float: right;
    }

    .chat-body .answer.right .avatar {
        right: 0;
    }
    .chat-body .answer.right .avatar .status {
        left: 4px;
    }
    .chat-body .answer.right .text {
        background: #7266ba;
        color: #ffffff;
        border-radius: 8px 8px 0 8px;
    }
    .chat-body .answer.right .text:before {
        right: -30px;
        border-left-color: #7266ba;
        border-left-width: 12px;
    }
    .chat-body .answer.right .time {
        padding-right: 12px;
        color: #333333;
    }
    /**************ADD FORM ***************/
    .chat-body .answer-add {
        clear: both;
        position: relative;
        margin: 20px -20px -20px;
        padding: 20px;
        background: #46be8a;
    }
    .chat-body .answer-add input {
        border: none;
        background: none;
        display: block;
        width: 100%;
        font-size: 16px;
        line-height: 20px;
        padding: 0;
        color: #ffffff;
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
                                <li><a href="all_dealers.php" ><span>View All peeps</span></a></li>


                            </ul>

                        </div>
                    </nav>

                </div>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<div class="row">

    <?php

    $query="SELECT * FROM `users` where `user_type`!='admin' order by first_name  ";
    $result=mysqli_query($con,$query);











    while($row = mysqli_fetch_assoc($result))
    {


        echo "


        <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <div class=\"thumbnail\">";

        if($row['profile_picture']==null || $row['profile_picture']=="")
            {
                $row['profile_picture']="default.gif";}


        echo "
        <img src=\"users_images/".$row['profile_picture']."\" alt=\"...\"  style=\"width:300px;height:300px;\">
        <div class=\"caption\">
        <h5 class='text-center' style='font-size:16px;'><b>".$row['first_name']." ".$row['last_name']."</b></h5></div>
        <h6 class='text-center'>Email : <b>".$row['email']."</b></h6>
        <h6 class='text-center'>Contact #:<b> ".$row['mobile']."</b></h6>
        <h6 class='text-center'>Address : <b>".$row['address']."</h6></b>";


        echo "  <h4 class='text-center'><a href='view_dealer.php?id=".$row['id']."'><button class='btn'>View all Details</button></a><h4>   

        <h4 class='text-center '><a href='inbox.php?id=".$row['id']."#message'><button class='btn-sm btn-success'>Send Message</button></a></h4>




        </div>
        </div>
        ";

    }

    ?>

</div>



<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
        $(".chat").niceScroll();
    })
</script>
<script>
    function myReload() {
        location.reload();
    }
</script>


<script>
    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
</script>

</body>
</html>