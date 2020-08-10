<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>League of Legends Pakistan</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<style type="text/css">
  body{ padding-top: 70px; }
#ourtext {
    border: 2px solid #a1a1a1;
    padding: 10px 40px; 
  
    
    border-radius: 25px;
}

</style>
    </head>

    <body>

        <!-- Navigation -->
		<?php include("navbar.php"); ?>      


	<div class="container">
     
     <div >
         
         <?php 
$host="185.40.64.65";
$output=shell_exec('ping -n 5 '.$host);

echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it




if (strpos($output, 'out') !== false) {
}
    elseif(strpos($output, 'expired') !== false)
{
    echo "Network Error";
}
    elseif(strpos($output, 'data') !== false)
{
}
else
{
    echo "Unknown Error";
}
 ?>

     </div>


    </div>



        
        <!-- Footer -->
        <footer class="text-center ">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-inline">
                        
                           
                          
                        </ul>
                        <p class="copyright text-muted small">Copyright &copy;Shozi</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>
