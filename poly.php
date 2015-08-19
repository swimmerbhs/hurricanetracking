<?php
include '/database_connector.php'; //include database connection information
$new = array();
$result=mysqli_query($con, "select * from Spots15 where `Name` = 'Ana' or 'One'");
while($row=mysqli_fetch_array($result)){
  $lat    	= $row['LAT'];
  $long    	= $row['LONG'];
  $latlong  = $lat.", ". $long;
  array_push($new, $latlong);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Polylines</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
<script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
// This example creates a 2-pixel-wide red polyline showing
// the path of William Kingsford Smith's first trans-Pacific flight between
// Oakland, CA, and Brisbane, Australia
var arr = <?php echo json_encode($new) ?>;
var x=new google.maps.LatLng(25.754281, -80.383565);
function initialize() {
  var mapOptions = {
    zoom: 5,
    center: x,
    mapTypeId: google.maps.MapTypeId.HYBRID
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
for(var i=0; i < arr.length; i++)
{
    var lat = Number(arr[i].split(",")[0].trim());
    console.log(lat);
    var lng = Number(arr[i].split(",")[1].trim());
   console.log(lng); 
   var first = new google.maps.LatLng(lat,lng); 
    console.log(first);
   //var text = "";
   //var ana = [];
   //ana.push(text += "new google.maps.LatLng(" + arr[i] + "),");
   //ana.push("new google.maps.LatLng(arr[i])"); 
  //  console.log(ana);
}
 
  var flightPath = new google.maps.Polyline({
    path: first,
    geodesic: true,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
  });

  flightPath.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>

