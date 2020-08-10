<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="welcome.php">Welcome <?php echo  $_SESSION['name']; ?></a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>



    <?php  
    $type=$_SESSION['user_type'];

    if($type=='user'){
      echo "  


  <!-- Navbar Search -->
  <form class='d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0'>
    <div class='input-group'>
      <div class='input-group-append'>
        <button class='btn btn-primary' type='button' data-toggle='modal' data-target='#search'>
          <i class='fas fa-search'></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Navbar -->
  <ul class='navbar-nav ml-auto ml-md-0'>


  <li class='nav-item dropdown no-arrow'>
          <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <div class='btn btn-block btn-danger'>  Report Incident</div>
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='userDropdown'>
            <a class='dropdown-item' href='incident_report.php'>Report</a>
            <div class='dropdown-divider'></div>

            <a class='dropdown-item' href='login.php'>Edit incident</a>
           
          </div>
        </li>
";

$email=$_SESSION['email'];

$query="SELECT * FROM `chat` WHERE `user_email`='$email' or `employee_email`='$email' ";
$result=mysqli_query($con,$query);


$count = mysqli_num_rows($result);

 
echo "
       
        <li class='nav-item dropdown no-arrow mx-1'>
          <a class='nav-link dropdown-toggle' href='#' id='messagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <i class='fas fa-envelope fa-fw'></i>
            <span class='badge badge-danger'>".$count."</span>
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='messagesDropdown'>
            <a class='dropdown-item' href='inbox.php'>Check Inbox</a>
           
          </div>
        </li>

        ";

        }

        echo "
        <ul class='navbar-nav ml-auto ml-md-0'>





        <li class='nav-item dropdown '>
          <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' >
            <i class='class='btn-primary'>Account Settings</i>
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='userDropdown'>
            <a class='dropdown-item' href='profile.php'>Account Settings</a>
            <a class='dropdown-item' href='login_activity.php'>Activity Log</a>
            <div class='dropdown-divider'></div>
            <a class='dropdown-item' href='logout.php' data-toggle='modal' data-target='#logoutModal'>Logout</a>
          </div>
        </li>";
    
          if($type=='admin'){

            echo "   <li class='nav-item dropdown '>
          <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <i class='alert-success'>Admin Settings</i>
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='userDropdown'>
            <a class='dropdown-item' href='all_accounts.php'>View all accounts</a>
            <a class='dropdown-item' href='category.php'>View/add category</a>
            <div class='dropdown-divider'></div>
            <a class='dropdown-item' href='logout.php' data-toggle='modal' data-target='#logoutModal'>Logout</a>
          </div>
        </li>";
          }


           if($type=='employee'){


$email=$_SESSION['email'];

$query="SELECT * FROM `chat` WHERE `user_email`='$email' or `employee_email`='$email' ";
$result=mysqli_query($con,$query);


$count = mysqli_num_rows($result);



            echo "    <!-- Navbar Search -->
  <form class='d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0'>
    <div class='input-group'>
      <div class='input-group-append'>
        <button class='btn btn-primary' type='button' data-toggle='modal' data-target='#search2'>
          <i class='fas fa-search'></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Navbar -->


             <li class='nav-item dropdown no-arrow mx-1'>
          <a class='nav-link dropdown-toggle' href='#' id='messagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <i class='fas fa-envelope fa-fw'></i>
            <span class='badge badge-danger'>".$count."</span>
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='messagesDropdown'>
            <a class='dropdown-item' href='inbox2.php'>Check Inbox</a>
           
          </div>
        </li>";
          }

    ?>
    


  </ul>

</nav>

<div id="wrapper">

  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="welcome.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Account Settings</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Profile</h6>
        <a class="dropdown-item" href="profile.php">View Profile</a>
        <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Password</h6>
        <a class="dropdown-item" href="update_password.php">Change Password</a>
        <a class="dropdown-item" href="logout.php">Log Out</a>
      </div>
    </li>

  </ul>
  <?php 
  include('session.php');
  ?>



  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>





  <!-- Search Modal-->
  <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <form action="incident_view.php" method="post">

            <div class="form-group">

              <input type="text" name="point_of_contact" class="form-control"  placeholder="Point of contact"  >
            </div>


            <div class="form-group">



              <?php 

              echo "
              <div class='form-group '><label  >Category </label>
              <select class='form-control' name='category'>";










              $result2=mysqli_query($con,"select category_name from category");

              $runner2=mysqli_query($con,$query2);



              while($data2 = mysqli_fetch_assoc($result2)){


                echo "<option name='category' value=";
                echo $data2['category_name'];
                echo ">";
                echo $data2['category_name'];
                echo  "</option>";


              }


              echo "    </select>


              </div>";
              ?>



            </div>

            <button class='btn  btn-primary btn-block text-uppercase' type='submit'>Search</button>

          </form>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>

        </div>
      </div>
    </div>
  </div>




   <!-- Search Modal-->
  <div class="modal fade" id="search2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <form action="incident_view_employee.php" method="post">

            <div class="form-group">

              <input type="text" name="point_of_contact" class="form-control"  placeholder="Point of contact"  >
            </div>


            <div class="form-group">



              <?php 

              echo "
              <div class='form-group '><label  >Category </label>
              <select class='form-control' name='category'>";










              $result2=mysqli_query($con,"select category_name from category");

              $runner2=mysqli_query($con,$query2);



              while($data2 = mysqli_fetch_assoc($result2)){


                echo "<option name='category' value=";
                echo $data2['category_name'];
                echo ">";
                echo $data2['category_name'];
                echo  "</option>";


              }


              echo "    </select>


              </div>";
              ?>



            </div>

            <button class='btn  btn-primary btn-block text-uppercase' type='submit'>Search</button>

          </form>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>

        </div>
      </div>
    </div>
  </div>