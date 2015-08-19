<?php
include 'database_connector.php'; //include database connection information
$new = array();
$result=mysqli_query($con, "select * from Spots15 where `Name` = 'Ana' or 'One'");
while($row=mysqli_fetch_array($result)){
  $lat    	= $row['LAT'];
  $long    	= $row['LONG'];
  $latlong  = $lat.", ". $long;
  array_push($new, $latlong);
}
	//print_r($new);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hurricane 2015 Ana</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hurricane Tracking</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
         <li><a href="cat.php">Category Information</a></li> 
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Current
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="Ana.php">Ana</a></li>
            <!--<li><a href="Bill.php">Bill</a></li>
            <!--<li><a href="Claudette.php">Claudette</a></li>
            <!--<li><a href="Danny.php">Danny</a></li>
            <!--<li><a href="Erika.php">Erika</a></li>
            <!--<li><a href="Fred.php">Fred</a></li>-->
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Historical
          <span class="caret"></span></a>
 <ul class="dropdown-menu">
          <li><a href="Ana.php">Ana</a></li>
            <!--<li><a href="Bill.php">Bill</a></li>
            <!--<li><a href="Claudette.php">Claudette</a></li>
            <!--<li><a href="Danny.php">Danny</a></li>
            <!--<li><a href="Erika.php">Erika</a></li>
            <!--<li><a href="Fred.php">Fred</a></li>-->
      </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="results">
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
$result=mysqli_query($con, "select * from Spots15 where `Name` = 'Ana' or 'One' LIMIT 0, 50 ");	  
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

<!--1 <a href="index2.php">2</a> <a href="index3.php">3</a> <a href="index4.php">4</a>-->
</div>
</body>
</html>
