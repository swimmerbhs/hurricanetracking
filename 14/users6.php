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
if(isset($_POST['delete']))       // if checkbox in any row will delete
{
	foreach($_POST['checkbox'] as $id)
	{
		$result=mysqli_query($con,"delete from Spots14 where `ID` ='$id'");
		if($result){
			echo "Successfully deleted";}
		
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="index.css" rel="stylesheet" type="text/css" /> <!--css sytle sheet-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Users Page 6</title>
</head>
<body>
<div id="floatleft"> <!-- float scoreboard to the left and the sign in to the right -->
</div>
<div id="signin">
[ <a href="addform.php">Add</a>  ]
[ <a href="signup.php">Sign Up</a> ]
[ <a href="signin.php">Sign In</a> ]
[ <a href="logout.php">Log Out</a> ]
</div>
<div class="navbar">
<ol>
<li><a href="Arthur.php">Arthur</a></li>
<li><a href="Two.php">Two</a></li>
<li><a href="Bertha.php">Bertha</a></li>
<li><a href="Cristobal.php">Cristobal</a></li>
</ol>
<a href="users.php">1</a> <a href="users2.php">2</a> <a href="users3.php">3</a> <a href="users4.php">4</a> <a href="users5.php">5</a> <a href="users6.php">6</a> <a href="users7.php">7</a><!-- <a href="users8.php">8</a> <a href="users9.php">9</a> <a href="users10.php">10</a>
-->
</div>
<form name="update" action="users.php" method="post" id="results">
<?php 
$result=mysqli_query($con, "select * from Spots14 LIMIT 151, 30 ");
echo "<table>"; //formats table with these headers
echo "<tr>
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
	  </tr>";	
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
<td align="center"><input name="checkbox[]" type="checkbox" value="<? echo $id; ?>"></td>
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
} 
<?php
}
echo "</table>"
?>
<input type="submit" value="delete" name="delete" id="delete" />
<input type="submit" value="update" name="update" id="update" />
</form>
</div>
</body>
</html>