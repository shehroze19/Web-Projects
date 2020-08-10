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


	<title>FFc</title>

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

					<li><a href="account_details.php" target="iframe_go"><span>Account Details</span></a></li>







					<?php 
					if($_SESSION['user_type']==="tech"){



// add wapda report

						echo "<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>+Add a Report
							<span class='caret'></span></a>
							<ul class='dropdown-menu'>

								<li><a href='electricity_report.php' target='iframe_go'> Electricity Power</a></li>
								<li><a href='local_services.php' target='iframe_go'> Local Services</a></li>

							</ul>
						</li>";





						// reports

						echo "<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>View my reports
							<span class='caret'></span></a>
							<ul class='dropdown-menu'>

								<li><a href='electricity_reportview.php' target='iframe_go'>Electricity Power</a></li>
								<li><a href='local_servicesview.php' target='iframe_go'>Local Services</a></li>


							</ul>
						</li>";










//  add log sheets


						echo "<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>+ Add a Log Sheet
							<span class='caret'></span></a>
							<ul class='dropdown-menu'>

								<li><a href='data_center_access_log_sheet.php' target='iframe_go'>Data Center Access Log Sheet</a></li>
								<li><a href='incidental_log_sheet_noc.php' target='iframe_go'>Incidental Log Sheet Noc, Data Center & Patch Room</a></li>
								<li><a href='log_sheet_board_room.php' target='iframe_go'>Log Sheet Board Room/ RAO Farman Hall</a></li>
								<li><a href='ASSETS_TRACKING_SHEET(IT EQUIPMENT).php' target='iframe_go'>Assets Tracking Sheet (IT Equipment (Multimedia & Laptops))</a></li>

								<li><a href='building_ups_log_sheet.php' target='iframe_go'>Building UPS Log Sheet</a></li>
								<li><a href='Daily_Check_List(NOCASSETS).php' target='iframe_go'>Daily Check List (NOC Assets)</a></li>
								<li><a href='NOC_Store_Tech_Room_Patch_Room_Cleaning_LogSheet.php' target='iframe_go'>NOC Store,Tech Room & Patch Room Cleaning Log Sheet </a></li>
								<li><a href='MD_FLOOR_TESTING_LOG_SHEET.php' target='iframe_go'>MD Floor Testing Log Sheet</a></li>
								<li><a href='dc_air_conditioning.php' target='iframe_go'>DC Air Conditioning & In-Row Cooling Log Sheet</a></li>
								<li><a href='fire_alarm.php' target='iframe_go'>PATCH ROOM'S - FIRE ALARM LOG SHEET</a></li>
								<li><a href='web_log_sheet.php' target='iframe_go'>WEB SITE & Email Incidental Log Sheet</a></li>


							</ul>
						</li>";





					// view log sheets
						echo "<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>View a Log Sheet
							<span class='caret'></span></a>
							<ul class='dropdown-menu'>

								<li><a href='data_center_access_log_sheetview.php' target='iframe_go'>Data Center Access Log Sheet</a></li>
								<li><a href='incidental_log_sheet_nocview.php' target='iframe_go'>Incidental Log Sheet Noc, Data Center & Patch Room</a></li>
								<li><a href='log_sheet_board_roomview.php' target='iframe_go'>Log Sheet Board Room/ RAO Farman Hall</a></li>
								<li><a href='ASSETS_TRACKING_SHEET(IT EQUIPMENT)view.php' target='iframe_go'>Assets Tracking Sheet (IT Equipment (Multimedia & Laptops))</a></li>

								<li><a href='building_ups_log_sheetview.php' target='iframe_go'>Building UPS Log Sheet</a></li>
								<li><a href='Daily_Check_List(NOCASSETS)view.php' target='iframe_go'>Daily Check List (NOC Assets)</a></li>
								<li><a href='NOC_Store_Tech_Room_Patch_Room_Cleaning_LogSheetview.php' target='iframe_go'>NOC Store,Tech Room & Patch Room Cleaning Log Sheet </a></li>
								<li><a href='MD_FLOOR_TESTING_LOG_SHEETview.php' target='iframe_go'>MD Floor Testing Log Sheet</a></li>
								<li><a href='dc_air_conditioningview.php' target='iframe_go'>DC Air Conditioning & In-Row Cooling Log Sheet</a></li>
								<li><a href='fire_alarmview.php' target='iframe_go'>PATCH ROOM'S - FIRE ALARM LOG SHEET</a></li>
								<li><a href='web_log_sheetview.php' target='iframe_go'>WEB SITE & Email Incidental Log Sheet</a></li>



							</ul>
						</li>";




					}

					elseif($_SESSION['user_type']==="officer"){
						
	// reports

						echo "<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>View my reports
							<span class='caret'></span></a>
							<ul class='dropdown-menu'>

								<li><a href='officer_electricity_reportview.php' target='iframe_go'>Electricity Power</a></li>
								<li><a href='officer_local_services_reportview.php' target='iframe_go'>Local Services</a></li>


							</ul>
						</li>";


						echo "<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>View a Log Sheet
							<span class='caret'></span></a>
							<ul class='dropdown-menu'>

								<li><a href='officer_data_center_access_log_sheetview.php' target='iframe_go'>Data Center Access Log Sheet</a></li>
								<li><a href='officer_incidental_log_sheet_nocview.php' target='iframe_go'>Incidental Log Sheet Noc, Data Center & Patch Room</a></li>
								<li><a href='officer_log_sheet_board_roomview.php' target='iframe_go'>Log Sheet Board Room/ RAO Farman Hall</a></li>
								<li><a href='officer_ASSETS_TRACKING_SHEET(IT EQUIPMENT)view.php' target='iframe_go'>Assets Tracking Sheet (IT Equipment (Multimedia & Laptops))</a></li>

								<li><a href='officer_building_ups_log_sheetview.php' target='iframe_go'>Building UPS Log Sheet</a></li>
								<li><a href='officer_Daily_Check_List(NOCASSETS)view.php' target='iframe_go'>Daily Check List (NOC Assets)</a></li>
								<li><a href='officer_NOC_Store_Tech_Room_Patch_Room_Cleaning_LogSheetview.php' target='iframe_go'>NOC Store,Tech Room & Patch Room Cleaning Log Sheet </a></li>
								<li><a href='officer_MD_FLOOR_TESTING_LOG_SHEETview.php' target='iframe_go'>MD Floor Testing Log Sheet</a></li>
								<li><a href='officer_dc_air_conditioningview.php' target='iframe_go'>DC Air Conditioning & In-Row Cooling Log Sheet</a></li>
								<li><a href='officer_fire_alarmview.php' target='iframe_go'>PATCH ROOM'S - FIRE ALARM LOG SHEET</a></li>
								<li><a href='officer_web_log_sheetview.php' target='iframe_go'>WEB SITE & Email Incidental Log Sheet</a></li>



							</ul>
						</li>";
						
					}

					elseif($_SESSION['user_type']==="manager"){
						echo "<li><a href='manager_reports.php' target='iframe_go'><span>View all reports</span></a></li>";
					}
					

					?>















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
