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
    <title>Simple markers</title>
    <script src="http://maps.googleapis.com/maps/api/js">
</script>
<script>
var arr = <?php echo json_encode($new) ?>;
var x=new google.maps.LatLng(25.754281, -80.383565);

function initialize()
{
var mapProp = {
  center:x,
  zoom:6,
  mapTypeId:google.maps.MapTypeId.HYBRID
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

for(var i=0; i < arr.length; i++)
{
    var lat = Number(arr[i].split(",")[0].trim());
    var lng = Number(arr[i].split(",")[1].trim());
    var first = new google.maps.LatLng(lat,lng);
}
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var flightPath=new google.maps.Polyline({
  path:first,
  strokeColor:"#0000FF",
  strokeOpacity:0.8,
  strokeWeight:2
  });

flightPath.setMap(map);
}


google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
</body>
</html>