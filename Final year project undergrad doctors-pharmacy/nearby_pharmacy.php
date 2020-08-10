<?php 
include('connection.php');

@include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EzHealth</title>
	<meta name="description" content="Shehroze Aamer,Abbas Afzal">




	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
html, body, #map-canvas {
  height: 700px;
  margin: 0px;
  padding: 0px

}

body{
  overflow: hidden;
}


</style>
</head>

<body>
	<!--banner-->

<form action='' id="none" method='post'><input class="form-control text-center" type='number' placeholder='Enter your value in Kilometers for the diameter to Change distance of nearby Hospitals' style="color: black;" name='radius' required>
  <input type='submit' class="btn btn-info btn-block" value='Submit'></form>



  <div id="pharmacies"></div>

<?php 

  if(count($_POST)>0){
                
                $radius=$_POST['radius'];
                $radius=$radius*500;


  



                  $query="UPDATE `others` SET 
`radius`='$radius'
                   where `id`='1'";


                  $runner=mysqli_query($con,$query);


                  if($runner){ }



                }

 ?>



<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuBzeYkYimIquGG5KkIcB6vFmtHMUzDFo&libraries=places&callback=initialize"></script>




<div id="map-canvas">
  

</div>


										



								<script src="js/jquery.min.js"></script>
								<script src="js/bootstrap.min.js"></script>
								<script src="js/custom.js"></script>

							</body>

<script>




  var map;
var infowindow;

function initialize() {


 if (navigator.geolocation) {
                try {
                  navigator.geolocation.getCurrentPosition(function(position) {
                    var myLocation = {
                        // lat: position.coords.latitude, 
                     //lng: position.coords.longitude
                      lat: 33.6480521,
                    lng: 73.1561413
                    };
                    setPos(myLocation);
                  });
                } catch (err) {
                  var myLocation = {
                    lat: 33.6518263,
                    lng: 73.1565933
                  };
                  setPos(myLocation);
                }
              } else {
                var myLocation = {
                      lat: 33.6518263,
                    lng: 73.1565933
                };
                setPos(myLocation);
              }
            }



            function setPos(myLocation) {
              map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: myLocation,
                zoom: 15,
                label: "Current Location",
                  animation: google.maps.Animation.DROP,
    position: myLocation,
     mapTypeControl: true,
        navigationControl: true,
                
              });


 var loop_value=parseInt('<?php 
  $query="SELECT * FROM `pharmacist`";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result);

  $count = mysqli_num_rows($result);
  echo $count;
    ?>');

if(loop_value==0){
    document.getElementById('pharmacies').innerHTML+='<h2 class="text-center" style="color:black">No Registered Pharmacies Found Nearby</h2>';

}
else if(loop_value==1){
    document.getElementById('pharmacies').innerHTML+='<h2 class="text-center" style="color:black">Total '+loop_value+' Registered Pharmacy Found Nearby</h2>';

}
else{
    document.getElementById('pharmacies').innerHTML+='<h2 class="text-center" style="color:black">Total '+loop_value+' Registered  Pharmacies Found Nearby</h2>';

}



  var request = {
    location: myLocation,
    radius: <?php 
            $result=mysqli_query($con,"select * from others");



          while($data = mysqli_fetch_assoc($result)){

            $value=$data['radius'];


          } echo $value; ?>,

    types: ['pharmacy'] // this is where you set the map to get the hospitals and health related places
  };

  var marker = new google.maps.Marker({
  map: map,
  position: new google.maps.LatLng(myLocation.lat,myLocation.lng),
  label: 'Your Location'
});

// Add circle overlay and bind to marker
var circle = new google.maps.Circle({
  map: map,
  radius: <?php echo $value; ?>,    // metres
  fillColor: ' rgba(0, 0, 0, 0.5)'
});
circle.bindTo('center', marker, 'position');





  infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
}




function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);





    }
  }
}

function createMarker(place) {

    

  var placeLoc = place.geometry.location;


var place_name=place.name;
 place_name = place_name.replace(/\s/g, '');
alert(place_name);
var all_places=<?php 




$query="SELECT * FROM `pharmacist`";
	$result = mysqli_query($con,$query);
$totalplaces="";
	while($row=mysqli_fetch_array($result)){

$totalplaces=$totalplaces.$row[4];





	}

echo '"'.str_replace(' ', '',$totalplaces).'"';



 ?>


if(all_places.includes(place_name)){

	 var marker = new google.maps.Marker({
    map: map,
    animation: google.maps.Animation.DROP,
    position: place.geometry.location,
     label: {text: place.name, color: "rgb(1,1,1)",fontSize: "16px"}
   

  });



}
else{

 var marker = new google.maps.Marker({
    map: map,
    animation: google.maps.Animation.DROP,
   

  });


}




var contentString = '<div style="color:black;">Click the link below to see registered Pharmacy at '+place.name+'<br><a target="_blank" href="all_pharmacy_search.php?symbol='+place.name+'">here</a>';

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(contentString);
    infowindow.open(map, this);
  });
}




google.maps.event.addDomListener(window, 'load', initialize);




</script>
							</html>
