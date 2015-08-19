<?php
include 'database_connector.php';
session_start();
if(isset($_POST['Submit']))
{  //on form submit will store values into these variables
$cat=$_POST['cat'];
$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$speed=$_POST['wind'];
$direct=$_POST['direction'];
$move=$_POST['speed'];
$pressure=$_POST['pressure'];
$result=mysqli_query($con, "INSERT INTO `Spots14`(`ID`, `DATE`, `NAME`, `TIME`, `LONG`, `LAT`, `WINDSPEED`, `DIRECTION`, `MOVEMENT`, `PRESSURE`, `CATAGORY`) VALUES ('','$date','$name','$time','$lat','$long','$speed','$direct','$move','$pressure','$cat')");
if($result){ print "Coordinates added"; header("location:users.php");}
else{print "Coordinates not added"; }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="index.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Coordinate add</title>
</head>
<body>
<form action="addform.php" name="add" method="post">
Catagory Type:(TD, TS, H1, H2, H3, H4, H5)<input type="text" name="cat" size="30"><br>
Name of Storm:<input type="text" name="name" size="30"><br>
Date:(yyyy-mm-dd)<input type="text" name="date"> <br>
Time of Update:
<select name="time">
<optgroup label="time">
	<option value="null">Please Choose Time of Update</option>
    <option value="02:00:00 AM">02:00 AM</option>
    <option value="05:00:00 AM">05:00 AM</option>
	<option value="08:00:00 AM">08:00 AM</option>
    <option value="11:00:00 AM">11:00 AM</option>
	<option value="02:00:00 PM">02:00 PM</option>
    <option value="05:00:00 PM">05:00 PM</option>
	<option value="08:00:00 PM">08:00 PM</option>
    <option value="11:00:00 PM">11:00 PM</option>
</optgroup>
</select>
<br>
Latitude:<input type="text" name="lat" size="30"><br>
Longitude:<input type="text" name="long" size="30"><br>
Wind Speed:<input type="text" name="wind" size="30"><br>
Direction:<input type="text" name="direction" size="30"><br>
Movement:<input type="text" name="speed" size="30"><br>
Pressure:<input type="text" name="pressure" size="30"><br>
<input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>
