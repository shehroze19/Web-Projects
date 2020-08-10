<?php 
include('connection.php');

@include('session.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Delivery</title>





    <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Custom styles for this template -->

  <link href="css/welcome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">



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

<?php $ourid=@$_GET['id']; ?>


            var from =document.getElementById("start").value;
            var to =document.getElementById("end").value;

            document.getElementById("total").innerHTML = "Total Distance = " + total + " km";
            document.getElementById("total").innerHTML += "<form action='pharmacy_items_delivery.php' method='post'><input type='hidden' name='distance' value='"+total+"' class='form-control'></input><input type='hidden' name='pharmacy_name' value='<?php echo @$ourid; ?>' class='form-control'></input><input type='hidden' name='from' value='"+from+"' class='form-control'></input><input type='hidden' name='to' value='"+to+"' class='form-control'></input><input type='submit' value='Click here to selct your medicines'></form>";

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
                      <input type="text" id="start" class="form-control" size="60px" name="start" value="<?php echo @$ourid; ?>" placeholder="Enter Location From" readonly>
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
      <!-- Bootstrap -->
      <script src="js/bootstrap.min.js"></script>
  
      <script src="js/main.js"></script>

    </body>
    </html>