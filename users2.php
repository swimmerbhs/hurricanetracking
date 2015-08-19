<?php
	session_start();
	if(!isset($_SESSION['userName'])) //without being logged in you can not do anything
	{
		session_destroy();
		header("location:index.php");
	}
	if(isset($_POST['logout']))
{
		header("location:logout.php"); // log out 
}
include 'database_connector.php'; // databse information
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="hurricane.ico">
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="/css/index.css" rel="stylesheet" type="text/css" />
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<style type='text/css'>
body{ background-color: black; }
/*This will work for chrome */
                    .col-md-8
                    {
                        width:893px;
                    }
/*This will work for firefox*/
                    @-moz-document url-prefix() {
                        .col-md-8{
                        width:907px;
                    }
                    }
                @media (min-width: 979px) {
  ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;
  }
}
              </style>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(25.754281, -80.383565),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.HYBRID
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
function loadScript()
{
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=&sensor=false&callback=initialize";
  document.body.appendChild(script);
}

var marker=new google.maps.Marker({
  position:myCenter,
  });


window.onload = loadScript;
marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"NHC!"
  });

infowindow.open(map,marker);

}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hurricane 2015 Users</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index.php">Hurricane Tracking</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="users.php">Users</a></li>
         <li><a href="cat.php">Category Information</a></li> 
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Current
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="Ana.php">Ana</a></li>
            <li><a href="Bill.php">Bill</a></li>
            <li><a href="Claudette.php">Claudette</a></li>
            <li><a href="Danny.php">Danny</a></li>
            <li><a href="Erika.php">Erika</a></li>
            <li><a href="Fred.php">Fred</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Historical
          <span class="caret"></span></a>
 <ul class="dropdown-menu">
          <li>2014</li>
            <li class="divider"></li>
            <li><a href="14/Arthur.php">Arthur</a></li>
            <li><a href="14/Bertha.php">Bertha</a></li>
            <li><a href="14/Cristobal.php">Cristobal</a></li>
            <li><a href="14/Dolly.php">Dolly</a></li>
            <li><a href="14/Edouard.php">Edouard</a></li>
            <li><a href="14/Fay.php">Fay</a></li>
	     <li><a href="14/Gonzalo.php">Gonzalo</a></li>
            <li><a href="14/Hanna.php">Hanna</a></li>
      </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="add.php"><span class="glyphicon glyphicon-plus"></span> Add</a></li>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<ol class="breadcrumb">
  <li><a href="Index.php">Home</a></li>
  <li class="active">Users</li>
</ol>
<div class="container-fluid" style="background-color:black">
<div class="results col-md-8">
  <table class="table table-hover">
<tr>
	  <th>Catagory</th>
	  <th>Name</th>
	  <th>Date</th>
	  <th>Update Time</th>
	  <th>Latitude</th>
	  <th>Longitude</th>
	  <th>Wind Speed</th>
	  <th>Direction</th>
	  <th>Movement</th>
	  <th>Pressure</th>
    </tr>	
<?php
$result=mysqli_query($con, "select * from Spots15  LIMIT 0, 50 ");	  
while($row=mysqli_fetch_array($result)){
  $id       = $row['ID'];
  $cat		= $row['CATAGORY'];
  $name		= $row['NAME']; 	
  $date     = $row['DATE'];    //stores the column name from table in a variable 
  $time     = $row['TIME'];	// so the rows can be formated like this	
  $lat    	= $row['LAT'];
  $long    	= $row['LONG'];
  $wind    	= $row['WINDSPEED'];
  $direct   = $row['DIRECTION'];
  $speed	= $row['MOVEMENT'];
  $pressure	= $row['PRESSURE'];
 ?>
<tr>
<td><? echo $cat; ?></td>
<td><? echo $name; ?></td>
<td><? echo $date; ?></td>
<td><? echo $time; ?></td>
<td><? echo $lat; ?></td>
<td><? echo $long; ?></td>
<td><? echo $wind; ?></td>
<td><? echo $direct; ?></td>
<td><? echo $speed; ?></td>
<td><? echo $pressure; ?></td>
</tr>

<?php
}
?>
</table>
<nav>
  <ul class="pagination pagination-sm">
    <li class="active"><a href="users.php" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
    <li class="active"><a href="users.php">1 <span class="sr-only"></span></a></li>
    <li class="active"><a href="users2.php">2 <span class="sr-only">(current)</span></a></li>
    <li class="disable"><a href="users2.php" aria-label="Next"><span aria-hidden="true">&rsaquo;</span></a></li>
    <li class="active"><a href="users2.php" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
  </ul>
</nav>
</div>
<div class="col-md-4">
<div id="googleMap" style="width:450px;height:380px;"></div>
</div>
</div>
</body>
</html>