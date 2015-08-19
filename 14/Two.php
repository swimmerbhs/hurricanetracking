<?php
include 'database_connector.php'; //include database connection information0

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="index.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Two</title>
</head>
<body>
<div id="signin">
[ <a href="signin.php"> Sign In </a> [ <a href="signup.php"]>/</a> ]</div>
<div class="navbar">
<ol>
<li><a href="Arthur.php">Arthur</a></li>
<li><a href="Two.php">Two</a></li>
<li><a href="Bertha.php">Bertha</a></li>
<li><a href="Cristobal.php">Cristobal</a></li>
</ol>
</div>
<div id="results">
<?php
$result=mysqli_query($con, "select * from Spots14 where name = 'Two' LIMIT 0, 50 ");
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
  echo "<tr>   				
  		<td>".$cat."</td>		
  		<td>".$name."</td>
        <td>".$date."</td>
        <td>".$time."</td>
		<td>".$lat."</td>
		<td>".$long."</td>
		<td>".$wind."</td>
		<td>".$direct."</td>
		<td>".$speed."</td>
		<td>".$pressure."</td>		
		</tr>";  // row by row 
} 
echo "</table>"
?>
</div>
<?php
mysqli_close($con);				//close command
?> 
</body>
</html>