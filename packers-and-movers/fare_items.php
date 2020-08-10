
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
                if(count($_POST)>0){
                  $distance=$_POST['distance'];
                  if($distance<50){
                    $distance=50;
                  }
                  $from=$_POST['from'];
                  $to=$_POST['to'];


                }

	else{
		echo "<a href='fare.php'><div class='btn btn-danger text-center'>Error While leading Please click here and try again from begining</div></a>";
	}
                ?>



  <div class="container row">


    <div class="col-md-11">

      <!-- divisions -->
      <div  style="background-color: white;">&nbsp;
        <div class="container">
        	
					<form action="fare_complete.php" method="post">                        
                    
            <div class="header">
              <h3>
                <b>Select all of your items</b><br>
              </h3>
            </div>


            <a href="#lounge"   data-toggle="tab"><button type="button" class="btn btn-primary" >Lounge</button></a>
            <a href="#kitchen" data-toggle="tab"><button type="button" class="btn btn-primary" >Kitchen</button></a>
            <a href="#room" data-toggle="tab"><button type="button" class="btn btn-primary" >Room</button></a>
            <a href="#office" data-toggle="tab"><button type="button" class="btn btn-primary" >Office</button></a>
            <a href="#various" data-toggle="tab"><button type="button" class="btn btn-primary" >Various</button></a>
            <a href="#other" data-toggle="tab"><button type="button" class="btn btn-primary" >Other</button></a>

            <br><br>
            <div class="tab-content">

              <div class="tab-pane active" id="lounge">


                <div class="container row">


                  <!-- first item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Table</h3>



                      <img  src="images/Table.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('table');">
                        <span id="tables">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('table');">
                      </div>

                    </div>
                  </div>

                  <!-- first item end -->

                  <!-- second item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Large Table</h3>



                      <img  src="images/Table.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('table1');">
                        <span id="tables1">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('table1');">
                      </div>

                    </div>
                  </div>

                  <!-- second item end -->


                  <!-- Chair item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Chair</h3>



                      <img  src="images/Chaise.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Chaise');">
                        <span id="Chaise">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Chaise');">
                      </div>

                    </div>
                  </div>

                  <!-- Chair item end -->









                  <!-- sofas3p item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Sofa 3 Piece</h3>



                      <img  src="images/sofa3p.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('sofapv3');">
                        <span id="sofapv3">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('sofapv3');">
                      </div>

                    </div>
                  </div>

                  <!-- sofas3p item end -->


                   <!-- sofas2p item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Sofa Convertable</h3>



                      <img  src="images/Canape2P.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Canape2P');">
                        <span id="Canape2P">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Canape2P');">
                      </div>

                    </div>
                  </div>

                  <!-- sofas2p item end -->

                  <!-- arm chair item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Arm Chair</h3>



                      <img  src="images/Fauteuil.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Fauteuil');">
                        <span id="Fauteuil">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Fauteuil');">
                      </div>

                    </div>
                  </div>

                  <!-- arm chair item end -->






                  <!-- Tv furniture item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Tv Furniture</h3>



                      <img  src="images/MeubleTV.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('MeubleTV');">
                        <span id="MeubleTV">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('MeubleTV');">
                      </div>

                    </div>
                  </div>

                  <!-- TV Furniture item end -->


                  <!-- Tv  item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Television</h3>



                      <img  src="images/television.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('television');">
                        <span id="television">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('television');">
                      </div>

                    </div>
                  </div>

                  <!-- TV  item end -->



                  <!-- Library item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Library</h3>



                      <img  src="images/Bibliotheque.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Bibliotheque');">
                        <span id="Bibliotheque">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Bibliotheque');">
                      </div>

                    </div>
                  </div>

                  <!-- Library item end -->









                </div>
                


              </div>
              <!--  End lounge  -->





              <div class="tab-pane" id="kitchen">
                <div class="container row">
                  
                  <!-- EquippedKitchen item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Equipped Kitchen</h3>



                      <img  src="images/EquippedKitchen.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('EquippedKitchen');">
                        <span id="EquippedKitchen">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('EquippedKitchen');">
                      </div>

                    </div>
                  </div>

                  <!-- EquippedKitchen item end -->

                  <!-- Cooker item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Cooker</h3>



                      <img  src="images/Cooker.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('Cooker');">
                        <span id="Cooker">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('Cooker');">
                      </div>

                    </div>
                  </div>

                  <!-- Cooker item end -->

                  <!-- Microwave item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Microwave</h3>



                      <img  src="images/Microwave.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('Microwave');">
                        <span id="Microwave">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('Microwave');">
                      </div>

                    </div>
                  </div>

                  <!-- Microwave item end -->

                  <!-- Cook Top item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Cooktop</h3>



                      <img  src="images/Cooktop.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('Cooktop');">
                        <span id="Cooktop">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('Cooktop');">
                      </div>

                    </div>
                  </div>

                  <!-- Cook Top item end -->

                  <!-- Pan item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Pan</h3>



                      <img  src="images/Pan.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('Pan');">
                        <span id="Pan">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('Pan');">
                      </div>

                    </div>
                  </div>

                  <!-- Cook Top item end -->

                  <!-- Dishwasher item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Dishwasher</h3>



                      <img  src="images/Dishwasher.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('Dishwasher');">
                        <span id="Dishwasher">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('Dishwasher');">
                      </div>

                    </div>
                  </div>

                  <!-- Dishwasher item end -->

                  <!-- WashingMachine item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>WashingMachine</h3>



                      <img  src="images/WashingMachine.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('WashingMachine');">
                        <span id="WashingMachine">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('WashingMachine');">
                      </div>

                    </div>
                  </div>

                  <!-- WashingMachine item end -->

                  <!-- Fridge item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Fridge</h3>



                      <img  src="images/Fridge.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('Fridge');">
                        <span id="Fridge">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('Fridge');">
                      </div>

                    </div>
                  </div>

                  <!-- Fridge item end -->

                  <!-- LowFurniture item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Low Furniture</h3>



                      <img  src="images/LowFurniture.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('LowFurniture');">
                        <span id="LowFurniture">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('LowFurniture');">
                      </div>

                    </div>
                  </div>

                  <!-- LowFurniture item end -->




                </div>
              </div>
              <!-- End kitchen -->



              <div class="tab-pane" id="room">
                <div class="container row">

                  <!-- Bed2P item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Bed 2 Piece</h3>



                      <img  src="images/Bed2P.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('Bed2P');">
                        <span id="Bed2P">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('Bed2P');">
                      </div>

                    </div>
                  </div>

                  <!-- Bed2P item end -->

                  <!-- Bed1P item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Bed 1 Piece</h3>



                      <img  src="images/Bed1P.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('Bed1P');">
                        <span id="Bed1P">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('Bed1P');">
                      </div>

                    </div>
                  </div>

                  <!-- Bed1P item end -->

                  <!-- LoftBed item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Loft Bed</h3>



                      <img  src="images/LoftBed.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('LoftBed');">
                        <span id="LoftBed">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('LoftBed');">
                      </div>

                    </div>
                  </div>

                  <!-- LoftBed item end -->

                  <!-- BunkBeds item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Bunk Beds</h3>



                      <img  src="images/BunkBeds.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('BunkBeds');">
                        <span id="BunkBeds">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('BunkBeds');">
                      </div>

                    </div>
                  </div>

                  <!-- BunkBeds item end -->

                  <!-- BedsideTable item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Bedside Table</h3>



                      <img  src="images/BedsideTable.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('BedsideTable');">
                        <span id="BedsideTable">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('BedsideTable');">
                      </div>

                    </div>
                  </div>

                  <!-- BedsideTable item end -->

                  <!-- Cupboard item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Cupboard</h3>



                      <img  src="images/Cupboard.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button" value="-" onclick="Remove('Cupboard');">
                        <span id="Cupboard">0</span>
                        <input class="btn-sm" type="button"  value="+" onclick="Add('Cupboard');">
                      </div>

                    </div>
                  </div>

                  <!-- Cupboard item end -->

                  <!-- Library1 item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Items Storage</h3>



                      <img  src="images/Bibliotheque.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Bibliotheque1');">
                        <span id="Bibliotheque1">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Bibliotheque1');">
                      </div>

                    </div>
                  </div>

                  <!-- Library1 item end -->

                  <!-- ChestOfDrawers item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Chest Of Drawers</h3>



                      <img  src="images/ChestOfDrawers.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('ChestOfDrawers');">
                        <span id="ChestOfDrawers">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('ChestOfDrawers');">
                      </div>

                    </div>
                  </div>

                  <!-- ChestOfDrawers item end -->

                  <!-- Chiffonier item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Chiffonier</h3>



                      <img  src="images/Chiffonier.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Chiffonier');">
                        <span id="Chiffonier">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Chiffonier');">
                      </div>

                    </div>
                  </div>

                  <!-- Chiffonier item end -->
                  

                  
                </div>
              </div>
              <!-- End room -->



              <div class="tab-pane" id="office">
                <div class="container row">

                  <!-- Desk item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Desk</h3>



                      <img  src="images/Desk.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Desk');">
                        <span id="Desk">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Desk');">
                      </div>

                    </div>
                  </div>

                  <!-- Desk item end -->

                  <!-- ChairDesk item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Chair Desk</h3>



                      <img  src="images/ChairDesk.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('ChairDesk');">
                        <span id="ChairDesk">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('ChairDesk');">
                      </div>

                    </div>
                  </div>

                  <!-- ChairDesk item end -->

                  <!-- Cabinet item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Cabinet</h3>



                      <img  src="images/Cabinet.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Cabinet');">
                        <span id="Cabinet">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Cabinet');">
                      </div>

                    </div>
                  </div>

                  <!-- Cabinet item end -->

                  <!-- Computer item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Computer</h3>



                      <img  src="images/Computer.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Computer');">
                        <span id="Computer">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Computer');">
                      </div>

                    </div>
                  </div>

                  <!-- Computer item end -->

                  <!-- Fax item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Fax</h3>



                      <img  src="images/Fax.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Fax');">
                        <span id="Fax">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Fax');">
                      </div>

                    </div>
                  </div>

                  <!-- Fax item end -->

                  <!-- ComputerFurniture item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Computer Furniture</h3>



                      <img  src="images/meuble_informatique.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('ComputerFurniture');">
                        <span id="ComputerFurniture">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('ComputerFurniture');">
                      </div>

                    </div>
                  </div>

                  <!-- ComputerFurniture item end -->


                  
                </div>
              </div>
              <!-- End office -->



              <div class="tab-pane" id="various">
                <div class="container row">

                  <!-- Mower item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Mower</h3>



                      <img  src="images/tondeuse.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Mower');">
                        <span id="Mower">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Mower');">
                      </div>

                    </div>
                  </div>

                  <!-- Mower item end -->

                  <!-- Lamp item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Lamp</h3>



                      <img  src="images/Lamp.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Lamp');">
                        <span id="Lamp">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Lamp');">
                      </div>

                    </div>
                  </div>

                  <!-- Lamp item end -->

                  <!-- Mirror item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Mirror</h3>



                      <img  src="images/Mirror.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Mirror');">
                        <span id="Mirror">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Mirror');">
                      </div>

                    </div>
                  </div>

                  <!-- Mirror item end -->

                  <!-- Cd item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Cd</h3>



                      <img  src="images/Cd.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Cd');">
                        <span id="Cd">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Cd');">
                      </div>

                    </div>
                  </div>

                  <!-- Cd item end -->

                  <!-- Book item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Book</h3>



                      <img  src="images/Book.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Book');">
                        <span id="Book">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Book');">
                      </div>

                    </div>
                  </div>

                  <!-- Book item end -->

                  <!-- BathroomCabinet item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>BathroomCabinet</h3>



                      <img  src="images/BathroomCabinet.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('BathroomCabinet');">
                        <span id="BathroomCabinet">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('BathroomCabinet');">
                      </div>

                    </div>
                  </div>

                  <!-- BathroomCabinet item end -->
                  

                  
                </div>
              </div>
              <!-- End various -->



              <div class="tab-pane" id="other">
                <div class="container row">

                  <!-- Volume of 0.5m³ item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Volume of 0.5m³</h3>



                      <img  src="images/carton.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Volumeof1');">
                        <span id="Volumeof1">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Volumeof1');">
                      </div>

                    </div>
                  </div>

                  <!-- Volume of 0.5m³ -->

                  <!-- Volume of 1m³ item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Volume of 1m³</h3>



                      <img  src="images/carton.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Volumeof2');">
                        <span id="Volumeof2">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Volumeof2');">
                      </div>

                    </div>
                  </div>

                  <!-- Volume of 1m³ -->

                  <!-- Volume of 1.5m³ item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Volume of 1.5m³</h3>



                      <img  src="images/carton.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Volumeof3');">
                        <span id="Volumeof3">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Volumeof3');">
                      </div>

                    </div>
                  </div>

                  <!-- Volume of 1.5m³ -->

                  <!-- Volume of 2m³ item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Volume of 2m³</h3>



                      <img  src="images/carton.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Volumeof4');">
                        <span id="Volumeof4">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Volumeof4');">
                      </div>

                    </div>
                  </div>

                  <!-- Volume of 2m³ -->

                  <!-- Volume of 2.5m³ item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Volume of 2.5m³</h3>



                      <img  src="images/carton.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Volumeof5');">
                        <span id="Volumeof5">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Volumeof5');">
                      </div>

                    </div>
                  </div>

                  <!-- Volume of 2.5m³ -->

                  <!-- Volume of 3m³ item start -->
                  <div class="col-md-4">




                    <div class="text-center table-bordered"><h3>Volume of 3m³</h3>



                      <img  src="images/carton.png">
                      <br>


                      <div class="text-center">
                        <input class="btn-sm" type="button"  value="-" onclick="Remove('Volumeof6');">
                        <span id="Volumeof6">0</span>
                        <input class="btn-sm" type="button" value="+" onclick="Add('Volumeof6');">
                      </div>

                    </div>
                  </div>

                  <!-- Volume of 3m³ -->
                  

                  
                </div>
              </div>
              <!-- End other -->





            </div>


                <input type='hidden' name='distance' value='<?php echo @$distance; ?>' ></input><input type='hidden' name='from' value='<?php echo @$from; ?>' class='form-control'></input><input type='hidden' name='to' value='<?php echo @$to; ?>'><input type='hidden' name="totalsize" id="totalend" value='0'>


  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="container"><button type="submit" class="btn btn-info btn-lg btn-block">Submit</button></div>


          </form>
        </div>
        <!-- End submit form -->
      </div> 
    </div>






    <div class="col-md-1">
<br><br><br>
      <button class="btn btn-info">Total Volume = <span style="color: black;" id='total'>0</span>m³*</button>





    </div>




  </div>



 





  <script type="text/javascript">





    var total=document.getElementById('total').innerHTML;
    var total=parseInt(total);



    var tables=document.getElementById('tables').innerHTML;
    var tables=parseInt(tables);

    var tables1=document.getElementById('tables1').innerHTML;
    var tables1=parseInt(tables1);


    var sofapv3=document.getElementById('sofapv3').innerHTML;
    var sofapv3=parseInt(sofapv3);

    var Canape2P=document.getElementById('Canape2P').innerHTML;
    var Canape2P=parseInt(Canape2P);

    var Fauteuil=document.getElementById('Fauteuil').innerHTML;
    var Fauteuil=parseInt(Fauteuil);

    var MeubleTV=document.getElementById('MeubleTV').innerHTML;
    var MeubleTV=parseInt(MeubleTV);

    var television=document.getElementById('television').innerHTML;
    var television=parseInt(television);

    var Bibliotheque=document.getElementById('Bibliotheque').innerHTML;
    var Bibliotheque=parseInt(Bibliotheque);

    var Chaise=document.getElementById('Chaise').innerHTML;
    var Chaise=parseInt(Chaise);


    var EquippedKitchen=document.getElementById('EquippedKitchen').innerHTML;
    var EquippedKitchen=parseInt(EquippedKitchen);

    var Cooker=document.getElementById('Cooker').innerHTML;
    var Cooker=parseInt(Cooker);

    var Microwave=document.getElementById('Microwave').innerHTML;
    var Microwave=parseInt(Microwave);

    var Cooktop=document.getElementById('Cooktop').innerHTML;
    var Cooktop=parseInt(Cooktop);

    var Pan=document.getElementById('Pan').innerHTML;
    var Pan=parseInt(Pan);

    var Dishwasher=document.getElementById('Dishwasher').innerHTML;
    var Dishwasher=parseInt(Dishwasher);

    var WashingMachine=document.getElementById('WashingMachine').innerHTML;
    var WashingMachine=parseInt(WashingMachine);

    var Fridge=document.getElementById('Fridge').innerHTML;
    var Fridge=parseInt(Fridge);

    var LowFurniture=document.getElementById('LowFurniture').innerHTML;
    var LowFurniture=parseInt(LowFurniture);

    var Bed2P=document.getElementById('Bed2P').innerHTML;
    var Bed2P=parseInt(Bed2P);

    var Bed1P=document.getElementById('Bed1P').innerHTML;
    var Bed1P=parseInt(Bed1P);

    var LoftBed=document.getElementById('LoftBed').innerHTML;
    var LoftBed=parseInt(LoftBed);

    var BunkBeds=document.getElementById('BunkBeds').innerHTML;
    var BunkBeds=parseInt(BunkBeds);

    var BedsideTable=document.getElementById('BedsideTable').innerHTML;
    var BedsideTable=parseInt(BedsideTable);

    var Cupboard=document.getElementById('Cupboard').innerHTML;
    var Cupboard=parseInt(Cupboard);

    var Bibliotheque1=document.getElementById('Bibliotheque1').innerHTML;
    var Bibliotheque1=parseInt(Bibliotheque1);

    var ChestOfDrawers=document.getElementById('ChestOfDrawers').innerHTML;
    var ChestOfDrawers=parseInt(ChestOfDrawers);

    var Chiffonier=document.getElementById('Chiffonier').innerHTML;
    var Chiffonier=parseInt(Chiffonier);


    var Desk=document.getElementById('Desk').innerHTML;
    var Desk=parseInt(Desk);

    var ChairDesk=document.getElementById('ChairDesk').innerHTML;
    var ChairDesk=parseInt(ChairDesk);

    var Cabinet=document.getElementById('Cabinet').innerHTML;
    var Cabinet=parseInt(Cabinet);

    var Fax=document.getElementById('Fax').innerHTML;
    var Fax=parseInt(Fax);

    var Computer=document.getElementById('Computer').innerHTML;
    var Computer=parseInt(Computer);

    var ComputerFurniture=document.getElementById('ComputerFurniture').innerHTML;
    var ComputerFurniture=parseInt(ComputerFurniture);

    var Mower=document.getElementById('Mower').innerHTML;
    var Mower=parseInt(Mower);

    var Lamp=document.getElementById('Lamp').innerHTML;
    var Lamp=parseInt(Lamp);

    var Mirror=document.getElementById('Mirror').innerHTML;
    var Mirror=parseInt(Mirror);

    var Cd=document.getElementById('Cd').innerHTML;
    var Cd=parseInt(Cd);

    var Book=document.getElementById('Book').innerHTML;
    var Book=parseInt(Book);

    var BathroomCabinet=document.getElementById('BathroomCabinet').innerHTML;
    var BathroomCabinet=parseInt(BathroomCabinet);

    var Volumeof1=document.getElementById('Volumeof1').innerHTML;
    var Volumeof1=parseInt(Volumeof1);

    var Volumeof2=document.getElementById('Volumeof2').innerHTML;
    var Volumeof2=parseInt(Volumeof2);

    var Volumeof3=document.getElementById('Volumeof3').innerHTML;
    var Volumeof3=parseInt(Volumeof3);

    var Volumeof4=document.getElementById('Volumeof4').innerHTML;
    var Volumeof4=parseInt(Volumeof4);

    var Volumeof5=document.getElementById('Volumeof5').innerHTML;
    var Volumeof5=parseInt(Volumeof5);

    var Volumeof6=document.getElementById('Volumeof6').innerHTML;
    var Volumeof6=parseInt(Volumeof6);

    



    function Add(checker) {




      if(checker=="table"){

        var table=0.8;
        tables=tables+1;

        total=total+table;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("tables").innerHTML =tables;



      }

      else if(checker=="table1"){

        var table1=1.4;
        tables1=tables1+1;

        total=total+table1;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("tables1").innerHTML =tables1;



      }


      else if(checker=="sofapv3"){

        var sofap3=2;
        sofapv3=sofapv3+1;

        total=total+sofap3;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("sofapv3").innerHTML =sofapv3;



      }

      else if(checker=="Canape2P"){

        var Canape2=1.5;
        Canape2P=Canape2P+1;

        total=total+Canape2;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Canape2P").innerHTML =Canape2P;



      }

      else if(checker=="Fauteuil"){

        var Fauteui=0.4;
        Fauteuil=Fauteuil+1;

        total=total+Fauteui;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Fauteuil").innerHTML =Fauteuil;



      }

      else if(checker=="MeubleTV"){

        var MeubleT=0.8;
        MeubleTV=MeubleTV+1;

        total=total+MeubleT;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("MeubleTV").innerHTML =MeubleTV;



      }

      else if(checker=="television"){

        var televisio=0.4;
        television=television+1;

        total=total+televisio;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("television").innerHTML =television;



      }


      else if(checker=="Bibliotheque"){

        var Bibliothequ=2;
        Bibliotheque=Bibliotheque+1;

        total=total+Bibliothequ;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Bibliotheque").innerHTML =Bibliotheque;



      }

      else if(checker=="Chaise"){

        var Chais=0.2;
        Chaise=Chaise+1;

        total=total+Chais;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Chaise").innerHTML =Chaise;



      }

      else if(checker=="EquippedKitchen"){

        var EquippedKitche=2;
        EquippedKitchen=EquippedKitchen+1;

        total=total+EquippedKitche;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("EquippedKitchen").innerHTML =EquippedKitchen;



      }

      else if(checker=="Cooker"){

        var Cooke=0.5;
        Cooker=Cooker+1;

        total=total+Cooke;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cooker").innerHTML =Cooker;



      }

      else if(checker=="Microwave"){

        var Microwav=0.2;
        Microwave=Microwave+1;

        total=total+Microwav;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Microwave").innerHTML =Microwave;



      }

      else if(checker=="Cooktop"){

        var Cookto=0.2;
        Cooktop=Cooktop+1;

        total=total+Cookto;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cooktop").innerHTML =Cooktop;



      }

      else if(checker=="Pan"){

        var Pa=0.2;
        Pan=Pan+1;

        total=total+Pa;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Pan").innerHTML =Pan;



      }

      else if(checker=="Dishwasher"){

        var Dishwashe=0.5;
        Dishwasher=Dishwasher+1;

        total=total+Dishwashe;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Dishwasher").innerHTML =Dishwasher;



      }

      else if(checker=="WashingMachine"){

        var WashingMachin=0.5;
        WashingMachine=WashingMachine+1;

        total=total+WashingMachin;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("WashingMachine").innerHTML =WashingMachine;



      }

      else if(checker=="Fridge"){

        var Fridg=0.8;
        Fridge=Fridge+1;

        total=total+Fridg;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Fridge").innerHTML =Fridge;



      }

      else if(checker=="LowFurniture"){

        var LowFurnitur=0.4;
        LowFurniture=LowFurniture+1;

        total=total+LowFurnitur;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("LowFurniture").innerHTML =LowFurniture;



      }

      else if(checker=="Bed2P"){

        var Bed2=2;
        Bed2P=Bed2P+1;

        total=total+Bed2;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Bed2P").innerHTML =Bed2P;



      }

      else if(checker=="Bed1P"){

        var Bed1=1.2;
        Bed1P=Bed1P+1;

        total=total+Bed1;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Bed1P").innerHTML =Bed1P;



      }

      else if(checker=="LoftBed"){

        var LoftBe=2;
        LoftBed=LoftBed+1;

        total=total+LoftBe;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("LoftBed").innerHTML =LoftBed;



      }

      else if(checker=="BunkBeds"){

        var BunkBed=1.6;
        BunkBeds=BunkBeds+1;

        total=total+BunkBed;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("BunkBeds").innerHTML =BunkBeds;



      }

      else if(checker=="BedsideTable"){

        var BedsideTabl=0.2;
        BedsideTable=BedsideTable+1;

        total=total+BedsideTabl;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("BedsideTable").innerHTML =BedsideTable;



      }

      else if(checker=="Cupboard"){

        var Cupboar=1.6;
        Cupboard=Cupboard+1;

        total=total+Cupboar;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cupboard").innerHTML =Cupboard;



      }

      else if(checker=="Bibliotheque1"){

        var Bibliothequ1=2;
        Bibliotheque1=Bibliotheque1+1;

        total=total+Bibliothequ1;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Bibliotheque1").innerHTML =Bibliotheque1;



      }

      else if(checker=="ChestOfDrawers"){

        var ChestOfDrawer=1.2;
        ChestOfDrawers=ChestOfDrawers+1;

        total=total+ChestOfDrawer;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("ChestOfDrawers").innerHTML =ChestOfDrawers;



      }

      else if(checker=="Chiffonier"){

        var Chiffonie=1.2;
        Chiffonier=Chiffonier+1;

        total=total+Chiffonie;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Chiffonier").innerHTML =Chiffonier;



      }

      else if(checker=="Desk"){

        var Des=1.2;
        Desk=Desk+1;

        total=total+Des;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Desk").innerHTML =Desk;



      }

      else if(checker=="ChairDesk"){

        var ChairDes=0.2;
        ChairDesk=ChairDesk+1;

        total=total+ChairDes;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("ChairDesk").innerHTML =ChairDesk;



      }

      else if(checker=="Cabinet"){

        var Cabine=0.5;
        Cabinet=Cabinet+1;

        total=total+Cabine;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cabinet").innerHTML =Cabinet;



      }

      else if(checker=="Computer"){

        var Compute=0.2;
        Computer=Computer+1;

        total=total+Compute;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Computer").innerHTML =Computer;



      }

      else if(checker=="Fax"){

        var Fa=0.2;
        Fax=Fax+1;

        total=total+Fa;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Fax").innerHTML =Fax;



      }

      else if(checker=="ComputerFurniture"){

        var ComputerFurnitur=0.5;
        ComputerFurniture=ComputerFurniture+1;

        total=total+ComputerFurnitur;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("ComputerFurniture").innerHTML =ComputerFurniture;



      }

      else if(checker=="Mower"){

        var Mowe=0.8;
        Mower=Mower+1;

        total=total+Mowe;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Mower").innerHTML =Mower;



      }

      else if(checker=="Lamp"){

        var Lam=0.1;
        Lamp=Lamp+1;

        total=total+Lam;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Lamp").innerHTML =Lamp;



      }

      else if(checker=="Mirror"){

        var Mirro=0.3;
        Mirror=Mirror+1;

        total=total+Mirro;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Mirror").innerHTML =Mirror;



      }

      else if(checker=="Cd"){

        var C=0.1;
        Cd=Cd+1;

        total=total+C;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cd").innerHTML =Cd;



      }

      else if(checker=="Book"){

        var Boo=0.1;
        Book=Book+1;

        total=total+Boo;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Book").innerHTML =Book;



      }

      else if(checker=="BathroomCabinet"){

        var BathroomCabine=0.2;
        BathroomCabinet=BathroomCabinet+1;

        total=total+BathroomCabine;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("BathroomCabinet").innerHTML =BathroomCabinet;



      }

      else if(checker=="Volumeof1"){

        var Volumeo1=0.5;
        Volumeof1=Volumeof1+1;

        total=total+Volumeo1;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof1").innerHTML =Volumeof1;



      }

      else if(checker=="Volumeof2"){

        var Volumeo2=1;
        Volumeof2=Volumeof2+1;

        total=total+Volumeo2;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof2").innerHTML =Volumeof2;



      }

      else if(checker=="Volumeof3"){

        var Volumeo3=1.5;
        Volumeof3=Volumeof3+1;

        total=total+Volumeo3;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof3").innerHTML =Volumeof3;



      }

      else if(checker=="Volumeof4"){

        var Volumeo4=2;
        Volumeof4=Volumeof4+1;

        total=total+Volumeo4;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof4").innerHTML =Volumeof4;



      }

      else if(checker=="Volumeof5"){

        var Volumeo5=2.5;
        Volumeof5=Volumeof5+1;

        total=total+Volumeo5;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof5").innerHTML =Volumeof5;



      }

      else if(checker=="Volumeof6"){

        var Volumeo6=3;
        Volumeof6=Volumeof6+1;

        total=total+Volumeo6;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof6").innerHTML =Volumeof6;



      }

  document.getElementById("totalend").value =total;

    }


    function Remove(checker) {




      if(checker=="table" && total>=0 && tables>=1){

        var table=0.8;
        tables=tables-1;

        total=total-table;
        total=Math.round(total * 100) / 100;


        if(total<=0){
          total=0;
        }

        document.getElementById("total").innerHTML =total;
        document.getElementById("tables").innerHTML =tables;



      }


      else if(checker=="table1" && total>=0 && tables1>=1){

        var table1=1.4;
        tables1=tables1-1;

        total=total-table1;
        total=Math.round(total * 100) / 100;


        if(total<=0){
          total=0;
        }

        document.getElementById("total").innerHTML =total;
        document.getElementById("tables1").innerHTML =tables1;



      }



      else if(checker=="sofapv3" && total>=0 && sofapv3>=1){

        var sofap3=2;
        sofapv3=sofapv3-1;

        total=total-sofap3;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("sofapv3").innerHTML =sofapv3;



      }

      else if(checker=="Canape2P" && total>=0 && Canape2P>=1){

        var Canape2=1.5;
        Canape2P=Canape2P-1;

        total=total-Canape2;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Canape2P").innerHTML =Canape2P;



      }

      else if(checker=="Fauteuil" && total>=0 && Fauteuil>=1){

        var Fauteui=0.4;
        Fauteuil=Fauteuil-1;

        total=total-Fauteui;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Fauteuil").innerHTML =Fauteuil;



      }


      else if(checker=="MeubleTV" && total>=0 && MeubleTV>=1){

        var MeubleT=0.8;
        MeubleTV=MeubleTV-1;

        total=total-MeubleT;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("MeubleTV").innerHTML =MeubleTV;



      }

      else if(checker=="television" && total>=0 && television>=1){

        var televisio=0.4;
        television=television-1;

        total=total-televisio;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("television").innerHTML =television;



      }


      else if(checker=="Bibliotheque" && total>=0 && Bibliotheque>=1){

        var Bibliothequ=2;
        Bibliotheque=Bibliotheque-1;

        total=total-Bibliothequ;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Bibliotheque").innerHTML =Bibliotheque;



      }

      else if(checker=="Chaise" && total>=0 && Chaise>=1){

        var Chais=0.2;
        Chaise=Chaise-1;

        total=total-Chais;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Chaise").innerHTML =Chaise;



      }

      else if(checker=="EquippedKitchen" && total>=0 && EquippedKitchen>=1){

        var EquippedKitche=2;
        EquippedKitchen=EquippedKitchen-1;

        total=total-EquippedKitche;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("EquippedKitchen").innerHTML =EquippedKitchen;



      }

      else if(checker=="Cooker" && total>=0 && Cooker>=1){

        var Cooke=0.5;
        Cooker=Cooker-1;

        total=total-Cooke;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cooker").innerHTML =Cooker;



      }

      else if(checker=="Microwave" && total>=0 && Microwave>=1){

        var Microwav=0.2;
        Microwave=Microwave-1;

        total=total-Microwav;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Microwave").innerHTML =Microwave;



      }

      else if(checker=="Cooktop" && total>=0 && Cooktop>=1){

        var Cookto=0.2;
        Cooktop=Cooktop-1;

        total=total-Cookto;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cooktop").innerHTML =Cooktop;



      }

      else if(checker=="Pan" && total>=0 && Pan>=1){

        var Pa=0.2;
        Pan=Pan-1;

        total=total-Pa;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Pan").innerHTML =Pan;



      }

      else if(checker=="Dishwasher" && total>=0 && Dishwasher>=1){

        var Dishwashe=0.5;
        Dishwasher=Dishwasher-1;

        total=total-Dishwashe;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Dishwasher").innerHTML =Dishwasher;



      }

      else if(checker=="WashingMachine" && total>=0 && WashingMachine>=1){

        var WashingMachin=0.5;
        WashingMachine=WashingMachine-1;

        total=total-WashingMachin;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("WashingMachine").innerHTML =WashingMachine;



      }

      else if(checker=="Fridge" && total>=0 && Fridge>=1){

        var Fridg=0.8;
        Fridge=Fridge-1;

        total=total-Fridg;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Fridge").innerHTML =Fridge;



      }

      else if(checker=="LowFurniture" && total>=0 && LowFurniture>=1){

        var LowFurnitur=0.4;
        LowFurniture=LowFurniture-1;

        total=total-LowFurnitur;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("LowFurniture").innerHTML =LowFurniture;



      }

      else if(checker=="Bed2P" && total>=0 && Bed2P>=1){

        var Bed2=2;
        Bed2P=Bed2P-1;

        total=total-Bed2;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Bed2P").innerHTML =Bed2P;



      }

      else if(checker=="Bed1P" && total>=0 && Bed1P>=1){

        var Bed1=1.2;
        Bed1P=Bed1P-1;

        total=total-Bed1;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Bed1P").innerHTML =Bed1P;



      }

      else if(checker=="LoftBed" && total>=0 && LoftBed>=1){

        var LoftBe=2;
        LoftBed=LoftBed-1;

        total=total-LoftBe;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("LoftBed").innerHTML =LoftBed;



      }

      else if(checker=="BunkBeds" && total>=0 && BunkBeds>=1){

        var BunkBed=1.6;
        BunkBeds=BunkBeds-1;

        total=total-BunkBed;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("BunkBeds").innerHTML =BunkBeds;



      }

      else if(checker=="BedsideTable" && total>=0 && BedsideTable>=1){

        var BedsideTabl=0.2;
        BedsideTable=BedsideTable-1;

        total=total-BedsideTabl;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("BedsideTable").innerHTML =BedsideTable;



      }

      else if(checker=="Cupboard" && total>=0 && Cupboard>=1){

        var Cupboar=1.6;
        Cupboard=Cupboard-1;

        total=total-Cupboar;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cupboard").innerHTML =Cupboard;



      }

      else if(checker=="Bibliotheque1" && total>=0 && Bibliotheque1>=1){

        var Bibliothequ1=2;
        Bibliotheque1=Bibliotheque1-1;

        total=total-Bibliothequ1;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Bibliotheque1").innerHTML =Bibliotheque1;



      }

      else if(checker=="ChestOfDrawers" && total>=0 && ChestOfDrawers>=1){

        var ChestOfDrawer=1.2;
        ChestOfDrawers=ChestOfDrawers-1;

        total=total-ChestOfDrawer;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("ChestOfDrawers").innerHTML =ChestOfDrawers;



      }

      else if(checker=="Chiffonier" && total>=0 && Chiffonier>=1){

        var Chiffonie=1.2;
        Chiffonier=Chiffonier-1;

        total=total-Chiffonie;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Chiffonier").innerHTML =Chiffonier;



      }

      else if(checker=="Desk" && total>=0 && Desk>=1){

        var Des=1.2;
        Desk=Desk-1;

        total=total-Des;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Desk").innerHTML =Desk;



      }

      else if(checker=="ChairDesk" && total>=0 && ChairDesk>=1){

        var ChairDes=0.2;
        ChairDesk=ChairDesk-1;

        total=total-ChairDes;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("ChairDesk").innerHTML =ChairDesk;



      }

      else if(checker=="Cabinet" && total>=0 && Cabinet>=1){

        var Cabine=0.5;
        Cabinet=Cabinet-1;

        total=total-Cabine;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cabinet").innerHTML =Cabinet;



      }

      else if(checker=="Computer" && total>=0 && Computer>=1){

        var Compute=0.2;
        Computer=Computer-1;

        total=total-Compute;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Computer").innerHTML =Computer;



      }

      else if(checker=="Fax" && total>=0 && Fax>=1){

        var Fa=0.2;
        Fax=Fax-1;

        total=total-Fa;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Fax").innerHTML =Fax;



      }

      else if(checker=="ComputerFurniture" && total>=0 && ComputerFurniture>=1){

        var ComputerFurnitur=0.5;
        ComputerFurniture=ComputerFurniture-1;

        total=total-ComputerFurnitur;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("ComputerFurniture").innerHTML =ComputerFurniture;



      }

      else if(checker=="Mower" && total>=0 && Mower>=1){

        var Mowe=0.8;
        Mower=Mower-1;

        total=total-Mowe;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Mower").innerHTML =Mower;



      }

      else if(checker=="Lamp" && total>=0 && Lamp>=1){

        var Lam=0.1;
        Lamp=Lamp-1;

        total=total-Lam;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Lamp").innerHTML =Lamp;



      }

      else if(checker=="Mirror" && total>=0 && Mirror>=1){

        var Mirro=0.3;
        Mirror=Mirror-1;

        total=total-Mirro;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Mirror").innerHTML =Mirror;



      }

      else if(checker=="Cd" && total>=0 && Cd>=1){

        var C=0.1;
        Cd=Cd-1;

        total=total-C;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Cd").innerHTML =Cd;



      }

      else if(checker=="Book" && total>=0 && Book>=1){

        var Boo=0.1;
        Book=Book-1;

        total=total-Boo;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Book").innerHTML =Book;



      }

      else if(checker=="BathroomCabinet" && total>=0 && BathroomCabinet>=1){

        var BathroomCabine=0.2;
        BathroomCabinet=BathroomCabinet-1;

        total=total-BathroomCabine;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("BathroomCabinet").innerHTML =BathroomCabinet;



      }

      else if(checker=="Volumeof1" && total>=0 && Volumeof1>=1){

        var Volumeo1=0.5;
        Volumeof1=Volumeof1-1;

        total=total-Volumeo1;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof1").innerHTML =Volumeof1;



      }

      else if(checker=="Volumeof2" && total>=0 && Volumeof2>=1){

        var Volumeo2=1;
        Volumeof2=Volumeof2-1;

        total=total-Volumeo2;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof2").innerHTML =Volumeof2;



      }

      else if(checker=="Volumeof3" && total>=0 && Volumeof3>=1){

        var Volumeo3=1.5;
        Volumeof3=Volumeof3-1;

        total=total-Volumeo3;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof3").innerHTML =Volumeof3;



      }

      else if(checker=="Volumeof4" && total>=0 && Volumeof4>=1){

        var Volumeo4=2;
        Volumeof4=Volumeof4-1;

        total=total-Volumeo4;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof4").innerHTML =Volumeof4;



      }

      else if(checker=="Volumeof5" && total>=0 && Volumeof5>=1){

        var Volumeo5=2.5;
        Volumeof5=Volumeof5-1;

        total=total-Volumeo5;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof5").innerHTML =Volumeof5;



      }

      else if(checker=="Volumeof6" && total>=0 && Volumeof6>=1){

        var Volumeo6=3;
        Volumeof6=Volumeof6-1;

        total=total-Volumeo6;

        total=Math.round(total * 100) / 100;

        document.getElementById("total").innerHTML =total;
        document.getElementById("Volumeof6").innerHTML =Volumeof6;



      }


  document.getElementById("totalend").value =total;



    }





  </script>

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