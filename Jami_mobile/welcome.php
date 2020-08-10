<?php
@include('session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze" content="">


	<title>ACP</title>

	<!-- Bootstrap core CSS -->
	
	<link rel="stylesheet" href="css/bootstrap.css" />
	<!-- Custom styles for this template -->

	<link href="css/welcome.css" rel="stylesheet">



</head>

<body>


	<?php  include("navbarlogin.php");  ?>



	
	<div class="container">








		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">

					<li><a href="index.php" target="iframe_go"><span>View Page</span></a></li>






					<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Add settings
							<span class='caret'></span></a>
							<ul class='dropdown-menu'>

								<li><a href='add_brand.php' target='iframe_go'>Brand</a></li>
								<li><a href='add_mobile.php' target='iframe_go'>Mobile Phone</a></li>
								<li><a href='add_ad.php' target='iframe_go'>Vertical Ad | </a></li>
								<li><a href='add_ad2.php' target='iframe_go'>Horizontal Ad __</a></li>

							</ul>
						</li>




						<li class='dropdown'>
							<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Remove settings
								<span class='caret'></span></a>
								<ul class='dropdown-menu'>

									<li><a href='remove_brand.php' target='iframe_go'>Brand</a></li>
									<li><a href='remove_mobile.php' target='iframe_go'>Mobile Phone</a></li>
									<li><a href='remove_ad.php' target='iframe_go'>Vertical Ad | </a></li>
									<li><a href='remove_ad2.php' target='iframe_go'>Horizontal Ad __</a></li>

								</ul>
							</li>



							


							<li><a href="contact_view.php" target="iframe_go"><span>View Contact Messages</span></a></li>


















						</ul>
					</div>
				</nav>



				<iframe name="iframe_go"  onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;"></iframe>




			</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>


</body>
</html>
