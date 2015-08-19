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
$threedaycone=$_POST['3daycone'];
$fivedaycone=$_POST['5daycone'];
$result=mysqli_query($con, "INSERT INTO `Spots15`(`ID`, `DATE`, `NAME`, `TIME`, `LONG`, `LAT`, `WINDSPEED`, `DIRECTION`, `MOVEMENT`, `PRESSURE`, `CATAGORY`) VALUES ('','$date','$name','$time','$lat','$long','$speed','$direct','$move','$pressure','$cat')");
if($result){ print "Coordinates added"; header("location:index.php");}
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
<form action="addform.php" name="add" method="post" id="addform">
<table class="table-addform" cellspacing="1px" width="75%"><tr>
<td>Catagory Type:(TD, TS, H1, H2, H3, H4, H5)</td>
<td><input type="text" name="cat" size="30"></td>
</tr>
<tr>
<td>Name of Storm:</td>
<td><input type="text" name="name" size="30"></td>
</tr>
<tr>
<td>Date:(yyyy-mm-dd)</td>
<td><input type="text" name="date"></td>
</tr>
<tr>
<td>Time of Update:</td>
<td><select name="time">
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
    </select>
    <select name="time">
    <option value="null">Select other Time</option>
    <option value="12:00:00 AM">12:00 AM</option>
    <option value="01:00:00 AM">01:00 AM</option>
    <option value="03:00:00 AM">03:00 AM</option>
    <option value="04:00:00 AM">04:00 AM</option>
    <option value="06:00:00 AM">06:00 AM</option>
	<option value="07:00:00 AM">07:00 AM</option>
    <option value="09:00:00 AM">09:00 AM</option>
    <option value="10:00:00 AM">10:00 AM</option>
    <option value="12:00:00 PM">12:00 PM</option>
    <option value="01:00:00 PM">01:00 PM</option>
	<option value="03:00:00 PM">03:00 PM</option>
    <option value="04:00:00 PM">04:00 PM</option>
	<option value="06:00:00 PM">06:00 PM</option>
    <option value="07:00:00 PM">07:00 PM</option>
    <option value="09:00:00 PM">09:00 PM</option>
    <option value="10:00:00 PM">10:00 PM</option>

  </optgroup>
</select></td>
</tr>
<tr>
<td>Latitude:</td>
<td><input type="text" name="lat" size="30"></td>
</tr>
<tr>
<td>Longitude:</td>
<td><input type="text" name="long" size="30"></td>
</tr>
<tr>
<td>Wind Speed:</td>
<td><input type="text" name="wind" size="30"></td>
</tr>
<tr>
<td>Direction:</td>
<td><input type="text" name="direction" size="30"></td>
</tr>
<tr>
<td>Movement:</td>
<td><input type="text" name="speed" size="30"></td>
</tr>
<tr>
<td>Pressure:</td>
<td><input type="text" name="pressure" size="30"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
<form action="upload3.php" enctype="multipart/form-data"  method="post">
<table class="table-3day">
<tr>
<td>3 day cone</td><td> <input id="threedaycone" type="file" name="threedaycone"/><input type="submit" name="Submit" value="Upload 3 Day Cone"></td>
</tr>
</table>
</form>
<form action="upload5.php" enctype="multipart/form-data"  method="post">
<table class="table-5day">
<tr>
<td>5 day cone</td><td> <input id="fivedaycone" name="fivedaycone" type="file" /><input type="submit" name="Submit" value="Upload 5 Day Cone"></td>
</tr>
</table>
</form>
</body>
</html>