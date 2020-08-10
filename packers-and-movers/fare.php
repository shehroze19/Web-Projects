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


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzcnUzg438bNiRu7BMrcPtuJVqAHNKe0s&sensor=false&libraries=places"></script>
<script type="text/javascript">
        //<![CDATA[
        var map = null;
        var directionDisplay;
        var directionsService = new google.maps.DirectionsService();

        function initialize() {
          directionsDisplay = new google.maps.DirectionsRenderer();

          var Australia = new google.maps.LatLng(-25.085599,133.66699);

          var mapOptions = {  
            center              : Australia,
            zoom                : 4,
            minZoom             : 3,
            streetViewControl   : false,
            mapTypeId           : google.maps.MapTypeId.ROADMAP,
            zoomControlOptions  : {style:google.maps.ZoomControlStyle.MEDIUM}
          };


          map = new google.maps.Map(document.getElementById('map_canvas'),
            mapOptions);

             //Find From location    
             var fromText = document.getElementById('start');
             var fromAuto = new google.maps.places.Autocomplete(fromText);
             fromAuto.bindTo('bounds', map);
        //Find To location
        var toText = document.getElementById('end');
        var toAuto = new google.maps.places.Autocomplete(toText);
        toAuto.bindTo('bounds', map);
        //  
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('directions-panel'));

            /*var control = document.getElementById('control');
            control.style.display = 'block';
            map.controls[google.maps.ControlPosition.TOP].push(control);*/
          }

          function calcRoute() {
            var start = document.getElementById('start').value;
            var end = document.getElementById('end').value;
            var request = {
              origin: start,
              destination: end,
              travelMode: google.maps.DirectionsTravelMode.DRIVING
            };
            directionsService.route(request, function(response, status) {
              if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                computeTotalDistance(response);
              }
            });
          }
          function computeTotalDistance(result) {
            var total = 0;
            var myroute = result.routes[0];
            for (i = 0; i < myroute.legs.length; i++) {
              total += myroute.legs[i].distance.value;
            }
            total = total / 1000;




            var to =document.getElementById("start").value;
            var from =document.getElementById("end").value;

            document.getElementById("total").innerHTML = "Total Distance = " + total + " km";
            document.getElementById("total").innerHTML += "<form action='fare_items.php' method='post'><input type='hidden' name='distance' value='"+total+"' class='form-control'></input><input type='hidden' name='from' value='"+from+"' class='form-control'></input><input type='hidden' name='to' value='"+to+"' class='form-control'></input><input type='submit' value='Procede to Next Page for booking'></form>";

          }


          function auto() {
            var input = document.getElementById[('start'), ('end')];
            var types
            var options = {
             types: [],
             componentRestrictions: {country: ["AUS"]}
           };
           var autocomplete = new google.maps.places.Autocomplete(input, options);
         }

         google.maps.event.addDomListener(window, 'load', initialize);
       </script>
     </head>
     <body onLoad="initialize()" class="text-center">





      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary text-right"  data-toggle="modal" data-target="#exampleModal">
        Click here for a guide about our Trucks
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <img class="img-responsive" src="images/fareGuidepic.png">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <br><br>
      <br><br>







        <div class="col-md-4"></div>



        <div class="container-fluid text-center">
          <table width="380px" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF9F0F" style="border-collapse:collapse">
            <tr>
              <td bgcolor="#FFFF99" style="padding:5px;">
                <table class="text-center" width="375px" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div  id="map_canvas" style="width: 374px; height: 300px; border: solid 1px #336699"></div></td>
                  </tr>
                  <tr>
                    <td><div id="form" style="width:374px; text-align:center; border: solid 1px #336699; background:#d1e1e4;">
                      From:
                      <input type="text" id="start" class="form-control" size="60px" name="start" placeholder="Enter Location From">
                      <br />
                      To:
                      <input size="60px" type="text" id="end" class="form-control" name="end" placeholder="Enter Destination ">
                      <input type="button" value="Calculate"  onClick="calcRoute();">
                      <div id="total"></div>
                    </div></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
</div>
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