
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
                                <li><a href="all_peeps.php" ><span>View All peeps</span></a></li>


                            </ul>

                        </div>
                    </nav>

                </div>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
<div class="content container-fluid bootstrap snippets">
      <div class="row row-broken">
        <div class="col-sm-3 col-xs-12">
          <div class="col-inside-lg decor-default chat" style="overflow: hidden; outline: none;" tabindex="5000">
            <div class="chat-users">
 <!--inbox toolbar-->
            <div class="text-center" >
                <div class="col-xs-12">
                    <a class="btn btn-default btn-lg" data-toggle="tooltip" title="Refresh" id="refreshInbox" onclick="myReload()">
                      <span class="fa fa-refresh fa-lg"></span>
                    </a>
                   
                  
                    
                </div><!--/col-->
                <div class="col-xs-12 spacer5"></div>
            </div><!--/row-->
            <!--/inbox toolbar-->
<br><br><br>

<input type="text" type="text" id="myInput" onkeyup="myFunction();"  class="form-control text-center" placeholder="Search a Contact" style="color: black;">

<br>
              <h6 class="text-center">All Contacts</h6>
             <table id="myTable"  class="table table-condensed" >
                   
                    <?php 


            $sender_id =  $_SESSION['sess_user_id'];

            $count=0;

                    $run=mysqli_query($con,"SELECT DISTINCT `receiver_id` from `chat` WHERE `sender_id`='$sender_id' ORDER BY `timing` DESC");
                    while($run2=mysqli_fetch_assoc($run)){
                        $getterid=$run2['receiver_id'];

$count++;

$result22=mysqli_query($con,"select * from `users` where `id`=".$getterid." ");
                     while($runner22=mysqli_fetch_assoc($result22)){ $name22= $runner22['first_name']." ".$runner22['last_name'];



                     echo "<tr><td> <a href='inbox.php?id=".$getterid."#message'><div class='btn btn-success btn-block'>".$name22."</div></a></td></tr>";







$result=mysqli_query($con,"SELECT * FROM `chat` where (sender_id='$getterid' AND receiver_id='$sender_id')  ORDER BY `timing` DESC limit 1");


                     while($runner22=mysqli_fetch_assoc($result)){ 
echo "<tr><td>Last Message : ".$runner22['body']."</td></tr>";
echo "<tr><td>Time : ".date('h:i:s a m/d/Y', strtotime($runner22['timing']))."</td></tr>";


                    }



                    }



              

                    }                   
echo "<p class='text-center'>Total : ".$count."</p>";

                     ?>
              
</table>


            </div>
          </div>
        </div>

        <?php 


           if (isset($_GET['id']) && $_GET['id']!=$sender_id ){

            $sender_id =  $_SESSION['sess_user_id'];
$receiver_id = $_GET['id'];



           $result=mysqli_query($con,"SELECT * FROM `chat` where (sender_id='$sender_id' AND receiver_id='$receiver_id') OR (sender_id=$receiver_id AND receiver_id=$sender_id) ORDER BY `timing` ASC");


$result22=mysqli_query($con,"select * from `users` where `id`=".$receiver_id." ");
                     while($runner22=mysqli_fetch_assoc($result22)){ $name22= $runner22['first_name']." ".$runner22['last_name'];


                    }


echo "  <div class='col-sm-9 col-xs-12 chat' style='overflow: hidden; outline: none;' tabindex='5001'>
          <div class='col-inside-lg decor-default'>
            <div class='chat-body'>
              <h6>Chat with ".$name22."</h6>";

            while($runner=mysqli_fetch_assoc($result)){
            
           

                    $result2=mysqli_query($con,"select * from `users` where `id`=".$runner['sender_id']." ");
                     while($runner2=mysqli_fetch_assoc($result2)){ $name= $runner2['first_name']." ".$runner2['last_name'];
                     $status=$runner2['is_active'];

                    $image="users_images/".$runner2['profile_picture'];}
if($runner['sender_id']==$receiver_id){
echo " <div class='answer left'>
                <div class='avatar'>
                  <img src='".$image."' alt='User name'>
                  <div class='status ";
                  if($status==1){
                    echo "online";}
                    else{
                        echo "offline";
                    }
                  echo "'></div>
                </div>
                <div class='name al'>".$name."</div>
                <div class='text'>".$runner['body']."
                </div>
                <div class='time'>".date('h:i:s a m/d/Y', strtotime($runner['timing']))."</div>
              </div>";
  }
  elseif($runner['sender_id']==$sender_id){
echo " <div class='answer right'>
                <div class='avatar'>
                  <img src='".$image."' alt='User name'>
                  <div class='status ";
                  if($status==1){
                    echo "online";}
                    else{
                        echo "offline";
                    }
                  echo "'></div>
                </div>
                <div class='name al'>".$name."</div>
                <div class='text'>".$runner['body']."
                </div>
                <div class='time'>".date('h:i:s a m/d/Y', strtotime($runner['timing']))."</div>
              </div>";
  }


        }

        echo "   <div class='answer-add'>
                <form  action='' method='post'><input type='hidden' name='sender_id' value='".$sender_id."'>
                <input type='hidden' name='receiver_id' value='".$receiver_id."'>
                
            
<div class='input-group'>
  
  <input type='text' id='message' style='background-color:white;color:black;' placeholder='Enter a Message' name='text' class='form-control'><span class='input-group-btn'>
    <button class='btn-sm btn-default' type='submit'>Enter</button>
  </span>
</div>


             </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>";




}

         ?>


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