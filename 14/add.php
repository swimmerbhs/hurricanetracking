<?php
include 'database_connector.php';
session_start();
if(isset($_POST['Submit'])){  
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
$uploaddir='uploads/';
$target_file = $target_dir . basename($_FILES["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES["tmp_name"]);
$result=mysqli_query($con, "INSERT INTO `Spots15`(`ID`, `DATE`, `NAME`, `TIME`, `LONG`, `LAT`, `WINDSPEED`, `DIRECTION`, `MOVEMENT`, `PRESSURE`, `CATAGORY`) VALUES ('','$date','$name','$time','$lat','$long','$speed','$direct','$move','$pressure','$cat')");
if($result){ print "Coordinates added"; header("location:users.php");}
else{print "Coordinates not added"; }
if(isset($fivedaycone)) {
    $check = getimagesize($_FILES["5daycone"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
	    $uploadOk = 0;
    //header( "refresh:5;url=add.php" );
	}
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
	//header( "refresh:5;url=add.php" );
    $uploadOk = 0;
}
// Check file size
if ($_FILES["size"] > 5000000) {
    echo "Sorry, your file is too large.";
	//header( "refresh:5;url=addp.php" );
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	header( "refresh:5;url=add.php" );
// if everything is ok, try to upload file
} 
else {
    if (move_uploaded_file($_FILES["5daycone"]["tmp_name"], "uploads/5daycone/")) {
        echo "The file ". basename( $_FILES["5daycone"]["name"]). " has been uploaded.";
		$result2=mysqli_query($con, "INSERT INTO `5daycone`(`id`, `name`, `type`, `size`, `content``) VALUES ('','$target_file','$imageFileType','$check','')");
		header('location: users.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    header("location: add.php");
	}
	
}
if(isset($threedaycone)) {
	$check = getimagesize($_FILES["3daycone"]["tmp_name"]);
     if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
		$uploadOk = 0;
    //header( "refresh:5;url=add.php" );
	}
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
	//header( "refresh:5;url=add.php" );
    $uploadOk = 0;
}
// Check file size
if ($_FILES["size"] > 5000000) {
    echo "Sorry, your file is too large.";
	//header( "refresh:5;url=add.php" );
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
	header( "refresh:5;url=add.php" );
// if everything is ok, try to upload file
}
else{
    if (move_uploaded_file($_FILES["3daycone"]["tmp_name"],"$target_dir/$threedaycone/")) {
        echo "The file ". basename( $_FILES["3daycone"]["name"]). " has been uploaded.";
		$result3=mysqli_query($con, "INSERT INTO `3DayCone`(`id`, `name`, `date`, `time`, `type`, `size`, `content``) VALUES ('','$target_file', '$today', '$time','$imageFileType','$check','')");
		header('location: addform.php');}
}
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="index.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<title>Coordinate add</title>
</head>
<body>
<form action="add.php" name="add" method="post" id="form" enctype="multipart/form-data">
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
	<option value="null">Please Choose Time of Update</option>
    <option value="12:00:00">12:00 AM</option>
    <option value="01:00:00">01:00 AM</option>
    <option value="02:00:00">02:00 AM</option>
    <option value="03:00:00">03:00 AM</option>
    <option value="04:00:00">04:00 AM</option>
    <option value="05:00:00">05:00 AM</option>
    <option value="06:00:00">06:00 AM</option>
	<option value="07:00:00">07:00 AM</option>
	<option value="08:00:00">08:00 AM</option>
    <option value="09:00:00">09:00 AM</option>
    <option value="10:00:00">10:00 AM</option>
    <option value="11:00:00">11:00 AM</option>
    <option value="12:00:00">12:00 PM</option>
	<option value="13:00:00">01:00 PM</option>
    <option value="14:00:00">02:00 PM</option>
    <option value="15:00:00">03:00 PM</option>
    <option value="16:00:00">04:00 PM</option>
    <option value="17:00:00">05:00 PM</option>
	<option value="18:00:00">06:00 PM</option>
    <option value="19:00:00">07:00 PM</option>
    <option value="20:00:00">08:00 PM</option>
    <option value="21:00:00">09:00 PM</option>
    <option value="22:00:00">10:00 PM</option>
    <option value="23:00:00">11:00 PM</option>
    <option value="24:00:00">12:00 PM</option>
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
<tr><td>3 day cone</td><td> <input id="threedaycone" type="file" name="3daycone"/></td></tr>
<tr><td>5 day cone</td><td> <input id="fivedaycone" name="5daycone" type="file" /></td></tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>
