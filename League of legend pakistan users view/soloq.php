<!DOCTYPE html>
<html lang="en">
<?php include("connection.php"); ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Solo Q Ladder</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<style type="text/css">
  body{
	padding-top: 70px;

  }
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


	
	<div class="container-fluid form-group row">
						<div class="panel-heading btn-success">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									<h3 class="text-center">+Add User</h3></a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse">
								<div class="panel-body">


<form action="soloq_add.php" method="post">


									<div class="container form-group row">
										<label  class="col-2 col-form-label">Name</label>
										<div class="col-10">
											<input class="form-control" type="text" placeholder="Summoner Name" name="s_name" required>
										</div>
									</div>

		
									

									<div class="container form-group row">
										<div class="col-10">
											<input class="form-control" type="submit" >
										</div>
									</div>

				</form>				


								</div>
							</div>
						</div>





<div><h2 class="text-center">Solo Q Ladder EUW</h2></div>


<table class="table table-inverse">
<th class="text-center">No</th>
<th class="text-center">Name</th>
<th class="text-center">Division</th>
<th class="text-center">LP</th>
<th class="text-center">Wins</th>
<th class="text-center">Losses</th>
<th class="text-center">Winrate</th>
<th class="text-center">Refresh</th>
<th class="text-center">OP GG</th>


					<?php
					$query="SELECT * FROM `soloq` ORDER BY position DESC ";
					$result=mysqli_query($con,$query);
					$num=0;
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr class='active'>";


						echo "<td class='text-center'>" .  ++$num . "</td>";

						echo "<td class='text-center'>" .  $row['Name'] . "</td>";
						echo "<td class='text-center'>" .  $row['Division'] ." ".$row['Rank'] ."</td>";
						echo "<td class='text-center'>" .  $row['Lp'] . "</td>";
						echo "<td class='text-center'>" .  $row['wins'] . "</td>";
						echo "<td class='text-center'>" .  $row['loss'] . "</td>";
						echo "<td class='text-center'>" .  $row['winrate'] . "%</td>";
						echo "<td class='text-center'><a class='btn btn-success' href='update.php?id=".$row['Name']."'></td>";




						echo "<td class='text-center'><a class='btn btn-info' target='_blank' href='http://euw.op.gg/summoner/userName=".$row['Name']."'></td>";



						echo "</tr>";



					}
					?>


</table>




        <!-- Footer -->
        <footer class="text-center">
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
